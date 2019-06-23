<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex,follow" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body>
    <div style="text-align:center">
        <a class="navigation" href="characters"> postacie</a>
        <a class="navigation" href="fillTable"> wypelnij tabele</a>
        <a class="navigation" href="characterDetail">szukaj postaci</a>
    </div>
    @yield('content')
</body>

</html>