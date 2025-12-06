<form action="{{ isset($book) ? route('books.update', $book) : route('books.store') }}" method="POST">
    @csrf
    @if(isset($book))
        @method('PUT')
    @endif
    
    <section class="input_fields">
        <div class="input_group">
            <label for="title">Book Title:</label>
            <input type="text" name="title" value="{{ old('title', $book->title ?? '') }}" required>
        </div>

        <div class="input_group">
            <label for="author_id">Author:</label>
            <select name="author_id" required>
                <option value="" disabled {{ !isset($book) ? 'selected' : '' }}>Select Author</option>
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}"
                        {{ isset($book) && $book->author_id == $author->id ? 'selected' : '' }}>
                        {{ $author->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="input_group">
            <label for="genre_id">Genre:</label>
            <select name="genre_id" required>
                <option value="" disabled {{ !isset($book) ? 'selected' : '' }}>Select Genre</option>
                @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}"
                        {{ isset($book) && $book->genre_id == $genre->id ? 'selected' : '' }}>
                        {{ $genre->name }}
                    </option>
                @endforeach
            </select>
        </div>

    </section>

    <button type="submit">{{ isset($book) ? 'Update Book' : 'Add Book' }}</button>
</form>
