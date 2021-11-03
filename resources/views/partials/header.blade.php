<nav class="navbar">
    <img class="logo" src="/storage/images/logo.png">
    <ul>
        <li><a class="{{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Bilietų paieška</a></li>
        @if (Route::has('login'))
            @auth
                <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
            @else
                <li><a class="{{ request()->is('login') ? 'active' : '' }}" href="{{ route('login') }}">Prisijungimas</a></li>

                @if (Route::has('register'))
                    <li><a class="{{ request()->is('register') ? 'active' : '' }}" href="{{ route('register') }}">Registracija</a></li>
                @endif
            @endauth
        @endif
        <li><a class="{{ request()->is('pagalba') ? 'active' : '' }}" href="{{ route('support') }}">Pagalba</a></li>
    </ul>
</nav>
