@extends('layouts.main')
@section('container')

@foreach ($posts as $post)
<h1 class="mb-5">Post Category : {{ $category }}</h1>
<article class="mb-5">
    <h2>
        <a href="/posts/{{ $post->id }}">
            {{ $post->title }}
        </a>
    </h2>
    <h5>By: {{ $post->author }}</h5>
    <p class="text-truncate text-truncate-2">{{ $post->excerpt }}</p>
</article>
@endforeach
@endsection