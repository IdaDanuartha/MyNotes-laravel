@extends('dashboard.layouts.main')

@section('container')
    
    {{-- <div class="container">
        <div class="row my-5">
            <div class="col-lg-10">
                <h1>{{ $post->judul }}</h1>

                <a href="/dashboard/posts" class="btn btn-info text-dark me-1 mt-3"><i class="fas fa-long-arrow-alt-left"></i> Back</a>
                <a href="" class="btn btn-warning text-dark me-1 mt-3"><i class="fas fa-edit"></i> Edit</a>
                <a href="" class="btn btn-danger mt-3"><i class="fas fa-trash"></i> Delete</a>

                <img class="img-fluid card-img-center my-4" src="https://source.unsplash.com/1200x500?{{ $post->category->name }}" alt="Thumbnail">

                <article>
                    {!! $post->body !!}
                </article>
            </div>
        </div>
        
    </div> --}}


    <main class="container my-5">
        <div class="p-4 p-md-5 text-white rounded bg-dark" style="background-image: url('https://source.unsplash.com/1200x500?{{ $post->category->name }}'); background-position: center; filter: brightness(90%);">
          <div class="col-md-6 px-0">
            <p class="display-6 fst-italic" style="padding: 20px 0 200px 20px;"><a href="" class="badge text-decoration-none 
                {{ $post->category->name === "Matematika" ? 'btn-danger' : ''}} 
                {{ $post->category->name === "Fisika" ? 'btn-warning text-dark' : ''}} 
                {{ $post->category->name === "Kimia" ? 'btn-success' : ''}} 
                {{ $post->category->name === "Biologi" ? 'btn-info text-dark' : ''}} position-absolute" style="left: 10px; top: 10px;">{{ $post->category->name }}</a></p>
          </div>
        </div>
        <a href="/dashboard/posts" class="btn btn-info text-dark me-1 mt-2"><i class="fas fa-long-arrow-alt-left"></i> Back</a>
        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning text-dark me-1 mt-2"><i class="fas fa-edit"></i> Edit</a>

        <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
         @method('delete')
         @csrf
         <button class="btn btn-danger mt-2" onclick="return confirm('Are You Sure')"><i class="fas fa-trash"></i> Delete</button>
        </form>
      
      <div class="row g-5 mt-2">
          <div class="col-md-9">
      
            <article class="blog-post">
              <h1 class="blog-post-title">{{ $post->judul }}</h1>
              <p class="blog-post-meta"><small class="text-muted mb-3">{{ $post->created_at->diffForHumans() }} - by <a class="text-decoration-none" href="/less?author={{ $post->author->username }}">{{ $post->author->name }}</a></small> </p>
                
              <p class="mt-4">{!! $post->body !!}</p>

            </article>
      
          </div>
      
          <div class="col-md-3">
            <div class="position-sticky" style="top: 6rem;">
              <div class="p-4 mb-3 bg-light rounded">
                <h4 class="fst-italic">About</h4>
                <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
              </div>
      
              <div class="p-4">
                <h4 class="fst-italic">Archives</h4>
                <ol class="list-unstyled mb-0">
                  <li><a href="#">March 2021</a></li>
                  <li><a href="#">February 2021</a></li>
                  <li><a href="#">January 2021</a></li>
                  <li><a href="#">December 2020</a></li>
                  <li><a href="#">November 2020</a></li>
                  <li><a href="#">October 2020</a></li>
                  <li><a href="#">September 2020</a></li>
                  <li><a href="#">August 2020</a></li>
                  <li><a href="#">July 2020</a></li>
                  <li><a href="#">June 2020</a></li>
                  <li><a href="#">May 2020</a></li>
                  <li><a href="#">April 2020</a></li>
                </ol>
              </div>
      
              <div class="p-4">
                <h4 class="fst-italic">Elsewhere</h4>
                <ol class="list-unstyled">
                  <li><a href="#">GitHub</a></li>
                  <li><a href="#">Twitter</a></li>
                  <li><a href="#">Facebook</a></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      
      </main>
@endsection