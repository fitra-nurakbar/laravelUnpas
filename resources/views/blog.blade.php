{{-- @dd($article) --}}
@extends('layouts.main')

@section('content')
    @foreach ($article as $post)
        <article class="mb-5">
            <a href="/blog/{{ $post->slug }}">
                <h1>{{ $post->title }}</h1>
            </a>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection


