@props([
    'books',
])

<section {{ $attributes->merge(['class' => 'mx-auto max-w-7xl px-6 py-12 lg:px-8 lg:py-16']) }}>
    <div class="flex flex-col gap-2">
        <h2 class="text-2xl font-semibold tracking-tight text-zinc-900 sm:text-3xl">Sample library</h2>
        <p class="max-w-[70ch] text-pretty text-zinc-600">
            Each title and category below is stored as a translatable phrase. Switch the language to see the
            same records rendered in another locale.
        </p>
    </div>

    <div class="mt-8 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @forelse ($books as $book)
            <article class="group flex flex-col overflow-hidden rounded-2xl border border-zinc-200 bg-white shadow-sm transition duration-200 hover:-translate-y-1 hover:shadow-lg">
                <div class="relative aspect-[4/3] overflow-hidden bg-linear-to-br from-brand-100 via-brand-50 to-accent-100">
                    <img
                        alt="{{ $book->title ?? 'Book cover' }}"
                        loading="lazy"
                        class="size-full object-cover object-center transition duration-300 group-hover:scale-105"
                        src="{{ $book->cover ?? 'https://picsum.photos/seed/book-'.$book->id.'/600/450' }}"
                    />
                    @if (! empty($book->cat->name))
                        <span class="absolute top-3 start-3 rounded-full bg-white/90 px-2.5 py-1 text-xs font-semibold text-brand-700 shadow-sm backdrop-blur">
                            {{ $book->cat->name }}
                        </span>
                    @endif
                </div>

                <div class="flex flex-1 flex-col gap-1 p-5">
                    <h3 class="text-lg font-semibold tracking-tight text-zinc-900">
                        {{ $book->title ?? 'Untitled' }}
                    </h3>
                    @php($desc = trim(strip_tags((string) $book->desc)))
                    @if ($desc !== '')
                        <p class="line-clamp-2 text-sm text-zinc-500">{{ \Illuminate\Support\Str::limit($desc, 120) }}</p>
                    @endif
                    <p class="mt-auto flex items-center gap-1.5 pt-3 text-sm text-zinc-400">
                        <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <rect x="3" y="4" width="18" height="17" rx="2" /><path d="M3 9h18M8 2v4m8-4v4" stroke-linecap="round" />
                        </svg>
                        <time>{{ $book->created_at?->format('M d, Y') }}</time>
                    </p>
                </div>
            </article>
        @empty
            <div class="col-span-full rounded-2xl border border-dashed border-zinc-300 bg-white p-12 text-center">
                <p class="text-zinc-500">No books yet. Add some from the admin panel to see them here.</p>
            </div>
        @endforelse
    </div>

    <div class="mt-10">
        {{ $books->links() }}
    </div>
</section>
