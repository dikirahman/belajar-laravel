@extends('layout.main')

@section('container')

<h1>Halaman Blog</h1>

    <article class="mb-5">
        <h2>{{ $post->title }}</h2>

        <p>By. Diki Rahman in  <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

        {!! $post->body !!}
    </article>

    <a href="/posts">Back to Posts</a>
@endsection