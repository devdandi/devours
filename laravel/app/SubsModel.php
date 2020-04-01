<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class SubsModel extends Model
{
    public static function subs($nama, $email)
    {
    	$check = DB::table('subs')->where('email', $email)->count();
    	if($check > 0) {
    		return false;
    	}else{
    		$data = DB::table('subs')->insert(['email' => $email, 'nama' => $nama, 'created_at' => now()]);
    		if($data){
	    		DB::disconnect('foo');
	    		return true;
    		}
    	}
    }
}