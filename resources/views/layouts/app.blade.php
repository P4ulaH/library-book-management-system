<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'library')</title>
</head>
<body>
    <nav>
        <div class="container">
            <a class="navbar-brand" href="{{ route('books.index') }}">Library</a>
            <div>
                <a class="btn" href="{{ route('books.create') }}">Add Book</a>  
            </div>
        </div>
    </nav>

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @yield('content')
    </div>
</body>
</html>