<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">My Movies</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('now_in_room') ? 'active' : '' }}"
                            href="{{ route('now_in_room') }}">In Room</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('about') ? 'active' : '' }}" href="{{ route('about') }}">About
                            US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('contacts') ? 'active' : '' }}"
                            href="{{ route('contacts') }}">Contacts</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
