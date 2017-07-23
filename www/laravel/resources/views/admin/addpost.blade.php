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
		<h1 id="register-label">Add Posts</h1>
		<hr>
		<form id="register"  action ="/addpost" method ="POST">
			{{csrf_field()}}



			
			<div>
				@if($errmsg = $errors->has('title'))
				
				<span class="err">{{$errors->get('title')[0]}}</span>
				@endif
				<label>Title:</label>
				<input type="text" name="title" placeholder="Title">
			</div>
			<div>
				@if($errmsg = $errors->has('body'))
				
				<span class="err">{{$errors->get('body')[0]}}</span>
				@endif
				<label>Body:</label>	
				<input type="textarea" name="body" placeholder="post">
			</div>

			

			<input type="submit" name="register" value="post">
		</form>

		
</body>
</html>