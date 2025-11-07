<!DOCTYPE html>
<html lang="en" class="overflow-x-hidden scroll-smooth">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        @vite("resources/css/app.css")
        @vite("resources/js/app.js")
        <title>Microsite OBU</title>
    </head>
    <body class="overflow-x-hidden">
        <header>@include("section-header")</header>

        <main>
            @yield("content")
        </main>

        <footer>@include("section-footer")</footer>

        {{-- Tambahkan ini agar script halaman tampil --}}
        @stack("scripts")
    </body>
</html>
