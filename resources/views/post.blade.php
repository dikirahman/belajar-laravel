@extends('layout.main')

@section('container')

<h1>Halaman Blog</h1>

    <article class="mb-5">
        <h2>{{ $post["title"] }}</h2>
        <h5>{{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
    </article>

    <a href="/blog">Back to Posts</a>
@endsection