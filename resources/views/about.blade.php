@extends('layouts.main')


@section('container')
    <h1>Halaman About</h1>
    <h3> {{ $name }} </h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $img }}" alt="{{ $name }}" width="200px" height="auto">
@endsection

   
   
   