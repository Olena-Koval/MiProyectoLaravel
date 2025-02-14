<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-layouts.header />
    <x-layouts.nav />
    <main>
        @yield('content')
    </main>
    <x-layouts.footer />
</body>
</html>
