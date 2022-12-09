<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    public function ForgetSMS(Request $request)
    {
    return view('auth.passwords.sms');
    }

    public function SendSMS(Request $request)
    {

        $gate = User::where('mobile', 'LIKE', "%{$request->mobile}%")->where('status',1)->first();

        if(empty($gate))
        {
            return redirect('/sms/reset')->with('error','No User Found');
        }
        else{
            $mobile = $gate->mobile;
            $key = random_int(0, 999999);
            $otp = str_pad($key, 6, 0, STR_PAD_LEFT);

            $data = array(
                'otp' => $otp
            );

            User::where(['mobile' => $mobile])->update($data);
            $last_insert_id = $gate->id;
            
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

        }


        return view('auth.sms.otp',compact('last_insert_id'));

    }

    public function SetPassword(Request $request)
    {
        $user = $request->last_insert_id;
        $verifysms = User::where('id',$user)->select('otp')->value('otp');
        $insertedotp = $request->otp;

        if($verifysms == $insertedotp)
        {
            return view ('auth.passwords.verifypassword',compact('user'));
        }
        else{
            return redirect('sms/reset')->witherror('Entered invalid OTP !!!');
        }
    }

    public function UpdatePassword(Request $request)
    {
        $new_pass = $request->password;
        $id = $request->id;
        $users = User::find($id);

        if ($new_pass != NULL || $new_pass != "") {
            $users->password = Hash::make($new_pass);
        }
        $users->save();
        return redirect('/login')->withsuccess('Password Resetted. Please login now.');

    }
}
