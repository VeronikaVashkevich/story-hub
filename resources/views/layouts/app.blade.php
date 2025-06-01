<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') - {{ config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="container mx-auto">
    @include('components.header')
    <div class="mt-4 flex">
        @include('components.left_menu.menu')
        <div class="ml-3">
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>
