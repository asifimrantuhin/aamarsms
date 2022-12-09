<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Library\SslCommerz\SslCommerzNotification;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Common;
use App\Helpers\Log;
use App\Models\Order;
use App\Models\RatePlan;
use App\Models\Recharge;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Redirect;

class SslCommerzPaymentController extends Controller
{

    public function exampleEasyCheckout()
    {
        return view('exampleEasycheckout');
    }

    public function exampleHostedCheckout()
    {
        return view('exampleHosted');
    }

    public function index(Request $request)
    {
        $post_data = array();
        $post_data['total_amount'] = $request->amount; # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = uniqid(); // tran_id must be unique


        
        # CUSTOMER INFORMATION
        $post_data['user_id'] =  Auth::User()->id;
        $post_data['cus_name'] = Auth::User()->name;
        $post_data['cus_email'] = Auth::User()->email;
        $post_data['cus_phone'] = Auth::User()->mobile;
        $post_data['pack'] = $request->pack;
        $post_data['created_at'] = Carbon::now();
        $post_data['cus_add1'] = 'Customer Address';
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "Bangladesh";
       
       

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Computer";
        $post_data['product_category'] = "Digital Goods";
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = "ref001";
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";

        #Before  going to initiate the payment order status need to insert or update as Pending.
        $update_product = Order::where('transaction_id', $post_data['tran_id'])
            ->updateOrInsert([
                'user_id'=> $post_data['user_id'],
                'name' => $post_data['cus_name'],
                'email' => $post_data['cus_email'],
                'phone' => $post_data['cus_phone'],
                'amount' => $post_data['total_amount'],
                'pack' => $post_data['pack'],
                'status' => 'Pending',
                'address' => $post_data['cus_add1'],
                'transaction_id' => $post_data['tran_id'],
                'currency' => $post_data['currency'],
                'created_at'=>$post_data['created_at']
            ]);

            

        $sslc = new SslCommerzNotification();
 
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'hosted');
        
    
        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }

    }

    public function ResellerPay(Request $request)
    {
        $post_data = array();
        $post_data['total_amount'] = $request->amount; # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = uniqid(); // tran_id must be unique

        $user_id  = Auth::user()->id;
        $cus_name =  Auth::user()->name;
        $cus_email = Auth::user()->email;
        $cus_phone = Auth::user()->mobile;
        # CUSTOMER INFORMATION
        $post_data['user_id'] = $user_id;
        $post_data['cus_name'] = $cus_name;
        $post_data['cus_email'] = $cus_email;
        $post_data['cus_phone'] = $cus_phone;
        $post_data['pack'] = $request->pack;
        $post_data['created_at'] = Carbon::now();
        $post_data['cus_add1'] = 'Customer Address';
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "Bangladesh";
       
       

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Computer";
        $post_data['product_category'] = "Digital Goods";
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = "ref001";
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";

        #Before  going to initiate the payment order status need to insert or update as Pending.
        $update_product = Order::where('transaction_id', $post_data['tran_id'])
            ->updateOrInsert([
                'user_id'=> $post_data['user_id'],
                'name' => $post_data['cus_name'],
                'email' => $post_data['cus_email'],
                'phone' => $post_data['cus_phone'],
                'amount' => $post_data['total_amount'],
                'pack' => 4000,
                'status' => 'Pending',
                'address' => $post_data['cus_add1'],
                'transaction_id' => $post_data['tran_id'],
                'currency' => $post_data['currency'],
                'created_at'=>$post_data['created_at']
            ]);

        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'hosted');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }

    }

    public function payViaAjax(Request $request)
    {

        dd($request);

        $post_data = array();
        $post_data['total_amount'] = '1000'; # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = uniqid(); // tran_id must be unique

        
        # CUSTOMER INFORMATION
        $post_data['cus_name'] = 'Joyanta';
        $post_data['cus_email'] = 'joyanta@mail.com';
        $post_data['cus_add1'] = 'Customer Address';
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = '8801XXXXXXXXX';
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Computer";
        $post_data['product_category'] = "Digital Goods";
        $post_data['product_profile'] = "physical-goods";



        #Before  going to initiate the payment order status need to update as Pending.
       
        $update_product = Order::where('transaction_id', $post_data['tran_id'])
            ->updateOrInsert([
                'name' => $post_data['cus_name'],
                'email' => $post_data['cus_email'],
                'phone' => $post_data['cus_phone'],
                'amount' => $post_data['total_amount'],
                'status' => 'Pending',
                'address' => $post_data['cus_add1'],
                'transaction_id' => $post_data['tran_id'],
                'currency' => $post_data['currency']
            ]);

        $sslc = new SslCommerzNotification();

        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'checkout', 'json');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }

    }
    

    

    public function success(Request $request)
    {
        $tran_id = $request->input('tran_id');
        $amount = $request->input('amount');
        $currency = $request->input('currency');
        $card_type = $request->input('card_type');
        $card_brand = $request->input('card_type');
        $risk_level = $request->input('risk_level');

       

        $sslc = new SslCommerzNotification();

        #Check order status in order tabel against the transaction id or order id.
        $order_detials = Order::where('transaction_id', $tran_id)
            ->select('transaction_id','pack','status', 'currency', 'amount')->first();
   
            
        if ($order_detials->status == 'Pending') {
            $validation = $sslc->orderValidate($request->all(), $tran_id, $amount, $currency);

            if ($validation == TRUE) {
                /*
                That means IPN did not work or IPN URL was not set in your merchant panel. Here you need to update order status
                in order table as Processing or Complete.
                Here you can also sent sms or email for successfull transaction to customer
                */

                $update_product = Order::where('transaction_id', $tran_id)
                    ->update([
                        'card_type'=> $card_type,
                        'card_brand'=> $card_brand,
                        'risk_level'=> $risk_level,
                        'status' => 'Complete',
                    ]);


                    $user = Order::where('transaction_id', $tran_id)->pluck('user_id')->first();
                    $reseller_id = User::whereId($user)->pluck('parent_user')->first();
                    $check = User::where('id', $user)->pluck('role')->first();

                    // Recharge user balance
                    $user_balance = Recharge::where('user_id',$user)->select('balance')->take(1)->orderBy('id', 'desc')->first();
                        $current_balance = isset($user_balance->balance) ? $user_balance->balance : 0;
                        $new_balance = ($current_balance + $amount);
                        
                    $data = [
                        'user_id' => $user,
                        'amount' => $amount,
                        'balance' => $new_balance,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'),
                        'status' => 1,
                        'comments' => 'Payment From SSL Commertz',
                        'trx_id' => $tran_id,
                        'payment_method' => 'SSLCommertz',
                        'type' => 'recharge',
                    ];
                    Recharge::insert($data);

                    
                    
                    // Rate Plan Set using Corresponding Package Selection
                    if ($order_detials->pack == '1') {
                    $datam = [
                        ['user_id' => $user,'reseller_id' => $reseller_id,'operator'=>'GP','nonmasking_price'=>'0.3','masking_price'=>'0.5','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
                        ['user_id' => $user,'reseller_id' => $reseller_id,'operator'=>'BL','nonmasking_price'=>'0.3','masking_price'=>'0.5','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
                        ['user_id' => $user,'reseller_id' => $reseller_id,'operator'=>'AL','nonmasking_price'=>'0.3','masking_price'=>'0.5','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
                        ['user_id' => $user,'reseller_id' => $reseller_id,'operator'=>'TL','nonmasking_price'=>'0.3','masking_price'=>'0.5','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
                        ['user_id' => $user,'reseller_id' => $reseller_id,'operator'=>'RB','nonmasking_price'=>'0.3','masking_price'=>'0.5','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')]
                    ];
                     }
                    else if($order_detials->pack == '2')
                    {
                        $datam = [
                            ['user_id' => $user,'reseller_id' => $reseller_id,'operator'=>'GP','nonmasking_price'=>'0.29','masking_price'=>'0.5','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
                            ['user_id' => $user,'reseller_id' => $reseller_id,'operator'=>'BL','nonmasking_price'=>'0.29','masking_price'=>'0.5','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
                            ['user_id' => $user,'reseller_id' => $reseller_id,'operator'=>'AL','nonmasking_price'=>'0.29','masking_price'=>'0.5','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
                            ['user_id' => $user,'reseller_id' => $reseller_id,'operator'=>'TL','nonmasking_price'=>'0.29','masking_price'=>'0.5','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
                            ['user_id' => $user,'reseller_id' => $reseller_id,'operator'=>'RB','nonmasking_price'=>'0.29','masking_price'=>'0.5','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')]
                        ];
                    }
                    else if ($order_detials->pack == '3') {
                        $datam = [
                            ['user_id' => $user,'reseller_id' => $reseller_id,'operator'=>'GP','nonmasking_price'=>'0.28','masking_price'=>'0.5','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
                            ['user_id' => $user,'reseller_id' => $reseller_id,'operator'=>'BL','nonmasking_price'=>'0.28','masking_price'=>'0.5','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
                            ['user_id' => $user,'reseller_id' => $reseller_id,'operator'=>'AL','nonmasking_price'=>'0.28','masking_price'=>'0.5','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
                            ['user_id' => $user,'reseller_id' => $reseller_id,'operator'=>'TL','nonmasking_price'=>'0.28','masking_price'=>'0.5','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
                            ['user_id' => $user,'reseller_id' => $reseller_id,'operator'=>'RB','nonmasking_price'=>'0.28','masking_price'=>'0.5','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')]
                        ];
                    }
                    else{
                        $datam = [
                        ['user_id' => $user,'updated_at' => date('Y-m-d H:i:s')],
                        ['user_id' => $user,'updated_at' => date('Y-m-d H:i:s')],
                        ['user_id' => $user,'updated_at' => date('Y-m-d H:i:s')],
                        ['user_id' => $user,'updated_at' => date('Y-m-d H:i:s')],
                        ['user_id' => $user,'updated_at' => date('Y-m-d H:i:s')]
                    ];
                    }

                    // Existing Rateplan checking if exist update rateplan and if not insert rateplan
                    if (RatePlan::where('user_id', $user )->exists()) {
                        if ($order_detials->pack == '1') {
                            $data = [
                                'nonmasking_price' => '0.3',
                                'nonmasking_price' => '0.3',
                                'nonmasking_price' => '0.3',
                                'nonmasking_price' => '0.3',
                                'nonmasking_price' => '0.3',
    
                            ];
                    }else if($order_detials->pack == '2'){
                        $data = [
                            'nonmasking_price' => '0.29',
                            'nonmasking_price' => '0.29',
                            'nonmasking_price' => '0.29',
                            'nonmasking_price' => '0.29',
                            'nonmasking_price' => '0.29',

                        ];
                    }
                    else if($order_detials->pack == '3'){
                        $data = [
                            'nonmasking_price' => '0.28',
                            'nonmasking_price' => '0.28',
                            'nonmasking_price' => '0.28',
                            'nonmasking_price' => '0.28',
                            'nonmasking_price' => '0.28',

                        ];
                    }
                    else{
                        $data = [
                            'updated_at' => date('Y-m-d H:i:s'),
                            'updated_at' => date('Y-m-d H:i:s'),
                            'updated_at' => date('Y-m-d H:i:s'),
                            'updated_at' => date('Y-m-d H:i:s'),
                            'updated_at' => date('Y-m-d H:i:s'),
                        ];
                    }
                       DB::table('rate_plan')->update($data);
                    }
                    else{
                        RatePlan::insert($datam);
                    }
                    Log::addToLog("$amount $currency Recharged through SSL Commertz");

                    
                    if($check == 2){
                       
                        Toastr::success("$amount $currency Recharged successfully by SSL Commertz",'Success');
                        return redirect('/reseller/dashboard');
                        
                    }else{
                        
                        Toastr::success("$amount $currency Recharged successfully by SSL Commertz",'Success');
                        return redirect('/user/dashboard');
                        
                        
                    }
                    
            } else {
                /*
                That means IPN did not work or IPN URL was not set in your merchant panel and Transation validation failed.
                Here you need to update order status as Failed in order table.
                */
                $update_product = Order::where('transaction_id', $tran_id)
                    ->update(['status' => 'Failed']);
                echo "validation Fail";
            }
        } else if ($order_detials->status == 'Processing' || $order_detials->status == 'Complete') {
            /*
             That means through IPN Order status already updated. Now you can just show the customer that transaction is completed. No need to udate database.
             */
            $user = Order::where('transaction_id', $tran_id)->pluck('user_id')->first();
            $check = User::where('id', $user)->pluck('role')->first();
            if($check ==2){
                Toastr::success('Transaction is successfully Completed','Success');
                return redirect('/reseller/dashboard');
            }
            else{
                Toastr::success('Transaction is successfully Completed','Success');
                return redirect('/user/dashboard');
            }

        } else {
            $user = Order::where('transaction_id', $tran_id)->pluck('user_id')->first();
            $check = User::where('id', $user)->pluck('role')->first();
            if($check ==2){
                return redirect('/reseller/dashboard')->with('success', 'Invalid Transaction');
            }
            else{
                return redirect('/user/dashboard')->with('success', 'Invalid Transaction');
            }
            #That means something wrong happened. You can redirect customer to your product page.
            
        }


    }

    public function fail(Request $request)
    {
        $tran_id = $request->input('tran_id');

        $order_detials = Order::where('transaction_id', $tran_id)
            ->select('transaction_id', 'status', 'currency', 'amount')->first();

        if ($order_detials->status == 'Pending') {
            $update_product = Order::where('transaction_id', $tran_id)
                ->update(['status' => 'Failed']);
                return redirect('/')->with('error', 'Transaction Failed');
        } else if ($order_detials->status == 'Processing' || $order_detials->status == 'Complete') {
            return redirect('/')->with('success','Transaction is already Successful');
        } else {
            return redirect('/')->with('error', 'Transaction is Invalid');
        }

    }

    public function cancel(Request $request)
    {
        $tran_id = $request->input('tran_id');

        $order_detials = Order::where('transaction_id', $tran_id)
            ->select('transaction_id', 'status', 'currency', 'amount')->first();

        if ($order_detials->status == 'Pending') {
            $update_product = Order::where('transaction_id', $tran_id)
                ->update(['status' => 'Canceled']);
        $id = Order::where('transaction_id', $tran_id)->pluck('user_id')->first();
        $check = User::where('id', $id)->pluck('role')->first();

        if($check == 2){
            Toastr::error('Transaction is Canceled','Failed');
            return redirect('/reseller/ssl_payment');
        }
        else{
            Toastr::error('Transaction is Canceled','Failed');
            return redirect('/user/ssl_payment');
        }
               
        } else if ($order_detials->status == 'Processing' || $order_detials->status == 'Complete') {
            $id = Order::where('transaction_id', $tran_id)->pluck('user_id')->first();
        $check = User::where('id', $id)->pluck('role')->first();
            if($check == 2){
            Toastr::warning('Transaction was already Successful','Warning');
            return redirect('/reseller/ssl_payment');
            }
            else{
                Toastr::warning('Transaction was already Successful','Warning');
                return redirect('/user/ssl_payment');
            }
        } else {
            $id = Order::where('transaction_id', $tran_id)->pluck('user_id')->first();
        $check = User::where('id', $id)->pluck('role')->first();
            if($check == 2){
            return redirect('/reseller/ssl_payment')->with('error', 'Transaction is Invalid');
            }
            else{
                return redirect('/user/ssl_payment')->with('error', 'Transaction is Invalid');
            }
        }


    }

    public function ipn(Request $request)
    {
        #Received all the payement information from the gateway
        if ($request->input('tran_id')) #Check transation id is posted or not.
        {

            $tran_id = $request->input('tran_id');

            #Check order status in order tabel against the transaction id or order id.
            $order_details = Order::where('transaction_id', $tran_id)
                ->select('transaction_id', 'status', 'currency', 'amount')->first();

            if ($order_details->status == 'Pending') {
                $sslc = new SslCommerzNotification();
                $validation = $sslc->orderValidate($request->all(), $tran_id, $order_details->amount, $order_details->currency);
                if ($validation == TRUE) {
                    /*
                    That means IPN worked. Here you need to update order status
                    in order table as Processing or Complete.
                    Here you can also sent sms or email for successful transaction to customer
                    */
                    $update_product = Order::where('transaction_id', $tran_id)
                        ->update(['status' => 'Processing']);

                        return redirect('/')->with('success','Transaction is successfully Completed');
                } else {
                    /*
                    That means IPN worked, but Transation validation failed.
                    Here you need to update order status as Failed in order table.
                    */
                    $update_product = Order::where('transaction_id', $tran_id)
                        ->update(['status' => 'Failed']);

                        return redirect('/')->with('error', 'validation Fail');
                }

            } else if ($order_details->status == 'Processing' || $order_details->status == 'Complete') {

                #That means Order status already updated. No need to udate database.

                return redirect('/')->with('success','Transaction is already successfully Completed');
            } else {
                #That means something wrong happened. You can redirect customer to your product page.

                return redirect('/')->with('error','Invalid Transaction');
            }
        } else {
            return redirect('/')->with('error','Invalid Data');
        }
    }

}
