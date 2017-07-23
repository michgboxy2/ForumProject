@extends('layout.master');


@section('blogposts')

@if(count($errors) > 0)
	@foreach($errors->all() as $e)

		{{ $e }}

		@endforeach

	@endif

	<form id="register"  action ="/adduser" method ="POST">
		{{csrf_field()}}

		<label>Name :</label>
		<input type="text" name="name" placeholder="name"></input>
		<br>
		<br>
		<label>Email:</label>
		

		<input type="text" name="email" placeholder="email"></input><br>
		<br>


		<label>Password:</label>
		<input type="password" name="password" placeholder="password"></input>

		<br>
		<br>


		<p>password_confirmation:</p>
		<input type="password" name="password_confirmation" placeholder="name"></input>

		<input type="submit" name="submit" value="signup">

		




	</form>

@stop