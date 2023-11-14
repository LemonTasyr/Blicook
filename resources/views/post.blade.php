@extends('dashboard/layouts/main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="d-flex flex-column">
                    <div>
                        <h1 class="mb-3">{{ $post->title }}</h1>

                        <p>By. <a href="/authors/{{ $post->author->username }}" class= "text-decoration-none">
                                {{ $post->author->name }}</a> in
                            <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">
                                {{ $post->category->name }}</a>
                        </p>

                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                            alt="{{ $post->category->name }}" class="img-fluid">

                        <article class="mt-5 fs-5">
                            {!! $post->body !!}

                        </article>

                    </div>

                    <a href="/posts" class="d-block mt-2"> Back to posts</a>
                </div>
            </div>
        </div>

    </div>
@endsection
