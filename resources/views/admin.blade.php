<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
        <thead>
            <tr>
                <th>Название товара</th>
                <th>Количество</th>
                <th>Дата создания</th>
                <th>Email пользователя</th>
                <th>Статус</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->product->name }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>{{ $order->created_at }}</td>
                    <td>{{ $order->user->email }}</td>
                    <td>{{ $order->status }}</td>
                    <td>
                        @if ($order->status === 'new')
                            <form action="{{ route('order.approve', $order->id) }}" method="POST">
                                @csrf
                                <button type="submit">Одобрить</button>
                            </form>
                        @elseif ($order->status === 'approved')
                            <form action="{{ route('order.deliver', $order->id) }}" method="POST">
                                @csrf
                                <button type="submit">Доставить</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>