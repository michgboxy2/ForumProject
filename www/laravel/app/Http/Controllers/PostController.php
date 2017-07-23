<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\comment;

class PostController extends Controller
{
    public function show(){
    	$posts = post::all();
    	return view("posts.index", compact('posts'));
    }


    public function view($id){
    	$post = post::find($id);
    	   	
    	return view("posts.view", compact('post'));

    } 
}
 