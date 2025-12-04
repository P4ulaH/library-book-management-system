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
            @foreach($authors as $author)
            <tr>
                <td class="title_column">{{ $author->name }}</td>
                <td class="action_column">
                    <a class="edit" href="{{ route('authors.edit', $author) }}"><i class="bi bi-pencil-fill"></i></a>
                    <a class="delete" href="{{ route('authors.destroy', $author) }}"><i class="bi bi-trash3-fill"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-end align-items-center mt-4">
        <div class="pagination-container">
            {{ $authors->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
