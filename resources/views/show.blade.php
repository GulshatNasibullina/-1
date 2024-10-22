<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заказ товара</title>
</head>
<body>

    <div class="container mt-5">
        <h2 class="text-center mb-4">{{ $product->name }}</h2>

        <form action="{{ route('order.store') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">

            <div class="form-group">
                <label for="quantity">Количество:</label>
                <input type="number" id="quantity" name="quantity" class="form-control" min="1" required>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Заказать</button>

            @if (session("success"))
                <div class="alert alert-success mt-3" role="alert">
                    {{ session("success") }}
                </div>
            @endif
        </form>
    </div>
</body>
</html>
