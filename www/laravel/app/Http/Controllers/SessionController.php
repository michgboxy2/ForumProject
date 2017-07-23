<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidateLoginDetails;

use App\User;

class SessionController extends Controller
{
    public function create(){
    	return view("users.login");
    }

    public function store(ValidateLoginDetails $request){
    	//validate user


    	//attempt to login user
    	if(!auth()->attempt(request(['email', 'password']))){
    		return redirect()->home();
    	}
    	//enter dashboard
    	return redirect('/dashboard');
    }

    public function logout(){
    	auth()->logout();

    	//return view("users.login");
    	return redirect()->home();
    }
}
