<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SearchModel;

class SearchController extends Controller
{
	public function __construct()
    {
        file_get_contents('http://anti-adblock.adnow.com/aadbAdnow.php?ids=736194,736196,736205');
    }
    public function index()
    {
    	if (isset($_GET['submit'])) {
    		$search = SearchModel::search($_GET['s']);
    		return view('search', ['search' => $search]);
    	}else if(isset($_GET['year'])){
    		$search = SearchModel::getyear($_GET['year']);
    		return view('search', ['search' => $search]);
    	}else if(isset($_GET['genre'])) {
    		$search = SearchModel::getgenre($_GET['genre']);
    		return view('search', ['search' => $search]);
    	}else if(isset($_GET['drama'])) {
    		$search = SearchModel::getdrama($_GET['drama']);
    		return view('search', ['search' => $search]);
    	}else if(isset($_GET['ongoing'])) {
    		$search = SearchModel::getongoing($_GET['ongoing']);
    		return view('search', ['search' => $search]);
    	}
    	return view('search');
    }
}
