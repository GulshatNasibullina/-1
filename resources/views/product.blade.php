<!DOCTYPE html>
<html>
<head>
    <title>Товары</title>
</head>
<body>
    <h1>Товары</h1>
        @foreach ($products as $product)
                <strong>{{ $product->name }}</strong><br>
                Цена: {{ $product->price }} ₽<br>
        @endforeach
</body>
</html>