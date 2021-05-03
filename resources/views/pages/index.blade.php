@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="jambotron text-center">
			<h1>{{$title}}</h1>
			<p>This is the Laravel application from Opuge</p>
			<p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a><a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
		</div>
	</div>   
@endsection