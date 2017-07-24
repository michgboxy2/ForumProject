<?php

namespace App;



class tweet extends Model
{
    public function comments(){

    	return $this->hasMany(comment::class);
    }


    public function addcomment($comment){

    	$this->comments()->create(compact('comment'));



    	// comment::create([

     //    'comment' => request('comment'),

     //    'tweet_id' => $this->id 

     //    ]);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
