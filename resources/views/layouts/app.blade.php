<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="/image/icon/logo_mini.png" type="image/x-icon">

    <link href="{{ asset('css/XXX.css') }}" rel="stylesheet">

    <title>Mythic Library</title>

</head>
<body class="antialiased">
    <div class="container mt-5">
        <img src="/image/icon/logo_mini.png" alt="logo">
        @yield('content')
    </div>
</body>
</html>
