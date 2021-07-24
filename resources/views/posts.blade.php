@extends('layout.main')

@section('container')
    <h1>Halaman Blog</h1>

    @foreach ($posts as $post)
        <article class="mb-5">
            <h2><a href="/post/{{ $post['slug'] }}">{{ $post["title"] }}</a></h2>
            <h5>{{ $post["author"] }}</h5>
            <p>{{ $post["body"] }}</p>
        </article>
    @endforeach
@endsection