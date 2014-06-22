@extends('template.default')

@section('title')Home @stop

@section('content')

	@if($posts->count())
		@foreach($posts as $post)
			<article>
				<h2><a href="{{ URL::action('post-show', $post->slug) }}">{{ $post->title }}</a></h2>
				<p>Published on {{ $post->created_at->format('l jS \\of F Y') }}</p>
				{{ Markdown::parse(Str::limit($post->body, 250)); }}
				<a href="{{ URL::action('post-show', $post->slug) }}">Read more</a>
			</article>
		@endforeach
	@endif


@stop