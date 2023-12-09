<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NBA</title>
    <link rel="stylesheet" href="{{ asset('style/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
</head>
<body>
    <header class="main">
        <nav>
            <a href="{{ route("index") }}">Apuestas</a>
            <a href="{{ route("players") }}">Jugadores</a>
            <a href="{{ route("game.create") }}">Resultados</a>
            <a href="{{ route("line.create") }}">Lineas</a>
        </nav>
    </header>
    @yield('content')
    @yield('js')
    <script src="{{ asset("js/script.js") }}"></script>
</body>
</html>