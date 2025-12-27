<form action="{{ isset($author) ? route('authors.update', $author) : route('authors.store') }}" method="POST">
    @csrf
    @if(isset($author))
        @method('PUT')
    @endif

    <section class="input_fields">
        <div class="input_group">
            <label for="name">Author Name:</label>
            <input type="text" name="name" value="{{ old('name', $author->name ?? '') }}" required>
        </div>


    </section>

    <button type="submit">{{ isset($author) ? 'Update Author' : 'Add Author' }}</button>
</form>
