<aside class="sidebar">

    <div class="menu-item {{ request()->routeIs('books.*') ? 'active' : '' }}">
        <a href="{{ route('books.index') }}" class="menu-header">
            <i class="bi bi-chevron-{{ request()->routeIs('books.*') ? 'down' : 'right' }}"></i> Books
        </a>
        <div class="menu-content">
            <a href="{{ route('books.create') }}" class="add-btn">+ Book</a>
        </div>
    </div>

    <div class="menu-item {{ request()->routeIs('authors.*') ? 'active' : '' }}">
        <a href="{{ route('authors.index') }}" class="menu-header">
            <i class="bi bi-chevron-{{ request()->routeIs('authors.*') ? 'down' : 'right' }}"></i> Authors
        </a>
        <div class="menu-content">
            <a href="{{ route('authors.create') }}" class="add-btn">+ Author</a>
        </div>
    </div>

    <div class="menu-item {{ request()->routeIs('genres.*') ? 'active' : '' }}">
        <a href="{{ route('genres.index') }}" class="menu-header">
            <i class="bi bi-chevron-{{ request()->routeIs('genres.*') ? 'down' : 'right' }}"></i> Genres
        </a>
        <div class="menu-content">
            <a href="{{ route('genres.create') }}" class="add-btn">+ Genre</a>
        </div>
    </div>
    
</aside>
