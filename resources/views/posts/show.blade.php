@extends('layouts.app')

@section('content')
	<a href="/posts" class="btn btn-default">Go Back</a>
	<h1>{{ $post->title }}</h1>
	<img style="width:100%" src="/storage/cover_image/{{ $post->cover_image }}">
	<br><br><br>
	<div>
		<p>{{ $post->body }}</p>
	</div>
	<hr>
	<small>Posted on: {{ $post->created_at }} by: <strong>{{ $post->user->name }}</strong></small>
	<hr>
	@if(!Auth::guest())
		@if(Auth::user()->id == $post->user_id)
			<a href="/posts/{{ $post->id }}/edit" class="btn btn-default">Edit</a>
			{!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'btn pull-right']) !!}
				{{ Form::hidden('_method', 'DELETE') }}
				{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
			{!! Form::close() !!}
		@endif	
	@endif
@endsection