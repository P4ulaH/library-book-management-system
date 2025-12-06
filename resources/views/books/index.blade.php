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
                    <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete" style="background:none;border:none;padding:0;">
                            <i class="bi bi-trash3-fill"></i>
                        </button>
                    </form>
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
