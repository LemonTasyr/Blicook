@extends('dashboard.sidebar')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <div class="d-flex flex-column">
                    <div>
                        <h1 class="mb-3">{{ $post->title }}</h1>

                        <a href="/dashboard/posts" class="btn btn-success"><i class='bx bxs-arrow-to-left'></i>Back to all my
                            posts</a>
                        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i
                                class='bx bx-edit'></i>Edit</a>
                        <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger border-0" onclick="return confirm('Are you sure?')"><i
                                    class='bx bxs-trash'></i>Delete</button>
                        </form>
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                            alt="{{ $post->category->name }}" class="img-fluid mt-4">

                        <article class="mt-5 fs-5">
                            {!! $post->body !!}

                        </article>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
