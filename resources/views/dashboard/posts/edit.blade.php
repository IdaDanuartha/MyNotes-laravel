@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-lg-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-3 mb-3 border-bottom border-dark">
    <h2>Edit Post</h2>
</div>

<div class="col-lg-8">   
<form class="my-4" method="POST" action="/dashboard/posts/{{ $post->slug }}">
    @method('put')
    @csrf
    <div class="mb-3">
      <label for="judul" class="form-label">Judul</label>
      <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" required autofocus value="{{ old('judul', $post->judul) }}">
      @error('judul')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
      @enderror
    </div>
    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control @error('slug') is-invalid @enderror"" id="slug" name="slug" required value="{{ old('slug', $post->slug) }}">
        @error('slug')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
      @enderror
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-select" id="category" name="category_id">
            @foreach ($categories as $category)
                @if (old('category_id', $post->category_id) == $category->id)
                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
                
            @endforeach
        </select>    
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Body</label>
        @error('body')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
        <trix-editor input="body" class="bg-light"></trix-editor>   
    </div>

    
    <button type="submit" class="btn btn-success">Update Post</button>
  </form>
</div> 

<script>
const judul = document.querySelector('#judul');
const slug = document.querySelector('#slug');


judul.addEventListener('change', function() {
    fetch('/dashboard/posts/checkSlug?judul=' + judul.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
});
</script>

@endsection


