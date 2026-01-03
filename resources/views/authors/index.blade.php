@extends('layouts.app')

@section('content')

    <table class="table">
        <colgroup>
            <col>
            <col class="table-actions-col">
        </colgroup>
        <thead>
            <tr>
                <th>Author name</th>
                <th class="table-actions-col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @if($authors->isEmpty())
                <tr>
                    <td colspan="2" class="deleted">No authors yet.</td>
                </tr>
            @else
                @foreach($authors as $author)
                <tr>
                    <td class="title_column"><a href="{{ route('authors.show', $author) }}">{{ $author->name }}</a></td>
                    <td class="action_column">
                        <a class="edit" href="{{ route('authors.edit', $author) }}"><i class="bi bi-pencil-fill"></i></a>
                        <form action="{{ route('authors.destroy', $author) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete" style="background:none;border:none;padding:0;">
                                <i class="bi bi-trash3-fill"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>

    <div class="d-flex justify-content-end align-items-center mt-4">
        <div class="pagination-container">
            {{ $authors->links('pagination::bootstrap-5') }}
        </div>
    </div>
    
@endsection
