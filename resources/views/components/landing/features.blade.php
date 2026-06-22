@php
    $features = [
        [
            'title' => 'Dedicated phrase tables',
            'desc' => 'Translations live in their own tables and models, keeping your main schema clean and easy to maintain.',
            'icon' => 'M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75',
        ],
        [
            'title' => 'Optimized & lazy-loaded',
            'desc' => 'Automatic eager and lazy loading with query optimization, so multilingual pages stay fast and avoid N+1.',
            'icon' => 'M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z',
        ],
        [
            'title' => 'AI Translations',
            'desc' => 'Translate phrases single-row or in bulk with AI, powered by the Laravel AI SDK — from the panel or in code.',
            'icon' => 'M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z',
        ],
        [
            'title' => 'WYSIWYG & relationships',
            'desc' => 'Translate rich-text editor fields and related models exactly like any other attribute.',
            'icon' => 'M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244',
        ],
        [
            'title' => 'Built-in language switcher',
            'desc' => 'A drop-in switcher for both the Filament panel and your frontend — with full LTR and RTL support.',
            'icon' => 'm10.5 21 5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 0 1 6-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 0 1-3.827-5.802',
        ],
        [
            'title' => 'Searchable & sortable',
            'desc' => 'Search and sort your records by their translated values through a simple query macro.',
            'icon' => 'M3 7.5 7.5 3m0 0L12 7.5M7.5 3v13.5m13.5 0L16.5 21m0 0L12 16.5m4.5 4.5V7.5',
        ],
    ];
@endphp

<section {{ $attributes->merge(['class' => 'mx-auto max-w-7xl px-6 py-12 lg:px-8 lg:py-16']) }}>
    <div>
        <p class="text-sm font-semibold text-brand-600">Why Translatable Pro</p>
        <h2 class="mt-2 max-w-[35ch] text-balance text-2xl font-semibold tracking-tight text-zinc-900 sm:text-3xl">
            Built for fast, structured translations
        </h2>
        <p class="mt-4 max-w-[60ch] text-pretty text-lg text-zinc-600">
            With a single Composer install, every field becomes a translatable phrase stored in an efficient,
            dedicated structure — purpose-built for advanced, high-performance multilingual apps.
        </p>
    </div>

    <dl class="mt-10 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ($features as $feature)
            <div class="rounded-2xl border border-zinc-200 bg-white p-6 shadow-sm transition duration-200 hover:-translate-y-1 hover:shadow-lg">
                <span class="flex size-10 items-center justify-center rounded-xl bg-brand-50 text-brand-600">
                    <svg class="size-5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true">
                        <path d="{{ $feature['icon'] }}" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
                <dt class="mt-4 text-base font-semibold text-zinc-900">{{ $feature['title'] }}</dt>
                <dd class="mt-1.5 text-sm text-zinc-500">{{ $feature['desc'] }}</dd>
            </div>
        @endforeach
    </dl>
</section>
