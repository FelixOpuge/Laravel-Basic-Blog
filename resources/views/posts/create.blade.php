@extends('layouts.app')

@section('content')
<div>
	<a href="/posts" class="btn btn-defaukt">Go Back</a>
	<h1>Create Post</h1>
	{!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'form-control']) !!}
		<div class="form-group">
    		{{ Form::label('title', 'Title') }}
    		{{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title']) }}
		</div>
		<br>
		<div class="form-group">
    		{{ Form::label('body', 'Body') }}
    		{{ Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body']) }}
		</div>
		<div class="form-group">
			{{ form::file('cover_image') }}
		</div>
		<br>
		{{ Form::submit('Submit', ['class' => 'btn btn-primary'] ) }}
	{!! Form::close() !!}
</div>
@endsection