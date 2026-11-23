<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Каталог ЦСКА')</title>
    <link rel="stylesheet" href="{{ asset('catalog.css') }}">
</head>
<body>
    @include('layouts.header')

    <main class="page container">
        @yield('content')
    </main>

    @include('layouts.footer')
</body>
</html>