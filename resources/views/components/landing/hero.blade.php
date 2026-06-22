@props([
    'currentName',
    'isRtl' => false,
])

<section {{ $attributes->merge(['class' => 'relative overflow-hidden']) }}>
    <div class="bg-dotted pointer-events-none absolute inset-0 [mask-image:radial-gradient(ellipse_at_top,black,transparent_70%)] opacity-60"></div>
    <div class="pointer-events-none absolute -top-24 start-1/2 -z-10 size-[36rem] -translate-x-1/2 rounded-full bg-linear-to-br from-brand-200/50 via-brand-100/40 to-accent-200/40 blur-3xl"></div>

    <div class="relative mx-auto max-w-7xl px-6 pt-16 pb-12 text-center lg:px-8 lg:pt-24">
        <span class="inline-flex items-center gap-2 rounded-full border border-brand-200 bg-white/70 px-3.5 py-1.5 text-sm font-medium text-brand-700 shadow-sm">
            <span class="size-2 rounded-full bg-brand-500"></span>
            Lara Zeus &middot; Filament plugin
        </span>

        <h1 class="mx-auto mt-6 max-w-[18ch] text-balance text-4xl font-semibold tracking-tight text-zinc-900 sm:text-5xl lg:text-6xl">
            Translate your Eloquent models in
            <span class="bg-linear-to-r from-brand-600 via-brand-500 to-accent-500 bg-clip-text text-transparent">any language</span>
        </h1>

        <p class="mx-auto mt-6 max-w-[60ch] text-pretty text-lg text-zinc-600">
            A live demo of <span class="font-semibold text-zinc-800">Translatable Pro</span> — store every field as a
            translatable phrase, switch locales instantly, and render flawlessly in both
            <span class="font-semibold text-zinc-800">LTR</span> and <span class="font-semibold text-zinc-800">RTL</span> directions.
        </p>

        <div class="mt-8 flex flex-col items-center justify-center gap-3 sm:flex-row">
            <a href="https://larazeus.com/translatable-pro" target="_blank" rel="noopener"
               class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-brand-600 px-5 py-3 text-sm font-semibold text-white shadow-sm shadow-brand-600/30 transition hover:bg-brand-700 sm:w-auto">
                Get Translatable Pro
                <svg class="size-4 rtl-flip" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h8.69L9.22 6.03a.75.75 0 0 1 1.06-1.06l4.5 4.5a.75.75 0 0 1 0 1.06l-4.5 4.5a.75.75 0 1 1-1.06-1.06l3.22-3.22H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd" />
                </svg>
            </a>
            <a href="https://github.com/lara-zeus/translatable-pro-demo" target="_blank" rel="noopener"
               class="inline-flex w-full items-center justify-center gap-2 px-5 py-3 text-sm font-semibold text-zinc-700 transition hover:text-brand-700 sm:w-auto">
                <svg class="size-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path d="M12 .5C5.7.5.5 5.7.5 12c0 5.1 3.3 9.4 7.9 10.9.6.1.8-.2.8-.5v-1.7c-3.2.7-3.9-1.5-3.9-1.5-.5-1.3-1.3-1.7-1.3-1.7-1.1-.7.1-.7.1-.7 1.2.1 1.8 1.2 1.8 1.2 1 1.8 2.7 1.3 3.4 1 .1-.8.4-1.3.7-1.6-2.6-.3-5.3-1.3-5.3-5.7 0-1.3.4-2.3 1.2-3.1-.1-.3-.5-1.5.1-3.1 0 0 1-.3 3.3 1.2a11.5 11.5 0 0 1 6 0C17.3 4.7 18.3 5 18.3 5c.6 1.6.2 2.8.1 3.1.8.8 1.2 1.8 1.2 3.1 0 4.4-2.7 5.4-5.3 5.7.4.4.8 1.1.8 2.2v3.3c0 .3.2.6.8.5A11.5 11.5 0 0 0 23.5 12C23.5 5.7 18.3.5 12 .5Z" />
                </svg>
                View source on GitHub
            </a>
        </div>

        {{-- Locale callout --}}
        <div class="mx-auto mt-10 flex max-w-xl flex-col items-center gap-3 rounded-2xl border border-zinc-200 bg-white/70 p-4 text-sm shadow-sm sm:flex-row sm:gap-4 sm:text-start">
            <span class="flex size-10 shrink-0 items-center justify-center rounded-xl bg-brand-50 text-brand-600">
                <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                    <path d="m5 8 6 6M4 14l6-6 2-3M2 5h12M7 2h1m13 20-5-10-5 10m1.6-3h6.8" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </span>
            <p class="text-zinc-600">
                You're viewing in <span class="font-semibold text-zinc-900">{{ $currentName }}</span>
                <span class="font-medium text-brand-600">({{ $isRtl ? 'RTL' : 'LTR' }})</span>.
                Use the language switcher in the top bar to see the whole page adapt.
            </p>
        </div>

        {{-- Mini feature strip --}}
        <dl class="mx-auto mt-12 grid max-w-3xl grid-cols-1 gap-4 sm:grid-cols-3">
            @foreach ([
                ['title' => 'Phrase-based storage', 'desc' => 'Every field saved as a translatable phrase.'],
                ['title' => 'LTR &amp; RTL ready', 'desc' => 'Layouts flip direction automatically.'],
                ['title' => 'No N+1 queries', 'desc' => 'Fully eager-loaded relations.'],
            ] as $feature)
                <div class="rounded-2xl border border-zinc-200 bg-white p-4 text-start shadow-sm">
                    <dt class="text-sm font-semibold text-zinc-900">{!! $feature['title'] !!}</dt>
                    <dd class="mt-1 text-sm text-zinc-500">{{ $feature['desc'] }}</dd>
                </div>
            @endforeach
        </dl>
    </div>
</section>
