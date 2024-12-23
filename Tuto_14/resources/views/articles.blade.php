<!DOCTYPE html>
<html>
<head>
    <title>Articles and Tags</title>
</head>
<body>
    <h1>Articles and their Tags</h1>
    <ul>
        @foreach ($articles as $article)
            <li>
                <strong>{{ $article->title }}</strong>:
                {{ implode(', ', $article->tags->pluck('name')->toArray()) }}
            </li>
        @endforeach
    </ul>
</body>
</html>
