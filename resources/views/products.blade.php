<!DOCTYPE html>
<html>
<head>
    <title>Товары</title>
</head>
<body>
    <h1>Товары</h1>
    @foreach ($products as $product)
        <div id="product-{{ $product->id }}">
            <a href="{{ route('show', $product->id) }}">
                <strong>{{ $product->name }}</strong>
            </a><br>
            Цена: {{ $product->price }} ₽<br>
        </div>
    @endforeach
</body>
</html>