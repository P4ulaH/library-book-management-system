@vite('resources/css/app.css')
<html>
    <head>
        <title>Books</title>
    </head>
    <body>
        <div class="elements">
            <p class="titles">Title:</p>
            <p class="authors">Author:</p>
            <p class="genres">Genre:</p>
        </div>

        @forelse($books as $book)
            <div class="elements">
                <div class="titles">
                    {{ $book->title }}
                </div>
                <div class="authors">
                    {{ $book->author->name ?? 'Unknown' }}
                </div>
                <div class="genres">
                    {{ $book->genre->name ?? 'Unknown' }}
                </div>
            </div>
        @empty
            <div>No books found.</div>
        @endforelse
    </body>
</html>



