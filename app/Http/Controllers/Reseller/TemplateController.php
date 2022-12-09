<?php

namespace App\Http\Controllers\Reseller;


use App\Http\Controllers\Controller;
use App\Helpers\Log;
use App\Models\Template;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = Auth::user();
        $auth_user = $users->id;
        $templates = Template::where('user_id',$auth_user)->paginate(10);

        return view('reseller.management.template.template',compact('templates','users'));
    }

    public function viewtemplate($id) {
        $template = Template::where('id', $id)->get();
        return json_decode($template);
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
        $auth_user = Auth::user()->id;
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'text' => 'required'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        $form_data = array(
            'name'        =>  $request->name,
            'text'        =>  $request->text,
            'user_id'        =>  $auth_user,
        );
        Template::create($form_data);
        Log::addToLog("$request->mask_name added in system");
        Toastr::success("$request->mask_name added successfully :)",'Success');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function show(Template $template)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function edit(Template $template,$id)
    {
        $users = Auth::user();
        $template = Template::whereId($id)->get();
        return view('reseller.management.template.edit_template',compact('template','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $templates = Template::find($id);
        
        $templates->name = $request->name;
        $templates->text = $request->text;
        $templates->save();
        Toastr::success("Template Updated successfully :)",'Success');
        return redirect('reseller/template');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function destroy(Template $template,$id)
    {
        Template::find($id)->delete();
        Toastr::success("Template Deleted successfully :)",'Success');
        return back();
    }
}
