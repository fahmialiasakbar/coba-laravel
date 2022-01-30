@extends('layouts.main')
@section('container')
<h1 class="mb-3">{{ $title }}</h1>
    @foreach ($categories as $cat)
    <ul>
        <li>
            <h2>
                <a href="/categories/{{ $cat->slug }}">
                  {{ $cat->name }}  
                </a>
            </h2>
        </li>
    </ul>
    @endforeach
@endsection