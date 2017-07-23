@extends('layout.master')

@section('blogposts')
<div class="col-sm-8 blog-main">
	<h2>welcome {{Auth::user()->name}} </h2>


	@stop