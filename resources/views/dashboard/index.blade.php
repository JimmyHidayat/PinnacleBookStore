@extends('dashboard.layouts.main')

@section('container')


<h1>Welcome, {{ auth()->user()->username }}</h1>


@endsection