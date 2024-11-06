<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Мои заказы</title> 
</head> 
<body> 
    @include('components.header') 
 
    <div class="container mt-5"> 
        <h1 class="text-center mb-4">Мои заказы</h1> 
 
        @foreach ($orders as $order) 
            <div class="card mb-3"> 
                <div class="card-body"> 
                    <h2 class="card-title">Заказ: #{{ $order->id }}</h2> 
                    <p class="card-text">Сумма: <strong>{{ $order->total_price }} ₽</strong></p> 
                    <p class="card-text">Количество: <strong>{{ $order->quantity }}</strong></p> 
                </div> 
            </div> 
        @endforeach 
 
        @if ($orders->isEmpty()) 
            <div class="alert alert-info" role="alert"> 
                У вас нет заказов. 
            </div> 
        @endif 
    </div>  
</body> 
</html>