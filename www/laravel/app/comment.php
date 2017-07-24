<?php

namespace App;


class comment extends Model
{
    public function tweet()

    {
    	return $this->belongsTo(tweet::class);

    }


    public function user()
    {

    	return $this->belongsTo(user::class);
    }
}
