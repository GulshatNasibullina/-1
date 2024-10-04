<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }}</title>
</head>
<body>
    <h1>{{ $product->name }}</h1>
    <p>Цена: {{ $product->price }}₽</p>

    <form action="{{ route('order.store') }}" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="{{ $product->id }}">
        <label for="quantity">Количество:</label>
        <input type="number" name="quantity" id="quantity" min="1" required>
        <button type="submit">Заказать</button>
    </form>
</body>
</html>