<div class="card col-md-4">
    <div class="card-body">
@php
    $name = $product['name'];
@endphp
        <h5 class="card-title">{{ $name }}</h5>
        <p class="card-text">Cost: {{ number_format($product['cost']) }} ₽</p>
        <p class="card-text">Amount: {{ $product['amount'] }}</p>
        $copyright
    </div>
</div>