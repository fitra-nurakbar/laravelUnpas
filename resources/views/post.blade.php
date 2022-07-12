{{-- @dd($article) --}}
@extends('layouts.main')

@section('content')
    @foreach ($article as $post)
        <article class="mb-5">
                <h1>{{ $post->title }}</h1>
            </a>
            {!! $post->body !!}
        </article>
        <a href="/blog">Back to blog</a>
    @endforeach
@endsection


