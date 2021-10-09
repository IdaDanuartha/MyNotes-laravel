@extends('layouts.main')

@section('container')

    <main class="container mt-4">
      @if ($lesson->image)
          <img class="" src="{{ asset('storage/' . $lesson->image) }}" alt="Image" style="overflow: hidden; max-height: 500px; width: 100%;">
       @else
          <img src="https://source.unsplash.com/1200x500?{{ $lesson->category->name }}" alt="Image" style="overflow: hidden; max-height: 500px; width: 100%;">
                        
      @endif      
      
      <div class="row g-5 mt-4">
          <div class="col-md-9">
      
            <article class="blog-post">
              <h1 class="blog-post-title">{{ $lesson->judul }}</h1>
              <p class="blog-post-meta"><small class="text-muted mb-3">{{ $lesson->created_at->diffForHumans() }} - by <a class="text-secondary" href="/lessons?author={{ $lesson->author->username }}">{{ $lesson->author->name }}</a> - <a class="text-secondary" href="/lessons?category={{ $lesson->category->slug }}">{{ $lesson->category->name }}</a></small> </p>
                
              <p class="mt-5">{!! $lesson->body !!}</p>

              <a href="/lessons" class="btn btn-success mt-3"><i class="fas fa-long-arrow-alt-left"></i> Back to Lessons</a>

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

