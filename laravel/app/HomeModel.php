<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class HomeModel extends Model
{
    public static function maintenance()
    {
    	$check = DB::table('website_configuration')->get();
    	if($check[0]->maintenance == "yes") {
    		DB::disconnect('foo');
    		return true;
    	}else{
    		DB::disconnect('foo');
    		return false;
    	}
    }
    public static function getIp($ip)
    {
        $data = DB::table('visitor')->insert(['ip' => $ip]);
        if($data)
        {
            DB::disconnect('foo');
        }
    }
}
