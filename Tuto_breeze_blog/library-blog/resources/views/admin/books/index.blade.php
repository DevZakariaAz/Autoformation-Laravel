@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto py-10">
        <h1 class="text-2xl font-bold mb-6">Admin: Manage Books</h1>

        <a href="{{ route('admin.books.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add New Book</a>

        <div class="mt-6">
            <table class="min-w-full bg-white border-collapse border border-gray-300">
                <thead>
                    <tr>
                        <th class="border px-4 py-2">ID</th>
                        <th class="border px-4 py-2">Title</th>
                        <th class="border px-4 py-2">Author</th>
                        <th class="border px-4 py-2">Year</th>
                        <th class="border px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td class="border px-4 py-2">{{ $book->id }}</td>
                            <td class="border px-4 py-2">{{ $book->title }}</td>
                            <td class="border px-4 py-2">{{ $book->author }}</td>
                            <td class="border px-4 py-2">{{ $book->published_date->year ?? 'N/A' }}</td>
                            <td class="border px-4 py-2 flex justify-center space-x-2">
                                <a href=""
                                   class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>

                                <form action="{{ route('admin.books.destroy', $book->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
