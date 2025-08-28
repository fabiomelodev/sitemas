<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sitemas</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?ver=1.1">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png?ver=1.1">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png?ver=1.1">
        <link rel="manifest" href="/site.webmanifest?ver=1.1">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
        <link rel="canonical" href="{{  url()->current() }}" />
        @livewireStyles
        @vite('resources/css/app.css')
    </head>
    <body class="overflow-x-hidden">
        <style>
            [x-cloak] {
                display: none;
            }
        </style>

        <x-layout.header />
            <main>
                {{ $slot }}
            </main>
        <x-layout.footer />

        @livewireScripts
        @vite('resources/js/app.js')
    </body>
</html>
