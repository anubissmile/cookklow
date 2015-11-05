<?php

namespace App\Http\Controllers\AdminDashboardController;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminDashBoardController extends Controller {

	protected $metro_content = "metro-dashboard.content.";

    public function getIndex(){
    	return view('metro-dashboard.index', 
    		['dashboardnamepage' => $this->metro_content . "dashboard-content"]);
    }

    public function getLogin(){
    	return view('metro-dashboard.login');
    }

}
