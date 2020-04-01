<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class SearchModel extends Model
{
    protected $table = "movies";

    public static function search($name)
    {
    	$data =  DB::table('movies')->where('judul', 'like', '%'.$name.'%')->get();
    	if($data){
    		DB::disconnect('foo');
    		return $data;
    	}
    }
    public static function getyear($year)
    {
    	$data =  DB::table('movies')->where('rilis_tanggal', $year)->get();
    	if($data){
    		DB::disconnect('foo');
    		return $data;
    	}
    }
    public static function getgenre($genre)
    {
    	$data =  DB::table('movies')->where('kategori', 'like', '%'.$genre.'%')->get();
    	if($data){
    		DB::disconnect('foo');
    		return $data;
    	}
    }
    public static function getdrama($drama)
    {
    	$data =  DB::table('movies')->where('kategori', 'like', '%'.$drama.'%')->get();
    	if($data){
    		DB::disconnect('foo');
    		return $data;
    	}
    }
    public static function getongoing($ongoing)
    {
    	$data =  DB::table('movies')->where('kategori', 'like', '%'.$ongoing.'%')->get();
    	if($data){
    		DB::disconnect('foo');
    		return $data;
    	}
    }
}
