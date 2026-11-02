@extends('layouts.app')

@section('title', 'Students')

@section('content')
    <h1>Students</h1>
    <p><a href="{{ route('students.create') }}">+ Add a student</a></p>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Roll No</th>
                <th>Reg No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Dept</th>
                <th>Sem</th>
                <th>CGPA</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->roll_no }}</td>
                    <td>{{ $student->reg_no ?? '—' }}</td>
                    <td><a href="{{ route('students.show', $student) }}">{{ $student->name }}</a></td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->department }}</td>
                    <td>{{ $student->semester }}</td>
                    <td>{{ $student->cgpa ?? '—' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
