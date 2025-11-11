<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>@yield('title', 'Library')</title>

  <!-- CSS framework (Bootstrap) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  @stack('head') <!-- optional: allows pages to add extra head content -->
</head>

<body class="bg-light">

  <!-- Navigation bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom mb-4">
    <div class="container">
      <a class="navbar-brand fw-bold" href="{{ route('books.index') }}">Library</a>
      <div class="ms-auto">
        <a href="{{ route('books.index') }}" class="btn btn-outline-secondary btn-sm">Books</a>
        <a href="{{ route('authors.index') }}" class="btn btn-outline-secondary btn-sm">Authors</a>
        <a href="{{ route('genres.index') }}" class="btn btn-outline-secondary btn-sm">Genres</a>
      </div>
    </div>
  </nav>

  <!-- Main container where page content will go -->
  <div class="container">
    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @yield('content')
  </div>

  <!-- JS (Bootstrap bundle) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  @stack('scripts') <!-- optional: pages can push scripts here -->
</body>
</html>
