<?php


namespace App\Helpers;
use App\Models\Notification as NotificationModel;

class Notification
{


    public static function addToNotification($subject,$admin)
    {
    	$log = [];
    	$log['text'] = $subject;
    	$log['user_id'] = auth()->check() ? auth()->user()->id : 1;
		$log['admin'] = $admin;
    	NotificationModel::create($log);
    }


}
