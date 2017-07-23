<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
	public function __construct(){
		$this->middleware('bounce', ['except' => 'show']);  //all the methods in this controller will be bounced by the middleware except the one in the except and if it's more than one, drop the methods in an array"
	}

    public function create(){
    	return view('users.dashboard');
    }
}
