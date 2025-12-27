@extends('layouts.app')

@section('content')

    <h1>Book details:</h1>

    <div class="card-body">
        <h4>
            <strong>{{ $book->title }}</strong>
        </h4>
        <div class="card-section">
            <p class="card-text"><strong>Author:</strong>
            @if($book->author_id === null)
                <span class="deleted">Author deleted</span>
            @else
                {{ $book->author->name }}
            @endif
            </p>
            <p class="card-text"><strong>Genre:</strong>
                @if($book->genre_id === null)
                    <span class="deleted">Genre deleted</span>
                @else
                    {{ $book->genre->name }}
                @endif
            </p>
        </div>
        <div class="card-actions">
            <a class="back-link" href="{{ route('books.index') }}"><-- back to books list</a>
            <a href="{{ route('books.edit', $book) }}" class="edit-button">Edit Book</a>
        </div>
        
    </div>
    


@endsection