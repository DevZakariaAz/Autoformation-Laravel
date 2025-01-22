<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>liste des Produits</h1>
    @foreach ($products as $product)
        <p> {{ $product->name }} </p>
        @if ($product->trashed())
        <span>Deleted on {{ $product->deleted_at }}</span>
        <form action="{{ route('products.restore', $product->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('POST') <!-- Explicitly set POST method -->
            <button type="submit">Restore</button>
        </form>
        @else

        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
        @endif
    </div>
    @endforeach
</body>
</html>