<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\comment;
use App\post;
use App\Http\Requests\ValidateComments;

class CommentController extends Controller
{
    public function show($id){
        $comments = comment::find($id);
        return view('posts.view', compact('comments'));
    }

   public function store(ValidateComments $request, $id){
        //validate the form
        
    
        $post = new post;
        
        $comment = comment::create([



            "post_id" => $id,

            "comments" => $request('comments')
            ]);

        

        return redirect("/post/".$post->id)->withMessage("comment successfully added");


    }
}
