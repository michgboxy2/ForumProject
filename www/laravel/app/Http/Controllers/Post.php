<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class post extends Controller
{
    public function showIndexPage(){
    	return view("posts.index");

    }
}
