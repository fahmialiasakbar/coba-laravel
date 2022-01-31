@extends('layouts.main')
@section('container')
<article>
    <h2 class="mb-5">{{ $post->title }}</h2>
    <h5>By:
        <a href="/posts/{{ $post->id }}" class="text-decoration-none">
            {{ $post->user->name }}
        </a>
        in 
        <a href="/categories/{{ $post->category->slug }}">
            {{ $post->category->name }}
        </a>
    </h5>
    {!! $post->body !!}
</article>
<a href="/posts" class="d-block mt-3">Back</a>
@endsection