<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MovieModel;
use App\HomeModel;


class HomeController extends Controller
{
    public function index()
    {
        $check_maintenance = HomeModel::maintenance();
        if($check_maintenance == true) {
            HomeModel::getIp($_SERVER['REMOTE_ADDR']);
            return view('maintenance');
        }
        $popular = MovieModel::popular_watching();
    	$index_page = MovieModel::index_page();
    	$rekomendasi = MovieModel::get_movie_recom();
    	return view('index', ['index_page' => $index_page, 'rekomendasi' => $rekomendasi, 'popular' => $popular]);
    }
    public function contact(Request $req)
    {
    	return view('contact');
    }
    public function tos()
    {
        return view('terms');
    }
}
