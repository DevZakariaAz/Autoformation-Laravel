<x-guest-layout>
    <div class="max-w-7xl mx-auto py-10">
        <h1 class="text-3xl font-bold mb-8">Library Books</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            @foreach ($books as $book)
                <div class="bg-white border rounded-lg shadow-md overflow-hidden">
                    <!-- Dynamically generated image based on the book title -->
                    <img src="https://fakeimg.pl/250x250/?text={{ urlencode(explode(' ', $book->title)[0] . ' ' . explode(' ', $book->title)[count(explode(' ', $book->title)) - 1]) }}&font=arial" class="card-img-top object-cover w-full h-56" alt="Generated Image">

                    <div class="p-4">
                        <h2 class="text-xl font-semibold text-gray-800">{{ $book->title }}</h2>
                        <p class="text-sm text-gray-500">{{ $book->author }}</p>
                        <p class="mt-2 text-gray-700">{{ Str::limit($book->description, 70) }}</p>
                        <div class="mt-4">
                            <a href="" class="inline-block bg-blue-500 text-white text-sm px-4 py-2 rounded hover:bg-blue-600">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-guest-layout>
