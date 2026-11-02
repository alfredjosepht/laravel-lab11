<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Students') · CST463 Laravel Lab</title>
    <style>
        body { font-family: system-ui, sans-serif; max-width: 900px; margin: 30px auto; padding: 0 16px; color: #1f2937; line-height: 1.5 }
        nav { display: flex; gap: 14px; flex-wrap: wrap; padding-bottom: 10px; border-bottom: 1px solid #e5e7eb; margin-bottom: 20px }
        nav a { color: #dc2626; text-decoration: none; font-weight: 600 }
        h1 { color: #dc2626 }
        table { border-collapse: collapse; width: 100% }
        th, td { border: 1px solid #e5e7eb; padding: 6px 10px; text-align: left }
        th { background: #f9fafb }
        .status { background: #dcfce7; border: 1px solid #86efac; color: #166534; padding: 10px 14px; border-radius: 8px; margin-bottom: 16px }
        .errors { background: #fee2e2; border: 1px solid #fca5a5; color: #991b1b; padding: 10px 14px; border-radius: 8px; margin-bottom: 16px }
        label { display: block; margin-top: 10px; font-weight: 600 }
        input { padding: 6px 8px; width: 100%; max-width: 360px; box-sizing: border-box }
        button { margin-top: 14px; padding: 8px 16px; background: #dc2626; color: #fff; border: 0; border-radius: 6px; cursor: pointer }
        footer { margin-top: 30px; color: #6b7280; font-size: 0.9em }
    </style>
</head>
<body>
    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ route('students.index') }}">Students</a>
        <a href="{{ route('students.create') }}">Add student</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ url('/api/students') }}">API</a>
    </nav>

    @if (session('status'))
        <div class="status">{{ session('status') }}</div>
    @endif

    @yield('content')

    <footer>Alfred Joseph T · Roll 11 · NSS23CS011</footer>
</body>
</html>
