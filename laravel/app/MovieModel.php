<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MovieModel extends Model
{
    protected $table = "movies";

    public static function index_page()
    {
    	$data = DB::table('movies')->where('follow_up', 'index_page')->get();
    	if($data)
    	{
    		DB::disconnect('foo');
    		return $data;
    	}
    }
    public static function get_movie($id, $name)
    {
    	$data = DB::table('movies')->where('id', $id)->get();
    	if($data)
    	{
    		DB::disconnect('foo');
    		// self::update_view($id);
    		return $data;
    	}
    }

    public static function get_movie_recom()
    {
        return DB::table('movies')->where('follow_up','rekomendasi')->get();
    }
    public static function update_view($id)
    {

    	$get = DB::table('movies')->where('id', $id)->get();
    	$count = DB::table('movies')->where('id', $id)->update(['views' => $get[0]->views+1]);
    	if($count AND $get)
    	{
    		DB::disconnect('foo');
    	}
    }
    public static function popular_watching()
    {
        $data = DB::table('movies')->where('views', '>=', 20)->get();
        if($data)
        {
            DB::disconnect('foo');
            return $data;
        }
    }
    public static function getEpisode($name)
    {
        $data = DB::table('movies')->where('judul', $name)->orderBy('episode', 'asc')->get();
        if($data)
        {
            DB::disconnect('foo');
            return $data;
        }
    }
    public static function report($iq, $name)
    {
        $data = DB::table('report')->insert(['id_video' => $iq, 'judul' => $name]);
        if($data)
        {
            DB::disconnect('foo');
            return true;
        }
    }
}
