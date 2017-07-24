<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\comment;
use App\tweet;


class CommentController extends Controller
{
   public function store(tweet $tweet){

    $this->validate(request(), ['comment' => 'required|min:2']);

    $tweet->addcomment(request('comment'));

    return back();



   } 
}
