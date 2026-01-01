<nav class="navbar">
    <div class="nav-container">
        <div class="logo">
            <a href="" class="logo-text">LetsFutsal</a>
        </div>
        <ul class="menu">
            <li>
                <a href="{{ route('home.index') }}" class="{{ Route::is('home.index') ? 'active' : '' }}">Home</a>
            </li>
            <li><a href="#">Futsals</a></li>
        </ul>


        <div class="nav-right">
            @auth
                <a href="{{ route('logout') }}">Logout</a>
            @endauth
            @guest
                <a href="{{ route('login') }}" class="{{ Route::is('login.create') ? 'active' : '' }}">Login</a>
                <a href="{{ route('register.create') }}" class="{{ Route::is('register.create') ? 'active' : '' }}">Sign
                    Up</a>
            @endguest
        </div>
    </div>
</nav>
