@extends('template.default')

@section('title'){{ $post->title }} @stop

@section('content')
			<article>
				<h2>{{ $post->title }}</h2>
				<p>Published on {{ $post->created_at->format('l jS \\of F Y') }}</p>
				{{ Markdown::parse($post->body); }}
			</article>
@stop