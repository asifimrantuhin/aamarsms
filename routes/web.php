<?php

use App\Http\Controllers\Admin\CampaignController as AdminCampaignController;

use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\MaskController;
use App\Http\Controllers\Admin\RatePlanController;
use App\Http\Controllers\Admin\RechargeController;
use App\Http\Controllers\Admin\TemplateController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\UserManagementController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Manager\CustomerController as ManagerCustomerController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\Reseller\CampaignController as ResellerCampaignController;
use App\Http\Controllers\Reseller\GroupController as ResellerGroupController;
use App\Http\Controllers\Reseller\RatePlanController as ResellerRatePlanController;
use App\Http\Controllers\Reseller\RechargeController as ResellerRechargeController;
use App\Http\Controllers\Reseller\ReportController;
use App\Http\Controllers\Reseller\TemplateController as ResellerTemplateController;
use App\Http\Controllers\Reseller\UserManagementController as ResellerUserManagementController;
use App\Http\Controllers\ResellerController;
use App\Http\Controllers\Sales\AttendenceController;
use App\Http\Controllers\Sales\CustomerController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\User\CampaignController as UserCampaignController;
use App\Http\Controllers\User\DynamicSmsController;
use App\Http\Controllers\User\GroupController as UserGroupController;;

use App\Http\Controllers\User\RatePlanController as UserRatePlanController;
use App\Http\Controllers\User\TemplateController as UserTemplateController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DLRController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {return redirect('/login');});

// Online Landing
Route::get('/online',[RegisterController::class,'Onlinelanding']);



Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('sms/reset', [ForgotPasswordController::class,'ForgetSMS']);
Route::post('sms/sendsms', [ForgotPasswordController::class,'SendSMS'])->name('password.sms');
// OTP Verification
Route::post('/verifySMS', [ForgotPasswordController::class,'SetPassword']);
Route::post('/password/update', [ForgotPasswordController::class,'UpdatePassword']);
Route::post('/verifyotp', '\App\Http\Controllers\Auth\RegisterController@otp');

Route::get('sms-sender', [HomeController::class, 'smsSender']); // Single SMS
Route::get('sms-sending', [HomeController::class, 'smsSending']); // Bulk SMS
Route::get('price-sync', [HomeController::class, 'priceSync']); // Price
Route::get('callback_response_push', [HomeController::class, 'callback_response_push']); // CallBack

Route::get('op_balance',[HomeController::class,'OperatorBalance']); // Check Operator Balance

// SMS Send by API
Route::get('api', [ApiController::class, 'api']);
Route::get('otp', [ApiController::class, 'otp']);
Route::get('balance', [ApiController::class, 'balance']);
Route::get('smsstatus', [ApiController::class, 'smsstatus']);
Route::get('otp-with-callback', [ApiController::class, 'otpWithCallback']);
Route::get('api-sms-send/{id}', [ApiController::class, 'apiSMSsend']);
// SMS Send by API

// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2',  [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/reseller_pay', [SslCommerzPaymentController::class, 'ResellerPay']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);
Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END


// API Download
Route::get('/downloadapi', [HomeController::class, 'download']);


// Admin Route Group
Route::group(['prefix' => 'admin', 'middleware'=>['admin','auth']], function () {

    // Access Log
    Route::get('AccessLog', [AdminController::class, 'AccessLog']);
    Route::post('AccessLog', [AdminController::class, 'AccessLog']);

    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/profile', [AdminController::class, 'profile']);
    Route::post('/updateprofile', [AdminController::class, 'UpdateProfile']);

    // Notification
    Route::get('notification', [AdminController::class, 'ChangeNotification']);
    Route::get('notify', [AdminController::class, 'Notification']);
    Route::post('notify/store', [AdminController::class, 'NotificationStore']);
    Route::get('/viewnotify/{id}', [AdminController::class, 'viewnotify']);
    Route::get('/delete_notify/{id}', [AdminController::class, 'Destroynotify']);
    Route::get('/notify/edit/{id}', [AdminController::class, 'NotificationEdit']);
    Route::post('/notify/update/{id}', [AdminController::class, 'NotificationUpdate']);
    // Notification


    // Campaigns
    Route::get('campaign', [AdminCampaignController::class, 'index']);
    Route::post('create_campaign', [AdminCampaignController::class, 'createCampaign']);
    Route::post('preview_campaign', [AdminCampaignController::class, 'previewCampaign']);
    Route::get('campaign_list', [AdminCampaignController::class, 'campaigndetails']);
    Route::post('campaign_list', [AdminCampaignController::class, 'campaigndetails']);
    Route::get('fail_campaign_list', [AdminCampaignController::class, 'FailedCampaign']);
    Route::post('fail_campaign_list', [AdminCampaignController::class, 'FailedCampaign']);
    Route::get('sms_ratio', [AdminCampaignController::class, 'SMSRatio']);
    // Route::get('cost_report', [AdminCampaignControllerController::class, 'CostReport']);
    // Route::post('cost_report', [AdminCampaignControllerController::class, 'CostReport']);
    
    Route::get('edit_campaign/{id}', [UserCampaignController::class, 'editCampaign']);
    Route::post('update_campaign/{id}', [UserCampaignController::class, 'updateCampaign']);
    Route::get('delete_campaign/{id}', [UserCampaignController::class, 'deleteCampaign']);

    Route::get('download/{type}/{id}', [AdminCampaignController::class, 'downloadFile']);
    Route::get('successdownload/{type}/{id}', [AdminCampaignController::class, 'SuccessFile']);
    Route::get('resend_campaign/{id}', [AdminCampaignController::class, 'Retry']);
    // Campaigns



    // Template
    Route::get('template', [TemplateController::class, 'index']);
    Route::post('template/store', [TemplateController::class, 'store']);
    Route::get('viewtemplate/{id}', [TemplateController::class, 'viewtemplate']);
    Route::get('edit_template/{id}', [TemplateController::class, 'edit']);
    Route::post('update_template/{id}', [TemplateController::class, 'update']);
    Route::get('delete_template/{id}', [TemplateController::class, 'destroy']);

    // RatePlan
    Route::get('rateplan', [RatePlanController::class, 'index']);
    Route::post('rateplan/store', [RatePlanController::class, 'store']);

    // Field Data
    Route::get('managecus', [UserManagementController::class, 'FieldCustomerData']);
    Route::post('managecus', [UserManagementController::class, 'FieldCustomerData']);
    Route::get('conveyance', [UserManagementController::class, 'FieldCustomerConveyance']);
    // Route::post('conveyance', [UserManagementController::class, 'FieldCustomerConveyance']);
    Route::get('editCustomer/{id}', [UserManagementController::class, 'editCustomer']);
    Route::post('updateCustomer/{id}', [UserManagementController::class, 'updateCustomer']);
    Route::get('editConeyance/{id}', [UserManagementController::class, 'editConeyance']);
    Route::post('updateConeyance/{id}', [UserManagementController::class, 'updateConveyance']);
    Route::get('download_field/xlsx', [UserManagementController::class, 'DownloadField']);
    Route::get('attendence_list', [UserManagementController::class, 'AttendenceList']);
    Route::post('attendence_list', [UserManagementController::class, 'AttendenceList']);
    Route::get('download_attendence/xlsx', [UserManagementController::class, 'DownloadAttendence']);
    // Field Data

    //Comission Controller
    Route::get('/comissionlist', [UserManagementController::class, 'ComissionList']);
    Route::post('/comissionlist', [UserManagementController::class, 'ComissionList']);
    //Comission Controller

    // Executive Management
    Route::get('/saleslist', [UserManagementController::class, 'salesList']);
    Route::post('/saleslist', [UserManagementController::class, 'salesList']);
    Route::post('/executive_store', [UserManagementController::class, 'ExecutiveStore']);
    Route::get('/ces/{id}/{status}', [UserManagementController::class, 'ChangeExecutiveStatus']);
    Route::get('/editsales/{id}', [UserManagementController::class, 'editSales']);
    Route::post('/update_sales/{id}', [UserManagementController::class, 'UpdateSales']);
    // Executive Management


    // User management
    Route::get('/userlist', [UserManagementController::class, 'index']);
    Route::post('/userlist', [UserManagementController::class, 'index']);
    Route::post('/new_user', [UserManagementController::class, 'store']);
    Route::get('/viewuser/{id}', [UserManagementController::class, 'viewuser']);
    Route::get('edit_user/{id}', [UserManagementController::class, 'edit']);
    Route::get('user_doc/{id}', [UserManagementController::class, 'Document']);
    Route::post('update_user/{id}', [UserManagementController::class, 'update']);
    Route::get('delete_user/{id}', [UserManagementController::class, 'destroy']);
    Route::get('/status/{id}/{status}', [UserManagementController::class, 'Status']);
    Route::get('/reset/{id}/{pass}', [UserManagementController::class, 'reset']);
    Route::get('/user_balance', [UserManagementController::class, 'UserBalance']);
    Route::get('download_user/xlsx', [UserManagementController::class, 'DownloadUser']);
    Route::get('approval/{id}', [UserManagementController::class, 'ApproveUser']);
    Route::get('rework/{id}', [UserManagementController::class, 'ReworkDocument']);
    Route::get('trade_rework/{id}', [UserManagementController::class, 'ReworkTrade']);
    // User Management

    // Mask Management
    Route::get('mask', [MaskController::class,'index']);
    Route::post('mask/store', [MaskController::class, 'store']);
    Route::get('viewmask/{id}', [MaskController::class, 'view']);
    Route::get('delete_mask/{id}', [MaskController::class, 'destroy']);
    Route::get('/mask_status/{id}/{status}', [MaskController::class, 'Status']);
    // Mask Management

    // Contact Group Management
    Route::get('contact_group', [GroupController::class, 'index']);
    Route::post('contact_group', [GroupController::class, 'index']);
    Route::get('/create_group', [GroupController::class, 'createGroup']);
    Route::get('/viewgroup/{id}', [GroupController::class, 'viewGroup']);
    Route::post('/editgroup/{id}', [GroupController::class, 'updateGroup']);
    Route::get('/deletegroup/{id}', [GroupController::class, 'destroy']);
    Route::post('/savegroup', [GroupController::class, 'saveGroup']);
    Route::get('download_contacts/{type}/{id}', [GroupController::class, 'downloadGroup']);
    Route::get('/samplefile', [HomeController::class, 'SampleFile']);
    Route::post('/addcontactingroup/{id}', [GroupController::class, 'addContactOnGroup']);

    // Recharge
    Route::post('/recharge/create', [RechargeController::class, 'store']);
    Route::get('/recharge_history', [RechargeController::class, 'History']);
    Route::post('/recharge_history', [RechargeController::class, 'History']);
    Route::get('/transaction_history', [RechargeController::class, 'TransactionHistory']);
    Route::get('/trx_status/{id}/{status}', [RechargeController::class,'AdminTransaction']);

    Route::get('/user-recharge-history', 'Reseller\RechargeController@userRechargeHistory');
    Route::get('/user-refund-history', 'Reseller\RechargeController@userRefundHistory');

    Route::get('/userrechargehistory/{id}', 'Reseller\RechargeController@getUserRechargeHistory');

    // Api Doc
    Route::get('api', [AdminController::class, 'Api']);
    Route::post('uploadapi', [AdminController::class, 'upload']);

    // Vendor Selection
    Route::get('/settings', [AdminController::class, 'settings']);
    Route::post('/saveconfiguration', [AdminController::class, 'Configuration']);


    // Report management
    Route::get('/vendor_sms', [AdminController::class, 'VendorTransactionsHistory']);
    Route::get('/user_sms', [AdminController::class, 'UserSMSReport']);
    Route::get('/sms_transactions', [AdminController::class, 'SMSTransactions']);
    // Report management

    // Revenue Report
    Route::get('/revenue_report', [AdminController::class, 'RevenueReport']);
    // Revenue Report

    // Operator Balance
    Route::get('/operator_balance',[AdminController::class,'DailyOperatorBalance']);
    // Operator Balance

    // Request 
    Route::get('/customer_credit', [RechargeController::class, 'requestlist']);
    Route::get('/viewrecharge/{id}', [RechargeController::class, 'viewRecharge']);
    Route::post('/approve_recharge', [RechargeController::class, 'RechargeApprove']);
    Route::get('/edit_payment/{id}', [RechargeController::class, 'EditPayment']);
    Route::post('/update_payment/{id}', [RechargeController::class, 'UpdatePayment']);
    // Recharge Request

});

// Reseller Route Group
Route::group(['prefix' => 'reseller','middleware'=>['reseller','auth']], function () {

    Route::get('dashboard', [ResellerController::class, 'index'])->name('reseller.dashboard');

    // Profile Route
    Route::get('/profile', [ResellerController::class, 'profile']);
    Route::post('/updateprofile', [ResellerController::class, 'UpdateProfile']);

    // Profile Route
    Route::get('/company', [ResellerController::class, 'company']);
    Route::post('/updatecompany', [ResellerController::class, 'UpdateCompany']);

    // SSl Payment
    Route::get('/ssl_payment', [ResellerRechargeController::class, 'SslRecharge']);

    // SSl Payment


    // Campaigns
    Route::get('campaign', [ResellerCampaignController::class, 'index']);
    Route::post('create_campaign', [ResellerCampaignController::class, 'createCampaign']);
    Route::post('preview_campaign', [ResellerCampaignController::class, 'previewCampaign']);
    Route::get('campaign_list', [ResellerCampaignController::class, 'CampaignList']);
    Route::post('campaign_list', [ResellerCampaignController::class, 'CampaignList']);
    Route::get('cost_report', [ResellerCampaignController::class, 'CostReport']);
    Route::post('cost_report', [ResellerCampaignController::class, 'CostReport']);

    Route::get('edit_campaign/{id}', [ResellerCampaignController::class, 'editCampaign']);
    Route::post('update_campaign/{id}', [ResellerCampaignController::class, 'updateCampaign']);
    Route::get('delete_campaign/{id}', [ResellerCampaignController::class, 'deleteCampaign']);
    // Campaigns


    // Template
    Route::get('template', [ResellerTemplateController::class, 'index']);
    Route::post('template/store', [ResellerTemplateController::class, 'store']);
    Route::get('viewtemplate/{id}', [ResellerTemplateController::class, 'viewtemplate']);
    Route::get('edit_template/{id}', [ResellerTemplateController::class, 'edit']);
    Route::post('update_template/{id}', [ResellerTemplateController::class, 'update']);
    Route::get('delete_template/{id}', [ResellerTemplateController::class, 'destroy']);

    // Recharge
    Route::post('/recharge/create', [ResellerRechargeController::class, 'store']);
    Route::get('/user_recharge_history', [ResellerRechargeController::class, 'History']);
    Route::post('/user_recharge_history', [ResellerRechargeController::class, 'History']);
    Route::get('/reseller_recharge_history', [ResellerRechargeController::class, 'MyRecharge']);
    Route::post('/reseller_recharge_history', [ResellerRechargeController::class, 'MyRecharge']);
    Route::get('/balance_history', [ResellerRechargeController::class, 'balanceHistory']);
    // Recharge

    // Report
    Route::get('/user-sms-report', 'Reseller\ReportController@userSMSReport');
    Route::get('/mydaily-sms-report', [ReportController::class, 'MydailySMSReport']);
    Route::get('/user_daily_sms_report', [ReportController::class, 'UserdailySMSReport']);
    // Report


    // Contact Group Management
    Route::get('contact_group', [ResellerGroupController::class, 'index']);
    Route::get('/create_group', [ResellerGroupController::class, 'createGroup']);
    Route::get('/viewgroup/{id}', [ResellerGroupController::class, 'viewGroup']);
    Route::post('/editgroup/{id}', [ResellerGroupController::class, 'updateGroup']);
    Route::get('/deletegroup/{id}', [ResellerGroupController::class, 'destroy']);
    Route::post('/savegroup', [ResellerGroupController::class, 'saveGroup']);
    Route::get('download_contacts/{type}/{id}', [ResellerGroupController::class, 'downloadGroup']);
    Route::get('/samplefile', [HomeController::class, 'SampleFile']);
    Route::post('/addcontactingroup/{id}', [ResellerGroupController::class, 'addContactOnGroup']);
    // Contact Group Management

    // User management
    Route::get('/userlist', [ResellerUserManagementController::class, 'index']);
    Route::post('/userlist', [ResellerUserManagementController::class, 'index']);
    Route::post('/new_user', [ResellerUserManagementController::class, 'store']);
    Route::get('/viewuser/{id}', [ResellerUserManagementController::class, 'viewuser']);
    Route::get('edit_user/{id}', [ResellerUserManagementController::class, 'edit']);
    Route::post('update_user/{id}', [ResellerUserManagementController::class, 'update']);
    Route::get('delete_user/{id}', [ResellerUserManagementController::class, 'destroy']);
    Route::get('/status/{id}/{status}', [ResellerUserManagementController::class, 'Status']);

    // RatePlan
    Route::get('rateplan', [ResellerRatePlanController::class, 'index']);
    Route::get('myplan', [ResellerRatePlanController::class, 'myPlan']);
    Route::post('rateplan/store', [ResellerRatePlanController::class, 'store']);
    //RatePlan

    // Report Management
    Route::get('My_smsReport', [ResellerController::class, 'MydailySMSReport']);
    Route::post('My_smsReport', [ResellerController::class, 'MydailySMSReport']);
    Route::get('userReport', [ResellerController::class, 'UserSMSReport']);
    Route::post('userReport', [ResellerController::class, 'UserSMSReport']);
    Route::get('user_smsReport', [ResellerController::class, 'UserSMSReport']);
    // Report Management

    // Api Doc
    Route::get('api', [ResellerController::class, 'Api']);
});

// User Route Group
Route::group(['prefix'=>'user','middleware'=>['user','auth']], function () {

    Route::get('dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('document', [UserController::class, 'Document']);

    // Campaigns
    Route::get('campaign', [UserCampaignController::class, 'index']);
    Route::post('create_campaign', [UserCampaignController::class, 'createCampaign']);
    Route::post('preview_campaign', [UserCampaignController::class, 'previewCampaign']);
    Route::get('campaign_list', [UserCampaignController::class, 'campaigndetails']);
    Route::post('campaign_list', [UserCampaignController::class, 'campaigndetails']);
    Route::get('cost_report', [UserCampaignController::class, 'CostReport']);
    Route::post('cost_report', [UserCampaignController::class, 'CostReport']);

    Route::get('edit_campaign/{id}', [UserCampaignController::class, 'editCampaign']);
    Route::post('update_campaign/{id}', [UserCampaignController::class, 'updateCampaign']);
    Route::get('delete_campaign/{id}', [UserCampaignController::class, 'deleteCampaign']);
    Route::get('resend_campaign/{id}', [UserCampaignController::class, 'Retry']);
    // Campaigns


    // Dynamic SMS
    Route::get('dynamic_sms', [DynamicSmsController::class, 'DynamicCampaign']);
    Route::get('dynamic_list', [DynamicSmsController::class, 'DynamicCampaignList']);
    Route::post('dynamic_campaign', [DynamicSmsController::class, 'CampaignStore']);
    Route::post('store_dynamic_sms', [DynamicSmsController::class, 'DynamicStore']);
    Route::get('/dynamicfile', [HomeController::class, 'DynamicFile']);
    Route::get('/dynamicsms', [HomeController::class, 'DynamicSMSTemplate']);
    // Dynamic SMS


    // Contact Group Management
    Route::get('contact_group', [UserGroupController::class, 'index']);
    Route::get('/create_group', [UserGroupController::class, 'createGroup']);
    Route::get('/viewgroup/{id}', [UserGroupController::class, 'viewGroup']);
    Route::post('/editgroup/{id}', [UserGroupController::class, 'updateGroup']);
    Route::get('/deletegroup/{id}', [UserGroupController::class, 'destroy']);
    Route::post('/savegroup', [UserGroupController::class, 'saveGroup']);
    Route::get('download_contacts/{type}/{id}', [UserGroupController::class, 'downloadGroup']);
    Route::get('/samplefile', [HomeController::class, 'SampleFile']);
    Route::post('/addcontactingroup/{id}', [UserGroupController::class, 'addContactOnGroup']);
    // Contact Group Management


    // Profile Route
    Route::get('/profile', [UserController::class, 'profile']);
    Route::post('/updateprofile', [UserController::class, 'UpdateProfile']);

    // Api Doc
    Route::get('api', [UserController::class, 'Api']);

    // Rate Plan
    Route::get('myplan', [UserRatePlanController::class, 'myPlan']);


    // Template
    Route::get('/template', [UserTemplateController::class, 'index']);
    Route::post('/template/store', [UserTemplateController::class, 'store']);
    Route::get('/viewtemplate/{id}', [UserTemplateController::class, 'viewtemplate']);
    Route::get('/edit_template/{id}', [UserTemplateController::class, 'edit']);
    Route::post('/update_template/{id}', [UserTemplateController::class, 'update']);
    Route::get('/delete_template/{id}', [UserTemplateController::class, 'destroy']);


    // Mixed
    Route::get('transaction_history', [UserController::class, 'TransactionHistory']);
    Route::get('recharge_history', [UserController::class, 'RechargeHistory']);
    Route::get('account_summary', [UserController::class, 'Summery']);
    Route::get('account_summary_graph', [UserController::class, 'Graph']);
    Route::get('ssl_payment', [UserController::class, 'payment']);
    Route::get('support', [UserController::class, 'Support']);
    Route::post('nid_submission', [UserController::class, 'NidPost']);

});



// Sales Route Group
Route::group(['prefix' => 'sales', 'middleware'=>['sales','auth']], function () {

    Route::get('dashboard', [SalesController::class, 'index'])->name('sales.dashboard');

    // Profile Route
    Route::get('/profile', [SalesController::class, 'profile']);
    Route::post('/updateprofile', [SalesController::class, 'UpdateProfile']);

    // My Commission
    Route::get('mycommission', [SalesController::class, 'MyCommission']);
    // My Commission

    // Attendence
    Route::get('attendence', [AttendenceController::class, 'Attendence']);
    Route::get('/attendence_list', [AttendenceController::class, 'AttendenceList']);
    Route::post('/attendence_list', [AttendenceController::class, 'AttendenceList']);
    Route::get('leave_list', [AttendenceController::class, 'LeaveList']);
    Route::post('leave_list', [AttendenceController::class, 'LeaveList']);
    Route::get('application', [AttendenceController::class, 'Application']);
    Route::post('store_application', [AttendenceController::class, 'LeaveStore']);
    // Attendence


    //Field Customer Data Management 
    Route::get('customer', [CustomerController::class, 'index']);
    Route::post('customer', [CustomerController::class, 'index']);
    Route::get('customer/create', [CustomerController::class, 'create']);
    Route::post('store', [CustomerController::class, 'store']);
    Route::get('/editcustomer/{id}', [CustomerController::class, 'edit']);
    Route::post('/updatecustomer/{id}', [CustomerController::class, 'update']);
    Route::get('/conveyance', [CustomerController::class, 'Conveyance']);
    Route::post('/conveyance', [CustomerController::class, 'Conveyance']);
    //Field Customer Data Management 

    // System User
    Route::get('userlist', [CustomerController::class, 'AssignedCustomer']);
    Route::post('userlist', [CustomerController::class, 'AssignedCustomer']);
    Route::get('sys_recharge', [CustomerController::class, 'RechargeHistory']);
    Route::get('customers_campaign', [CustomerController::class, 'CustomerCampaign']);
    // System User

    // Recharge Request
    Route::get('/customer_credit', [CustomerController::class, 'requestlist']);
    Route::post('/recharge_request', [CustomerController::class, 'rechargeRequest']);
    Route::get('/edit_payment/{id}', [CustomerController::class, 'EditPayment']);
    Route::post('/update_payment/{id}', [CustomerController::class, 'UpdatePayment']);
    // Recharge Request

});

// Sales Manager Route Group
Route::group(['prefix' => 'manager', 'middleware'=>['manager','auth']], function () {

    Route::get('dashboard', [ManagerController::class, 'index'])->name('manager.dashboard');

    // Profile Route
    Route::get('/profile', [ManagerController::class, 'profile']);
    Route::post('/updateprofile', [ManagerController::class, 'UpdateProfile']);

    // Field Data
    Route::get('/cus_list', [ManagerController::class, 'FieldData']);
    Route::post('/cus_list', [ManagerController::class, 'FieldData']);
    Route::get('/download_field/xlsx', [ManagerController::class, 'DownloadData']);

    // Executive List
    Route::get('/exec_list', [ManagerController::class, 'ExecutiveList']);
    Route::post('/exec_list', [ManagerController::class, 'ExecutiveList']);

    // Comission
    Route::get('/com_list', [ManagerController::class, 'ComissionList']);

    // Attendence
    Route::get('attendence', [ManagerController::class, 'Attendence']);
    Route::get('/attendence_list', [ManagerController::class, 'AttendenceList']);
    // Attendence
    
    //Field Customer Data Management 
    Route::get('customer', [ManagerCustomerController::class, 'index']);
    Route::post('customer', [ManagerCustomerController::class, 'index']);
    Route::get('cus_create', [ManagerCustomerController::class, 'create']);
    Route::post('store', [ManagerCustomerController::class, 'store']);
    Route::get('/editcustomer/{id}', [ManagerCustomerController::class, 'edit']);
    Route::post('/updatecustomer/{id}', [ManagerCustomerController::class, 'update']);
    Route::get('/conveyance', [ManagerCustomerController::class, 'Conveyance']);
    Route::post('/conveyance', [ManagerCustomerController::class, 'Conveyance']);
    //Field Customer Data Management 

    
});


Route::group(['prefix' => 'admin/dlr', 'middleware'=>['auth']], function () {
    Route::get('campaignwise/{campaignid}', [DLRController::class, 'campaignwise_dlr']);
    Route::get('campaignlist', [DLRController::class, 'campaignlist_dlr']);
    Route::get('userwise/{userid}', [DLRController::class, 'userwise_dlr']);
});
Route::group(['prefix' => 'reseller/dlr', 'middleware'=>['auth']], function () {
    Route::get('campaignwise/{campaignid}', [DLRController::class, 'campaignwise_dlr']);
    Route::get('campaignlist', [DLRController::class, 'campaignlist_dlr']);
    Route::get('userwise/{userid}', [DLRController::class, 'userwise_dlr']);
});
Route::group(['prefix' => 'user/dlr', 'middleware'=>['auth']], function () {
    Route::get('campaignwise/{campaignid}', [DLRController::class, 'campaignwise_dlr']);
    Route::get('campaignlist', [DLRController::class, 'campaignlist_dlr']);
    Route::get('userwise/{userid}', [DLRController::class, 'userwise_dlr']);
});