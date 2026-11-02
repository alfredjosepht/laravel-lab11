@extends('layouts.app')

@section('title', 'Edit student')

@section('content')
    <h1>Edit {{ $student->name }}</h1>

    <form method="POST" action="{{ route('students.update', $student) }}">
        @csrf
        @method('PUT')
        @include('students._fields')
        <button type="submit">Update</button>
    </form>
@endsection
