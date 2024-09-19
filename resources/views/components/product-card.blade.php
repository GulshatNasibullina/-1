<div class="card col-md-4">
    <div class="card-body">
        <h5 class="card-title">{{ $product['name'] }}</h5>
        <p class="card-text">Cost: {{ number_format($product['cost']) }} ₽</p>
        <p class="card-text">Amount: {{ $product['amount'] }}</p>
    </div>
</div>