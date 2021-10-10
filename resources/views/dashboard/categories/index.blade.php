@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-lg-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-3 mb-3 border-bottom border-dark">

      <h2>My Posts Categories Editor</h2>

    </div>

    @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show col-lg-6" role="alert">
          {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <a href="/dashboard/categories/create" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Create New Category</a>
      <div class="table-responsive col-lg-6">
        <table class="table table-striped table-dark table-sm table-bordered">
          <thead>
            <tr class="text-center">
              <th scope="col">#</th>
              <th scope="col">Category Name</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($categories as $category)

                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $category->name }}</td>
                    <td class="text-center">
                        <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-info text-dark me-1"><i class="fas fa-eye"></i></a>

                        <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning text-dark me-1"><i class="fas fa-edit"></i></a>

                        <form action="/dashboard/categories/{{ $category->slug }}" method="POST" class="d-inline">
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

