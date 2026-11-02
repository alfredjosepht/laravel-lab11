@extends('layouts.app')

@section('title', 'About')

@section('content')
    <h1>About {{ $name }}</h1>
    <p>This page is served by <code>PageController@about</code>.</p>
    <ul>
        <li>Name: {{ $name }}</li>
        <li>Roll {{ $roll }}</li>
        <li>Reg No: {{ $regNo }}</li>
    </ul>
@endsection
