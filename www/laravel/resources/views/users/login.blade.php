@extends('layout.master');


@section('blogposts')

@if(count($errors))
	@foreach($errors->all() as $message)

		{{ $message }}

		@endforeach

	@endif

	<form id="register"  action ="/userlogin" method ="POST">
		{{csrf_field()}}

		
		<label>Email:</label>
		

		<input type="text" name="email" placeholder="email"></input><br>
		<br>


		<label>Password:</label>
		<input type="password" name="password" placeholder="password"></input>

		<br>
		<br>


		<input type="submit" name="submit" value="signup">

		




	</form>

@stop