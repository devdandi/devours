<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MovieModel;

class ReviewsController extends Controller
{
    public $hash = "ALeKk01A0ALkX1cKUuOK2NI5bUZS4IpKIg%3A1585462416536&source=hp&ei=kDyAXpfbHsWm9QOU_73oDg&q=dsada&oq=dsada&gs_lcp=CgZwc3ktYWIQA1AAWABgFWgAcAB4AIABAIgBAJIBAJgBAKoBB2d3cy13aXo&sclient=psy-ab&ved=0ahUKEwiX44_hg7_oAhVFU30KHZR_D-0Q4dUDCAU&uact=5";
    public function __construct()
    {
        file_get_contents('http://anti-adblock.adnow.com/aadbAdnow.php?ids=736194,736196,736205');
    }
    public function index()
    {
    	if (isset($_GET['iq']) AND isset($_GET['name'])) {
	    	if ($_GET['iq'] == null AND $_GET['name'] == null) {
	    		return $this->error();
	    	}else{
                $getEpisode = MovieModel::getEpisode($_GET['name']);
	    		$data_movies = MovieModel::get_movie($_GET['iq'], $_GET['name']);
    			return view('single', ['data_movie' => $data_movies, 'episode' => $getEpisode]);
	    	}
    	}else{
    		return $this->error();
    	}
    }
    public function report()
    {
        if (isset($_GET['iq']) AND isset($_GET['name'])) {
            $report = MovieModel::report($_GET['iq'], $_GET['name']);
            if($report == true)
            {
                echo redirect('/reviews?iq='.$_GET['iq'].'&name='.$_GET['name']);
            }
        }else{
            return $this->error();
        }
    }
    public function error()
    {
    	return view('404');
    }
}
