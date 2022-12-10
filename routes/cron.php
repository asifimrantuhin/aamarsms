<?php  

## SMS sender  10 sec interval
Route::get('sms-sender', 'HomeController@smsSender');
## SMS sender 10 sec interval
Route::get('sms-sending', 'HomeController@smsSending');
Route::get('bulk-sms-sending', 'HomeController@smsSending');
## Price Sync 30 sec interval
Route::get('price-sync','HomeController@priceSync'); 
## API Status check 10 mintues interval
Route::get('api-check','HomeController@apiCheck');
## API Status check 10 mintues interval
Route::get('get-users-sms-summery','HomeController@getUsersSMSsummary');

Route::get('callback_response_push','HomeController@callback_response_push');
//Route::get('smstest','HomeController@robiSMSTest');
