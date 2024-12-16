<!DOCTYPE html>
<html class="h-full" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Viva La Pizzeria</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Styles / Scripts -->
            @vite(['resources/css/app.css', 'resources/js/app.js'])
            @livewireStyles

    </head>
    <body class="h-full flex flex-col">
        <x-navigation>
        </x-navigation>

        <main class="inline-flex flex-grow m-8 h-max relative">
            @yield('content')
        </main>

         <x-footer>
        </x-footer>
        @livewireScripts
    </body>