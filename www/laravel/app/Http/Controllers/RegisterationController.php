<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\ValidateUserDetails;

class RegisterationController extends Controller
{
    public function __construct(){

    }

    public function create(){
    	return view("users.index");
    }

    public function store(ValidateUserDetails $request){
    	//validate user
    	


    	//insert user into db
    	//$user = User::create(request()->all()); //mass assign  Request::all() ..request fascade

    	$user = User::create([
    		'name' => request('name'),
    		'email' => request('email'),
    		'password' => bcrypt(request('password'))

    		]);



    	//log user in
    	auth()->login($user);


    	//take user to dashboard
    	return redirect('/dashboard');




    }
}
