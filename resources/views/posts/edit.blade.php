@extends('layouts.app')

@section('content')
	<a href="/posts/{{ $post->id }}" class="btn btn-defaukt">Go Back</a>
	<h1>Edit Post</h1>
	{!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
		<div class="form-group">
    		{{ Form::label('title', 'Title') }}
    		{{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title']) }}
		</div>
		<br>
		<div class="form-group">
    		{{ Form::label('body', 'Body') }}
    		{{ Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body']) }}
		</div>
		<div class="form-group">
			{{ form::file('cover_image') }}
		</div>
		<br>
		{{ Form::hidden('_method', 'PUT') }}
		{{ Form::submit('Submit', ['class' => 'btn btn-primary'] ) }}
	{!! Form::close() !!}
@endsection