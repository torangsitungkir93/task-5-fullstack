
@extends('layouts.main')

@section('container')
<h1>Hello, Investree!</h1> 
<div class="container">
    @yield('content')
</div>
<a href="/login" class="btn btn-success">Login Dahulu</a>
@endsection