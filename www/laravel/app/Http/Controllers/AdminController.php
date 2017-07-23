<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\post;
use App\Admin;

use App\Http\Requests\ValidateAdminData;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminController extends Controller
{
    use AuthenticatesUsers;  //use authenticatable as a trait

  /*  public function __construct(){
        $this->middleware('authbounce')
    } */

    protected $redirectTo = '/addpost';
  
    public function create(){
    	return view("admin.addpost");

    }


    public function store(){

    	#validate the form
    	$this->validate(request(), [
    			"title" => "required",
    			"body" => "required"
    		]);




    	$post = new post;

    	post::create([
    		'author' => "mark",
    		'title' => request('title'),
    		'body'  => request('body')
    		]);

    	return redirect('/addpost')->withMessage("post added successfully");

    	/*$post->author = "michael";
    	$post->title = request(['title']);
    	$post->body  = request(['body']);

    	$post->save();
    	return redirect('/addpost'); */
    }

    public function showRegisterPage() {
        return view("admin.index");
    }

    public function showLoginPage(){
        return view("admin.login");
    }

    public function doAdminRegisteration(ValidateAdminData $request){


        //validate user data

        //store admin into db
        $admin = Admin::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
            ]);
        auth()->guard('web_admin')->login($admin);

        return redirect('/addpost');
    }

    protected function guard(){
        return auth()->guard('web_admin');
    }
 
}
