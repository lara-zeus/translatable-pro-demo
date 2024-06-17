<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="bg-sky-50 max-w-6xl mx-auto">
            <x-layouts.nav/>

            <section class="text-sky-700">
                {{ $slot }}
            </section>

            <footer class="text-center py-4">
                Create By &copy;
                <a href="https://larazeus.com" target="_blank">
                    @zeus
                </a>
            </footer>
        </div>
    </body>
</html>
