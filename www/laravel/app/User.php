<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function tweet()
    {

        return $this->hasMany(tweet::class);
    }

    public function publish(tweet $tweet)

    {
        $this->tweet()->save($tweet);
         // tweet::create([

        //     'tweet' => request('tweet'),
        //     'user_id' => auth()->id()




        //     ]);
    }
}
