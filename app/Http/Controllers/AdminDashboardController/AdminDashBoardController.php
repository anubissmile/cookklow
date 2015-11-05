<?php

namespace App\Http\Controllers\AdminDashboardController;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminDashBoardController extends Controller
{
    public function getIndex(){
    	return view('metro-dashboard.index');
    }
}
