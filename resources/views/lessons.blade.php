@extends('layouts.main')

@section('container')

@if ($lessons->count())
    <h1 class="my-5 text-center">{{ $title }}</h1>

    <div class="card mb-5 text-center">

        <a href="/lessons/{{ $lessons[0]->slug }}">
            @if ($lessons[0]->image)
                <img class="" src="{{ asset('storage/' . $lessons[0]->image) }}" alt="Image" style="overflow: hidden; max-height: 420px; width: 100%;">
                <div class="col-md-6 px-0">
                <p class="display-6 fst-italic" style="padding: 20px 0 20px 0;"><a href=/lessons?category={{ $lessons[0]->category->slug }}" class="badge text-decoration-none 
                    {{ $lessons[0]->category->name === "Matematika" ? 'btn-danger' : ''}} 
                    {{ $lessons[0]->category->name === "Fisika" ? 'btn-warning text-dark' : ''}} 
                    {{ $lessons[0]->category->name === "Kimia" ? 'btn-success' : ''}} 
                    {{ $lessons[0]->category->name === "Biologi" ? 'btn-info text-dark' : ''}} position-absolute" style="left: 10px; top: 10px;">{{ $lessons[0]->category->name }}</a></p>
                </div>
            @else
                <img src="https://source.unsplash.com/1200x500?{{ $lessons[0]->category->name }}" alt="Image" style="overflow: hidden; max-height: 420px; width: 100%;">
                
                <div class="col-md-6 px-0">
                <p class="display-6 fst-italic" style="padding: 20px 0 200px 20px;"><a href="/lessons?category={{ $lessons[0]->category->slug }}" class="badge text-decoration-none 
                    {{ $lessons[0]->category->name === "Matematika" ? 'btn-danger' : ''}} 
                    {{ $lessons[0]->category->name === "Fisika" ? 'btn-warning text-dark' : ''}} 
                    {{ $lessons[0]->category->name === "Kimia" ? 'btn-success' : ''}} 
                    {{ $lessons[0]->category->name === "Biologi" ? 'btn-info text-dark' : ''}} position-absolute" style="left: 10px; top: 10px;">{{ $lessons[0]->category->name }}</a></p>
                </div>

            @endif
        </a>
        <div class="card-body">
        <h2 class="card-title">{{ $lessons[0]->judul }}</h2>

        <p>
            <small class="text-muted">
                By <a class="text-secondary" href="/lessons?author={{ $lessons[0]->author->username }}">{{ $lessons[0]->author->name }}</a>
            </small>
        </p>

        <p class="card-text">{{ $lessons[0]->kutipan }}</p>
        <small class="text-muted d-block mb-3">{{ $lessons[0]->created_at->diffForHumans() }}</small>

        <a href="/lessons/{{ $lessons[0]->slug }}" class="btn btn-primary text-decoration-none">Read More!</a>

        </div>
    </div>


    <div class="container">
        <div class="row">
        @foreach ($lessons->skip(1) as $lesson)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <a href="/lessons/{{ $lesson->slug }}">

                        @if ($lesson->image)
                        <img class="" src="{{ asset('storage/' . $lesson->image) }}" alt="Image" style="overflow: hidden; max-height: 200px; width: 100%;">
                        <div class="col-md-6 px-0">
                        <p class="fs-6" style="padding: 10 0 10px 0;"><a href="/lessons?category={{ $lesson->category->slug }}" class="badge text-decoration-none 
                            {{ $lesson->category->name === "Matematika" ? 'btn-danger' : ''}} 
                            {{ $lesson->category->name === "Fisika" ? 'btn-warning text-dark' : ''}} 
                            {{ $lesson->category->name === "Kimia" ? 'btn-success' : ''}} 
                            {{ $lesson->category->name === "Biologi" ? 'btn-info text-dark' : ''}} position-absolute" style="left: 10px; top: 10px;">{{ $lesson->category->name }}</a></p>
                        </div>
                    @else
                        <img src="https://source.unsplash.com/1200x500?{{ $lesson->category->name }}" alt="Image" style="overflow: hidden; max-height: 200px; width: 100%;">
                        
                        <div class="col-md-6 px-0">
                        <p class="fs-6" style="padding: 10px;"><a href="/lessons?category={{ $lesson->category->slug }}" class="badge text-decoration-none 
                            {{ $lesson->category->name === "Matematika" ? 'btn-danger' : ''}} 
                            {{ $lesson->category->name === "Fisika" ? 'btn-warning text-dark' : ''}} 
                            {{ $lesson->category->name === "Kimia" ? 'btn-success' : ''}} 
                            {{ $lesson->category->name === "Biologi" ? 'btn-info text-dark' : ''}} position-absolute" style="left: 10px; top: 10px;">{{ $lesson->category->name }}</a></p>
                        </div>

                    @endif
                    </a>

                    <div class="card-body">
                        <h4 class="card-title">{{ $lesson->judul }}</h4>

                        <p>
                            <small class="text-muted">
                                By <a class="text-secondary" href="/lessons?author={{ $lesson->author->username }}">{{ $lesson->author->name }}</a>
                            </small>
                        </p>

                        <p class="card-text" style="font-size: 13px">{{ $lesson->kutipan }}</p>
                        <small class="text-muted d-block mb-3">{{ $lesson->created_at->diffForHumans() }}</small>

                        <a href="/lessons/{{ $lesson->slug }}" class="btn btn-primary">Read More!</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
@else
    <h2 class="text-center">NO LESSON FOUND.</h2>    
@endif

<div class="d-flex justify-content-center mt-4">
    {{ $lessons->links() }}
</div>
@endsection

