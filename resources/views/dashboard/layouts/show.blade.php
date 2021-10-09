@extends('dashboard.layouts.main')

@section('container')
    
    <main class="container my-5">
        @if ($post->image)
            <img class="" src="{{ asset('storage/' . $post->image) }}" alt="Image" style="max-height: 500px; width: 100%; overflow: hidden;">
        @else
            <img class="" src="https://source.unsplash.com/1200x500?{{ $post->category->name }}" alt="Image" style="max-height: 500px; width: 100%; overflow: hidden;">
        @endif
       
        <div class="mt-2">
          <a href="/dashboard/posts" class="btn btn-info text-dark me-1"><i class="fas fa-long-arrow-alt-left"></i> Back</a>
          <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning text-dark me-1"><i class="fas fa-edit"></i> Edit</a>

          <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
          @method('delete')
          @csrf
          <button class="btn btn-danger" onclick="return confirm('Are You Sure')"><i class="fas fa-trash"></i> Delete</button>
          </form>
      </div>
      
      <div class="row g-5 mt-2">
          <div class="col-md-9">
      
            <article class="blog-post">
              <h1 class="blog-post-title">{{ $post->judul }}</h1>
              <p class="blog-post-meta"><small class="text-muted mb-3">{{ $post->created_at->diffForHumans() }} - by <a class="text-secondary" href="/lessons?author={{ $post->author->username }}">{{ $post->author->name }}</a></small></p>

              <a class="text-decoration-none {{ $post->category->name === "Matematika" ? 'text-danger' : ''}} 
                {{ $post->category->name === "Fisika" ? 'text-warning' : ''}} 
                {{ $post->category->name === "Kimia" ? 'text-success' : ''}} 
                {{ $post->category->name === "Biologi" ? 'text-info' : ''}}" href="/lessons?category={{ $post->category->slug }}">#{{ $post->category->name }}</a>
                
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

