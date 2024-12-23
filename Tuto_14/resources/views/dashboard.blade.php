@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Welcome, {{ $user->name }}!</h1>
        <p>Your account was created on: {{ $user->created_at->format('d-m-Y') }}</p>

        <h3>Your Articles:</h3>
        <ul>
            @foreach($articles as $article)
                <li>{{ $article->title }}</li> <!-- Assuming 'title' is a column in your articles table -->
            @endforeach
        </ul>
    </div>
@endsection
