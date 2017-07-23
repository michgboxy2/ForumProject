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
		<h1 id="register-label">Admin Login</h1>
		<hr>
		<form id="register"  action ="/adminlogin" method ="POST">
			{{csrf_field()}}



			
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
		


			

			<input type="submit" name="login" value="login">
		</form>

		
</body>
</html>