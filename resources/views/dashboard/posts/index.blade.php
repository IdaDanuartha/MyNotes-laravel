@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-lg-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-3 mb-3 border-bottom border-dark">

      <h2>My Posts Editor</h2>

    </div>

    @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show col-lg-10" role="alert">
          {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

    <a href="/dashboard/posts/create" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Create New Post</a>
      <div class="table-responsive col-lg-10">
        <table class="table table-striped table-dark table-sm table-bordered">
          <thead>
            <tr class="text-center">
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Category</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($posts as $post)

                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $post->judul }}</td>
                    <td class="text-center">{{ $post->category->name }}</td>
                    <td class="text-center">
                        <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info text-dark me-1"><i class="fas fa-eye"></i></a>

                        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning text-dark me-1"><i class="fas fa-edit"></i></a>

                        <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                          @method('delete')
                          @csrf
                          <button class="badge bg-danger border-0 btn-delete" onclick="return confirm('Apakah anda yakin ingin menghapus postingan ini?')"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                  
              @endforeach
          </tbody>
        </table>
        </div>

@endsection

