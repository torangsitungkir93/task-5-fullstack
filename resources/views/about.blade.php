@extends('layouts.main')


@section('container')
    <h1>Halaman About</h1>

    <h3>{{ $name }}</h3>
    <p> {{ $email }} </p>
    <p>github.com/torangsitungkir93</p>
    <img src="img/{{ $image }}" alt="" width="200" class="img-thumbnail rounded-circle">
@endsection