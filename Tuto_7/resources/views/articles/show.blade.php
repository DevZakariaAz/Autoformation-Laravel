@extends('layouts.app')

@section('content')
    <h1>{{$article['title']}}</h1>
    <p>{{$article['content']}}</p>
    <button>    <a href="/articles/{{$article['id']}}/edit">Modifier</a></button>
    <form action="/articles/{{$article['id']}}" method="POST" style="display:inline;">
        @csrf v v
        @method('DELETE') 
        <button type="submit">Supprimer</button>
    </form>
    <div>
            <a href="/articles/">Retour à la liste</a>
    </div>
@endsection
