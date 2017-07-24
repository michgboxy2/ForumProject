<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\tweet;

class TweetController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()

    {
    	$tweet = tweet::latest()->get();
    	return view('tweet.index', compact('tweet'));
    }



    public function store()

    {

    	$this->validate(request(), [

    		'tweet' => 'required'

    		]);

    	$tweet = new tweet;

    	auth()->User()->publish(

            new tweet(request(['tweet'])));

        // tweet::create([

        //     'tweet' => request('tweet'),
        //     'user_id' => auth()->id()




        //     ]);
    	
    	return redirect('/');

    }


    public function show(tweet $tweet)

    {

    	return view('tweet.show', compact('tweet'));
    }



}
