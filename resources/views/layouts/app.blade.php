<!DOCTYPE html>
<html>

<head>
    <title>App Blogs</title>
</head>

<body>
    @auth
    <p>Hola, {{ auth()->user()->name }} | <a href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión</a></p>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
        @csrf
    </form>
    @endauth

    <hr>

    @yield('content')
</body>

</html>