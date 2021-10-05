@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-lg-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-3 mb-3 border-bottom border-dark">

      <h2>Welcome Back, {{ auth()->user()->name }}</h2>

    </div>
@endsection