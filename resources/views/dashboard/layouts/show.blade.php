@extends('dashboard.layouts.main')

@section('container')
    
    <div class="container">
        <div class="row my-5">
            <div class="col-lg-10">
                <h1>{{ $post->judul }}</h1>

                <a href="/dashboard/posts" class="btn badge bg-info text-dark"><span data-feather="arrow-left"></span> Back</a>
                <a href="" class="btn badge bg-warning text-dark"><span data-feather="edit"></span> Edit</a>
                <a href="" class="btn badge bg-danger"><span data-feather="trash-2"></span> Delete</a>

                <img class="img-fluid card-img-center my-4" src="https://source.unsplash.com/1200x500?{{ $post->category->name }}" alt="Thumbnail">

                <article>
                    {!! $post->body !!}
                </article>
            </div>
        </div>
        
    </div>
@endsection