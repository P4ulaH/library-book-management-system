@extends('layouts.app')

@section('content')

    <h1>Genre details:</h1>

    <div class="card-body">
        <h4>
            <strong>{{ $genre->name }}</strong>
        </h4>
        <div class="card-section">
            <p class="card-text"><strong>Books:</strong></p>
            <ul>
                @if ($genre->books->isEmpty())
                    <li class="deleted">No books found for this genre.</li>
                @else
                    @foreach ($genre->books as $book)
                    <li>{{ $book->title }}</li>
                    @endforeach
                @endif
                
            </ul>
        </div>
        <div class="card-actions">
            <a class="back-link" href="{{ route('genres.index') }}"><-- back to genres list</a>
            <a href="{{ route('genres.edit', $genre) }}" class="edit-button">Edit Genre</a>
        </div>
        
    </div>
    
@endsection