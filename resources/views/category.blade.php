@extends('layouts.main')
@section('container')

<h1 class="mb-5">Post Category : {{ $category }}</h1>
@foreach ($posts as $post)
<article class="mb-5">
    <h2>
        <a href="/posts/{{ $post->id }}">
            {{ $post->title }}
        </a>
    </h2>
    <h5>By: {{ $post->author->name }}</h5>
    <p class="text-truncate text-truncate-2">{{ $post->excerpt }}</p>
</article>
@endforeach
@endsection