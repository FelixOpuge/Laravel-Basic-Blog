@extends('layouts.app')

@section('content')
	<h1>Posts</h1>
	@if(count($posts) > 0)
		<ul class="list-group">
			@foreach($posts as $post)
				<li class="list-group-item">
					<div class="row">
						<div class="col-md-4 col-sm-4">
							<img style="width:100%" src="/storage/cover_image/{{ $post->cover_image }}">
						</div>
						<div class="col-md-8 col-sm-8">
							<h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</h3></a>
							<div>
								{{ $post->body }}
							</div>
							<hr>
							<small>Posted on: {{ $post->created_at }} by: <strong>{{ $post->user->name }}</strong></small>
						</div>
					</div>
					
				</li>
			@endforeach
		</ul>
		<br>
		<span>
			{{ $posts->links() }}
		</span>
	@else
		<p>No Posts found</p>
	@endif
@endsection

<style type="text/css">
	.w-5{
		display: none;
	}
</style>