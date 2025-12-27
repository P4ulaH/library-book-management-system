@extends('layouts.app')

@section('content')

    <h1>Author details:</h1>

    <div class="card-body">
        <h4>
            <strong>{{ $author->name }}</strong>
        </h4>
        <div class="card-section">
            <p class="card-text"><strong>Books:</strong></p>
            <ul>
                @if ($author->books->isEmpty())
                    <li class="deleted">No books found for this author.</li>
                @else
                    @foreach ($author->books as $book)
                    <li>{{ $book->title }}</li>
                    @endforeach
                @endif
                
            </ul>
        </div>
        <div class="card-actions">
            <a class="back-link" href="{{ route('authors.index') }}"><-- back to authors list</a>
            <a href="{{ route('authors.edit', $author) }}" class="edit-button">Edit Author</a>
        </div>
        
    </div>
    
@endsection