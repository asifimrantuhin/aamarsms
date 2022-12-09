<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function Onlinelanding()
    {
        return view('auth.online');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|size:11|unique:users',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'mobile' => $data['mobile'],
            'otp' => random_int(100000, 999999),
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'status' => 0,
            'api_enabled' => 0,
            'approval' => 0,
        ]);
    }


    public function otp(Request $request)
    {
        $user = $request->last_insert_id;
        $verifysms = User::where('id',$user)->select('otp')->value('otp');
        $insertedotp = $request->otp;

        if($verifysms == $insertedotp)
        {
            User::where('id', $user)->update(['parent_user'=>29,'status' => 1]);
            return redirect('/login')->withsuccess('Account is created. Please login now.');
        }
        else{
            return redirect('/register')->witherror('Entered OTP Invalid !!!');
        }
            
    }
    

    // @override 
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));
        $mobile = $user->mobile;
        $otp = $user->otp;
        $last_insert_id =$user->id;

        $url = "https://panel2.AamarSMS.com/otp?user=sales@AamarSMS.com&password=9KjN9YC(YY48&from=NAJJTECH&to=$mobile&text=$otp হচ্ছে ভেরিফিকেশন কোড, ধন্যবাদান্তে www.AamarSMS.com";

        $ch = curl_init();

        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTPHEADER => array("Content-Type: text/html; charset=utf-8"),
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 6.1; rv:19.0) Gecko/20100101 Firefox/19.0',
        ));
        //curl_setopt($ch, CURLOPT_HTTPHEADER,array ("Content-Type: text/xml; charset=utf-8"));
        $output = curl_exec($ch);
        // close curl resource to free up system resources
        curl_close($ch);

        if (!$output) {
            $output = file_get_contents($url);
        }
        //return Redirect::to("http://127.0.0.1:8000/api?user=user1@AamarSMS.com&password=TestTest&from=AamarSMS&to=$mobile&text=Your OTP Code is $otp");

        return view ('/auth/sms/sms',compact('last_insert_id'));

        
    }
}
