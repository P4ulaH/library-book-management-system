@extends('layouts.app')

@section('content')

    <table class="table">
        <colgroup>
            <col>
            <col class="table-actions-col">
        </colgroup>
        <thead>
            <tr>
                <th>Genre name</th>
                <th class="table-actions-col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($genres as $genre)
            <tr>
                <td class="title_column">{{ $genre->name }}</td>
                <td class="action_column">
                    <a class="edit" href="{{ route('genres.edit', $genre) }}"><i class="bi bi-pencil-fill"></i></a>
                    <form action="{{ route('genres.destroy', $genre) }}" method="POST" style="display:inline;">
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
            {{ $genres->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
