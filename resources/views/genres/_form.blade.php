<form action="{{ isset($genre) ? route('genres.update', $genre) : route('genres.store') }}" method="POST">
    @csrf
    @if(isset($genre))
        @method('PUT')
    @endif

    <section class="input_fields">
        <div class="input_group">
            <label for="name">Genre Name:</label>
            <input class="main-input-field" type="text" name="name" value="{{ old('name', $genre->name ?? '') }}" required>
        </div>


    </section>

    <button type="submit">{{ isset($genre) ? 'Update Genre' : 'Add Genre' }}</button>
</form>
