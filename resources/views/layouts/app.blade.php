@php
    $rtlLocales = ['ar', 'he', 'fa', 'ur', 'ps'];
    $isRtl = in_array(app()->getLocale(), $rtlLocales, true);
@endphp
<!DOCTYPE html>
<html
    dir="{{ $isRtl ? 'rtl' : 'ltr' }}"
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    class="antialiased scroll-smooth"
>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Translatable Pro Demo' }}</title>
        <meta name="description" content="A live demo of Lara Zeus Translatable Pro — translate your Eloquent models into any language and direction (LTR & RTL).">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @filamentScripts
        @filamentStyles
    </head>

    <body class="min-h-dvh bg-zinc-50 font-sans text-zinc-700 selection:bg-brand-200/70 selection:text-brand-900">

        <div class="isolate flex min-h-dvh flex-col">
            @include('layouts.nav')

            <main class="relative flex-1">
                {{ $slot }}
            </main>

            <footer class="border-t border-zinc-200/80 bg-white">
                <div class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-4 px-6 py-8 text-sm sm:flex-row lg:px-8">
                    <p class="text-zinc-500">
                        Built with Lara Zeus Translatable Pro &middot; supports LTR &amp; RTL out of the box.
                    </p>
                    <p class="flex items-center gap-1.5 text-zinc-500">
                        <span>Created by</span>
                        <a href="https://larazeus.com" target="_blank" rel="noopener" class="font-semibold text-brand-700 hover:text-brand-600">
                            @zeus
                        </a>
                        <span>&copy; {{ date('Y') }}</span>
                    </p>
                </div>
            </footer>
        </div>

        <script defer src="https://run.larazeus.com/init.js" data-website-id="f6ce3271-8bf4-4b41-bea5-07d10f9ac5c9"></script>

    </body>
</html>
