<div class="container mx-auto px-5 py-10">

    <h5 class="mb-4">Queries Details</h5>
    <div class="prose grid grid-cols-2 gap-3 mb-20">
        @foreach($queries as $query)
            <div class="bg-sky-100 rounded-2xl shadow overflow-scroll py-3 px-4 space-y-2">
                <p class="font-semibold">Query: <span class="text-sm">({{ $query['time'] }} ms)</span></p>
                <pre><code>{{ $query['query'] }}</code></pre>
            </div>
        @endforeach
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-2">
        @foreach($books as $book)
            <div class="w-full -m-4 flex flex-wrap">
                <div class="w-full p-4">
                    <a class="block aspect-video">
                        <img alt="cover"
                             class="block h-full w-full object-cover object-center rounded-lg shadow-lg"
                             src="{{ $book->cover ?? 'https://picsum.photos/420/260?random=1' }}" />
                    </a>
                    <div class="mt-4">
                        <h3 class="title-font mb-1 text-xs tracking-widest text-gray-500">
                            {{ $book->cat->name ?? '' }}
                        </h3>
                        <h2 class="title-font text-lg font-medium text-gray-900">
                            {{ $book->title ?? '' }}
                        </h2>
                        <p class="mt-1">{{ $book->created_at ?? '' }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="my-10">
        {{ $books->links() }}
    </div>

</div>
