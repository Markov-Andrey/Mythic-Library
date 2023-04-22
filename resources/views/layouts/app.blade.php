<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="/image/icon/logo_mini.png" type="image/x-icon">

        @vite('resources/css/app.css')
        @livewireStyles

        <title>Mythic Library</title>

    </head>
    <body class="antialiased">

        <div class="container mt-5">
            @yield('content')
        </div>

        @livewireScripts
    </body>
</html>
