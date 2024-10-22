<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Регистрация</title> 
</head> 
<body> 
    @include('components.header') 

    <div class="container mt-5"> 
        <h2 class="text-center">Регистрация</h2> 
        <div class="card mx-auto" style="max-width: 400px;"> 
            <div class="card-body"> 
                <form method="POST" action="{{ route('register') }}"> 
                    @csrf 
                    <div class="form-group"> 
                        <label for="name">Имя</label> 
                        <input type="text" class="form-control" name="name" required> 
                    </div> 
                    <div class="form-group"> 
                        <label for="email">Email</label> 
                        <input type="email" class="form-control" name="email" required> 
                    </div> 
                    <div class="form-group"> 
                        <label for="password">Пароль</label> 
                        <input type="password" class="form-control" name="password" required> 
                    </div> 
                    <div class="form-group"> 
                        <label for="password_confirmation">Подтверждение пароля</label> 
                        <input type="password" class="form-control" name="password_confirmation" required> 
                    </div> 
                    <button type="submit" class="btn btn-primary btn-block">Зарегистрироваться</button> 
                </form> 
            </div> 
        </div> 
    </div> 
</body> 
</html>