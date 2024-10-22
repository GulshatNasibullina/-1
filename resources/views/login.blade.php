<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Вход</title> 
</head> 
<body> 
    @include('components.header') 

    <div class="container mt-5"> 
        <h2 class="text-center">Вход в систему</h2> 
        <div class="card mx-auto" style="max-width: 400px;"> 
            <div class="card-body"> 
                <form method="POST" action="{{ route('login') }}"> 
                    @csrf 
                    <div class="form-group"> 
                        <label for="email">Email</label> 
                        <input type="email" class="form-control" name="email" required> 
                        @error('email') 
                            <span class="text-danger">{{ $message }}</span> 
                        @enderror 
                    </div> 
                    <div class="form-group"> 
                        <label for="password">Пароль</label> 
                        <input type="password" class="form-control" name="password" required> 
                        @error('password') 
                            <span class="text-danger">{{ $message }}</span> 
                        @enderror 
                    </div> 
                    <button type="submit" class="btn btn-primary btn-block">Войти</button> 
                </form> 
            </div> 
        </div> 
    </div> 
</body> 
</html>