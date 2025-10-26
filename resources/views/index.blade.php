{{--
@extends('layouts.app')

@section('title', 'Books')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4>Books</h4>

            <table class="table">
                <thead><tr><th>Title</th><th>Author</th><th>Genre</th></tr></thead>
                <tbody>
                    @forelse($books as $book)
                    <tr>
                        <td><a href="{{ route('books.show', $book) }}">{{ $book->title }}</a></td>
                        <td>{{ $book->author->name ?? 'Unknown' }}</td>
                        <td>{{ $book->genre->name ?? 'Unknown' }}</td>
                    </tr>
                    @empty
                    <tr><td colspan="3">No books yet</td></tr>
                    @endforelse
                </tbody>
            </table>

            {{ $books->links() }}

        </div>
    </div>
     --}}

<html>
    <body>
        @forelse($books as $book)
            <div>
                {{ $book->title }}
                (Author: {{ $book->author->name ?? 'Unknown' }})
                (Genre: {{ $book->genre->name ?? 'Unknown' }})
            </div>
        @empty
            <div>No books found.</div>
        @endforelse
    </body>
</html>



