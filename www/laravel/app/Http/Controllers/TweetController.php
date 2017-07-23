<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\tweet;

class TweetController extends Controller
{
    public function index()

    {
    	return view('tweet.index');
    }



    public function store()

    {
    	$tweet = new tweet;

    	tweet::create(

    		 [

    		'tweet' => request('tweet')

    		]);

    	return redirect('/');

    }



}
