<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\tweet;

class TweetController extends Controller
{
    public function index()

    {
    	$tweet = tweet::all();
    	return view('tweet.index', compact('tweet'));
    }



    public function store()

    {

    	$this->validate(request(), [

    		'tweet' => 'required'

    		]);

    	$tweet = new tweet;

    	tweet::create(request(['tweet']));
    	
    	return redirect('/');

    }


    public function show($id)

    {
    	$tweet = tweet::find($id);

    	return view('tweet.show', compact('tweet'));
    }



}
