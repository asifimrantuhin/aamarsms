<?php

namespace App\Http\Controllers\Reseller;

use App\Exports\ContactExport;
use App\Helpers\Log;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Group;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Excel;
use Illuminate\Support\Facades\Validator;
use Rap2hpoutre\FastExcel\FastExcel;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function createGroup() {
        $users = Auth::user();
        $groups = Group::where('user_id',$users->id)->where('type',1)->orderBy('id', 'DESC')->paginate(10);
        return view('reseller.management.group.create_group',compact('users','groups'));
    }


    public function index(Request $request)
    { 
       $users= Auth::user();
      $groups = Group::where('user_id',$users->id)->where('type',1)->orderBy('id', 'DESC')->paginate(10);
       return view('reseller.management.group.index',compact('users','groups'));
    }

    public function viewGroup($id) {
        $group = Group::where('id', $id)->get();
        return json_decode($group);
    }

    public function downloadGroup($type,$id)
    {

        $group = Group::whereId($id)->get();
        $group_name = $group[0]->name;
        
        $data = Contact::where('group_id',$id)->select('number')->get()->toArray();
        $data= json_decode( json_encode($data), true);

        return Excel::download(new ContactExport($data), "$group_name.$type");   
    }

    public function addContactOnGroup(Request $r, $id) {

        $user = Auth::user();
        $user_id = $user->id;
        $parent_id = $user->parent_user;
        
        if( $r->input('number') != null) {
            $numbers = $r->input('number');
        }

        if ($r->input('raw_msisdn') || $r->hasFile('file_msisdn')) {
            if ($r->hasFile('file_msisdn')) {
                $path = request()->file('file_msisdn')->getRealPath();
                $ext = request()->file('file_msisdn')->getClientOriginalExtension();
                $numbers = array();
                if ($ext == 'xlsx' || $ext == 'xls') {
                    $collection = (new FastExcel)->import($path);
                    foreach ($collection as $c) {
                        foreach ($c as $key => $value) {
                            array_push($numbers, $value);
                        }
                    }
                } else {
                    $numbers = file($path);
                }
            } else {
                $rawdata = $r->input('raw_msisdn');
                $numbers = explode(",", $rawdata);
            }
        }
        $numbers = array_values(array_unique($numbers)); 

        $count = count($numbers);
        if($count > 0) {
            $batcharray = array();
            $c = 0;
            $r = $count % 100;
            $contact = new Contact;
            foreach ($numbers as $number) {
                $c++;
                $data = array();
                $time = date('Y-m-d h:m:s');
                $pn = $this->formatPhoneNumber($number);
                if ($pn->opCd != '') {
                    $data = [
                        'group_id' => $id,
                        'user_id' => $user_id,
                        'reseller_id' => $parent_id,
                        'number' => $pn->pNo,
                        'country_code' => ($pn->cnCd > 0 ? $pn->cnCd : 880), //null
                        'operator' => $pn->opCd,
                        'status' => ($pn->cnCd > 0 ? $pn->sts : 3),
                        'created_at' => $time,
                        'updated_at' => $time,
                    ];

                    $batcharray[] = $data;
                    if ($c % 100 == 0) {
                        $c_upload = $contact::insert($batcharray);
                        $batcharray = array();
                        $c = 0;
                    }
                } 
            }

            if ($c == $r) {
                $c_upload = $contact::insert($batcharray);
            }
            $contactgroup = new Group;
            $total_contact = Contact::where('group_id', $id)->count();
            $contactgroup->where('id', $id)->update(['contacts_count' => $total_contact]);
           
            Log::addToLog("$total_contact contacts added in Group");
            Toastr::success("Contact added in gorup successfully :)",'Success');
            return redirect('reseller/contact_group')->with('success', $count .' Contacts added in your group');
        } else {
            
            return redirect('reseller/contact_group')->with('error', 'No contact list uploaded');
        }
    }

    public function saveGroup(Request $request) {
      
        $users = Auth::user();
        $user_id = $users->id;
        $parent_id = $users->parent_user;

        $validator = Validator::make($request->all(), [
                    'group_name' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('reseller/create_group')->withErrors($validator);
        }



        if ($request->input('raw_msisdn') || $request->hasFile('file_msisdn')) {
            if ($request->hasFile('file_msisdn')) {
                $path = request()->file('file_msisdn')->getRealPath();
                $ext = request()->file('file_msisdn')->getClientOriginalExtension();
                $arrData = array();
                if ($ext == 'xlsx' || $ext == 'xls') {
                    $collection = (new FastExcel)->import($path);
                    foreach ($collection as $c) {
                        foreach ($c as $key => $value) {
                            array_push($arrData, $value);
                        }
                    }
                } else {
                    $arrData = file($path);
                }
            } else {
                $rawdata = $request->input('raw_msisdn');
                $arrData = explode(",", $rawdata);
            }
            $arrData = array_values(array_unique($arrData)); 
            $count = count($arrData);
        } else {
            return redirect('admin/create-group')->with('error', 'No contact list uploaded');
        }



        $contactgroup = new Group();
        $contactgroup->name = $request->input('group_name');
        $contactgroup->contacts_count = $count;
        $contactgroup->parent_id = $parent_id;
        $contactgroup->user_id = $user_id;
        $contactgroup->type = 1;
        $contactgroup->save();
        $insertid = $contactgroup->id;

        $invalidno = 0;

        $batcharray = array();
        $c = 0;
        $r = $count % 200;
        $contact = new Contact();
    //    print_r($arrData);exit;
        foreach ($arrData as $number) {
            $c++;
            $data = array();
            $time = date('Y-m-d h:m:s');
            $pn = $this->formatPhoneNumber($number);
            if (!empty($pn->opCd)) {
                $data = [
                    'group_id' => $insertid,
                    'user_id' => $user_id,
                    'reseller_id' => $parent_id,
                    'number' => $pn->pNo,
                    'country_code' => ($pn->cnCd > 88 ? $pn->cnCd : 880), //null
                    'operator' => $pn->opCd,
                    'status' => ($pn->cnCd > 0 ? $pn->sts : 3),
                    'created_at' => $time,
                    'updated_at' => $time,
                ];

                $batcharray[] = $data;
                if ($c % 100 == 0) {
                //    print_r($batcharray);exit;
                    $c_upload = $contact::insert($batcharray);
                    $batcharray = array();
                    $c = 0;
                }
            } else {
                $invalidno += 1;
            }
        }
//        if ($c == $r) {
            $c_upload = $contact::insert($batcharray);
//        }
        $groupdata = Contact::where('group_id', $insertid)->count();
//        echo $groupdata;exit;
        $update = Group::where('id', $insertid)->update(['contacts_count' => $groupdata]);
       


        Log::addToLog("$request->group_name contacts group added in system");
        Toastr::success("$request->group_name contacts group added successfully :)",'Success');
        return redirect('reseller/create_group')->with('success', 'Group Created Successfully');
    }



    public function updateGroup(Request $request, $id) {
        // dd($request);
        $groups = Group::find($id);
        $validator = Validator::make($request->all(), [
                    'group_name' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $groups->name = $request->group_name;
        $groups->save();
        Toastr::success('Group Name Updated successfully :)','Success');
        return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Group::find($id)->delete();
        Toastr::success('Group Deleted successfully :)','Success');
        return back();
    }


    function formatPhoneNumber($phoneNumber) {
        $phoneNumber = preg_replace('/[^0-9]/', '', $phoneNumber);
        $phnnumObj = (object) [];
        if (strlen($phoneNumber) > 10) {
            $countryCode = substr($phoneNumber, 0, strlen($phoneNumber) - 10);
            $areaCode = substr($phoneNumber, -10, 3);
            $lastDigit = substr($phoneNumber, -7, 7);

            $phnnumObj->cnCd = $countryCode;
            $phnnumObj->arCd = $areaCode;
            $phnnumObj->pNo = $areaCode . $lastDigit;
            $phnnumObj->sts = 1;
        } else if (strlen($phoneNumber) == 10) {
            $areaCode = substr($phoneNumber, 0, 3);
            $lastDigit = substr($phoneNumber, 3, 7);
            $phnnumObj->cnCd = '880'; //''
            $phnnumObj->arCd = $areaCode;
            $phnnumObj->pNo = $areaCode . $lastDigit;
            $phnnumObj->sts = 2;
        } else {
            $phnnumObj->cnCd = '';
            $phnnumObj->arCd = '';
            $phnnumObj->pNo = '';
            $phnnumObj->sts = 3;
        }

        if ($phnnumObj->arCd != '') { // && $phnnumObj->cnCd == '880'
            $op = substr($phnnumObj->arCd, 0, 2);
            $opCode = array(
                array("GP", 13),
                array("BL", 14),
                array("TL", 15),
                array("AL", 16),
                array("GP", 17),
                array("RB", 18),
                array("BL", 19)
            );
            $phnnumObj->opCd = '';
            foreach ($opCode as $opCd) {
                if ($op == $opCd[1]) {
                    $phnnumObj->opCd = $opCd[0];
                }
            }
        } else {
            $phnnumObj->opCd = '';
        }

        return $phnnumObj;
    }
}
