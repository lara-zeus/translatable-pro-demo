@props([
    'queries' => [],
])

@php
    $queryCount = count($queries);
    $totalTime = round(collect($queries)->sum(fn ($q) => (float) $q['time']), 2);
@endphp

<section {{ $attributes->merge(['class' => 'mx-auto max-w-7xl px-6 pb-16 lg:px-8']) }}>
    <details class="details-smooth group overflow-hidden rounded-2xl border border-zinc-200 bg-white shadow-sm" open>
        <summary class="flex cursor-pointer list-none items-center justify-between gap-4 px-5 py-4 hover:bg-zinc-50">
            <div class="flex items-center gap-3">
                <span class="flex size-9 items-center justify-center rounded-xl bg-zinc-900 text-white">
                    <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                        <ellipse cx="12" cy="5" rx="8" ry="3" /><path d="M4 5v6c0 1.7 3.6 3 8 3s8-1.3 8-3V5m-16 6v6c0 1.7 3.6 3 8 3s8-1.3 8-3v-6" stroke-linecap="round" />
                    </svg>
                </span>
                <div class="flex flex-col">
                    <h2 class="text-base font-semibold tracking-tight text-zinc-900">Behind the scenes</h2>
                    <p class="text-sm text-zinc-500">The exact database queries this page ran.</p>
                </div>
            </div>
            <div class="flex items-center gap-2">
                <span class="hidden rounded-full bg-brand-50 px-2.5 py-1 text-xs font-semibold text-brand-700 sm:inline-flex tabular-nums">{{ $queryCount }} queries</span>
                <span class="hidden rounded-full bg-accent-50 px-2.5 py-1 text-xs font-semibold text-accent-700 sm:inline-flex tabular-nums">{{ $totalTime }} ms</span>
                <svg class="size-5 text-zinc-400 transition-transform duration-300 ease-out group-open:rotate-180" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 0 1 1.06.02L10 11.06l3.71-3.83a.75.75 0 1 1 1.08 1.04l-4.25 4.39a.75.75 0 0 1-1.08 0L5.21 8.27a.75.75 0 0 1 .02-1.06Z" clip-rule="evenodd" />
                </svg>
            </div>
        </summary>

        <div class="grid grid-cols-1 gap-3 border-t border-zinc-200 p-5 md:grid-cols-2">
            @foreach ($queries as $query)
                <div class="rounded-xl border border-zinc-200 bg-zinc-50 p-4">
                    <div class="mb-2 flex items-center justify-between gap-2">
                        <span class="text-xs font-semibold uppercase tracking-wide text-zinc-400">Query</span>
                        <span class="rounded-full bg-white px-2 py-0.5 text-xs font-medium text-zinc-500 shadow-sm tabular-nums">{{ $query['time'] }} ms</span>
                    </div>
                    <pre class="overflow-x-auto text-start text-sm text-zinc-700" dir="ltr"><code>{{ $query['query'] }}</code></pre>
                </div>
            @endforeach
        </div>
    </details>
</section>
