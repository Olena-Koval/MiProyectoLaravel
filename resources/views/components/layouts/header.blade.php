<header>
    <h1>Mi Proyecto Laravel</h1>
    @auth
        <p>Bienvenido, {{ Auth::user()->name }} | <a href="{{ route('logout') }}">Logout</a></p>
    @else
        <a href="{{ route('login') }}">Login</a> | <a href="{{ route('register') }}">Register</a>
    @endauth
</header>
