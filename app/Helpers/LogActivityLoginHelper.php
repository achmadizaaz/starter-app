<?php


namespace App\Helpers;

use App\Models\LogActivityLogin;
use Request;

class LogActivityLoginHelper
{
    public static function addToLog($subject)
    {

		$lastActivity = LogActivityLogin::where('activity', $subject)
			->where('username', auth()->user()->username)
			->orderBy('created_at', 'desc')
			->first();

		$no_activity = $lastActivity ? $lastActivity->no_activity : 0;

    	$log = [];
    	$log['activity'] = $subject;
    	$log['no_activity'] = $no_activity + 1;
    	$log['username'] = auth()->check() ? auth()->user()->username : null;
        $log['name']    = auth()->check() ? auth()->user()->name : null;
        $log['ip_address']    = auth()->check() ? auth()->user()->last_login_ip : null;

    	LogActivityLogin::create($log);
    }


    public static function logActivityLists()
    {
    	return LogActivityLogin::latest()->get();
    }


}