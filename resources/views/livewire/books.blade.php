<div class="container mx-auto px-5 py-10">
    @foreach($books as $book)
        <div class="-m-4 flex flex-wrap">
            <div class="w-full p-4 md:w-1/2 lg:w-1/4">
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
