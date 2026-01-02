<form action="{{ isset($book) ? route('books.update', $book) : route('books.store') }}" method="POST">
    @csrf
    @if(isset($book))
        @method('PUT')
    @endif
    
    <section class="input_fields">
        <div class="input_group">
            <label for="title">Book Title:</label>
            <input class="main-input-field" type="text" name="title" value="{{ old('title', $book->title ?? '') }}" required>
        </div>

        <div class="input_group">
            <label for="author_id">Author:</label>
            <select class="main-input-field" name="author_id" required>
                <option value="" disabled {{ old('author_id', $book->author_id ?? null) === null ? 'selected' : '' }}>Select Author</option>
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}"
                        {{ old('author_id', $book->author_id ?? null) == $author->id ? 'selected' : '' }}>
                        {{ $author->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="input_group">
            <label for="genre_id">Genre:</label>
            <select class="main-input-field" name="genre_id" required>
                <option value="" disabled {{ old('genre_id', $book->genre_id ?? null) === null ? 'selected' : '' }}>Select Genre</option>
                @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}"
                        {{ old('genre_id', $book->genre_id ?? null) == $genre->id ? 'selected' : '' }}>
                        {{ $genre->name }}
                    </option>
                @endforeach
            </select>
        </div>

    </section>

    <button type="submit">{{ isset($book) ? 'Update Book' : 'Add Book' }}</button>
</form>
