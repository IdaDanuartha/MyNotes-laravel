@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-lg-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-3 mb-3 border-bottom border-dark">

      <h2>My Posts Editor</h2>

    </div>

      <div class="table-responsive col-lg-10">
        <table class="table table-striped table-dark table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Category</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($posts as $post)

                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $post->judul }}</td>
                    <td>{{ $post->category->name }}</td>
                    <td>
                        <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info text-dark"><span data-feather="eye"></span></a>
                        <a href="" class="badge bg-warning text-dark"><span data-feather="edit"></span></a>
                        <a href="" class="badge bg-danger"><span data-feather="trash-2"></span></a>
                    </td>
                </tr>
                  
              @endforeach
          </tbody>
        </table>
        </div>

@endsection