@extends('layouts.app')

@section('content')

    <table class="table">
        <colgroup>
            <col>
            <col>
            <col>
            <col class="table-actions-col">
        </colgroup>

        <thead>
            <tr>
                <th>Book title</th> <th>Author</th>     <th>Genre</th>      <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td class="title_column">{{ $book->title }}</td>
                <td class="author_column">{{ $book->author->name }}</td>
                <td class="genre_column">{{ $book->genre->name }}</td>
                <td class="action_column">
                    <a class="edit" href="{{ route('books.edit', $book) }}"><i class="bi bi-pencil-fill"></i></a>
                    <a class="delete" href="{{ route('books.destroy', $book) }}"><i class="bi bi-trash3-fill"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-end align-items-center mt-4">
        <div class="pagination-container">
            {{ $books->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
