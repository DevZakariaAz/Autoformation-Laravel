@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto py-10">
        <h1 class="text-2xl font-bold">Add a New Book</h1>

        <form action="{{ route('admin.books.store') }}" method="POST" class="mt-6">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium">Title</label>
                <input 
                    type="text" 
                    name="title" 
                    id="title" 
                    class="mt-1 block w-full @error('title') border-red-500 @enderror" 
                    value="{{ old('title') }}" 
                    required
                >
                @error('title')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="author" class="block text-sm font-medium">Author</label>
                <input 
                    type="text" 
                    name="author" 
                    id="author" 
                    class="mt-1 block w-full @error('author') border-red-500 @enderror" 
                    value="{{ old('author') }}" 
                    required
                >
                @error('author')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="year" class="block text-sm font-medium">Year</label>
                <input 
                    type="number" 
                    name="year" 
                    id="year" 
                    class="mt-1 block w-full @error('year') border-red-500 @enderror" 
                    value="{{ old('year') }}" 
                    required
                >
                @error('year')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="isbn" class="block text-sm font-medium">ISBN</label>
                <input 
                    type="text" 
                    name="isbn" 
                    id="isbn" 
                    class="mt-1 block w-full @error('isbn') border-red-500 @enderror" 
                    value="{{ old('isbn') }}" 
                    required
                >
                @error('isbn')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-medium">Description</label>
                <textarea 
                    name="description" 
                    id="description" 
                    class="mt-1 block w-full @error('description') border-red-500 @enderror" 
                    required>{{ old('description') }}</textarea>
                @error('description')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Add Book</button>
        </form>
    </div>
@endsection
