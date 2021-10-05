@extends('layouts.main')

@section('container')

    <div class="container col-md-8 justify-content-center mb-5">

        <h1>{{ $lesson->judul }}</h1>
    
        <p class="d-inline">By <a class="text-decoration-none" href="/lessons?author={{ $lesson->author->username }}">{{ $lesson->author->name }} </a><small class="text-muted mb-3">{{ $lesson->created_at->diffForHumans() }}</small></p>

        <img class="img-fluid card-img-center my-4" src="https://source.unsplash.com/1200x500?{{ $lesson->category->name }}" alt="Thumbnail">

        <p><a class="text-decoration-none" href="/lessons?category={{ $lesson->category->slug }}">#{{ $lesson->category->name }}</a></p>
        <article>
            {!! $lesson->body !!}
        </article>

        <a href="/lessons">Back to posts</a>
    </div>
    
@endsection

