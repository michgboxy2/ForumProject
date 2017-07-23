@extends('layout.master-back')



@section('content')



<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body>
	<section>
		<div class="mast">
			<h1>T<span>SSB</span></h1>
		</div>
	</section>
	
	<div class="wrapper">
		<h1 id="register-label">Admin Registeration</h1>
		<hr>
		<form id="register"  action ="/adminregister" method ="POST">
			{{csrf_field()}}



			
			<div>
				@if($errmsg = $errors->has('title'))
				
				<span class="err">{{$errors->get('name')[0]}}</span>
				@endif
				<label>Name:</label>
				<input type="text" name="name" placeholder="name">
			</div>
			<div>
				@if($errmsg = $errors->has('email'))
				
				<span class="err">{{$errors->get('email')[0]}}</span>
				@endif
				<label>Email:</label>	
				<input type="text" name="email" placeholder="email">
			</div>
			<div>
				@if($errmsg = $errors->has('password'))
				
				<span class="err">{{$errors->get('password')[0]}}</span>
				@endif
				<label>Password:</label>
				<input type="password" name="password" placeholder="password">
			</div>
			<div>
				@if($errmsg = $errors->has('body'))
				
				<span class="err">{{$errors->get('password_confirmation')[0]}}</span>
				@endif
				<label>Confirm Password:</label>	
				<input type="password" name="password_confirmation" placeholder="confirm password">
			</div>


			

			<input type="submit" name="register" value="register">
		</form>

		
</body>
</html>