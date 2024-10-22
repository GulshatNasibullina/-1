<nav class="navbar navbar-expand-lg navbar-light bg-light"> 
    <div class="container"> 
        <a class="navbar-brand" href="{{ route('index') }}">Продукты</a> 
        
        <div class="collapse navbar-collapse" id="navbarNav"> 
            <ul class="navbar-nav ml-auto"> 
                @if(Auth::check()) 
                    <li class="nav-item"> 
                        <a class="nav-link" href="{{ route('my-orders') }}"> Мои заказы </a> 
                    </li> 
                    <li class="nav-item"> 
                        <a class="nav-link" href="{{ route('logout') }}" 
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Выйти</a> 
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> 
                            @csrf 
                        </form> 
                    </li> 
                @else 
                    <li class="nav-item"> 
                        <a class="nav-link" href="{{ route('login') }}">Авторизация</a> 
                    </li> 
                    <li class="nav-item"> 
                        <a class="nav-link" href="{{ route('register') }}">Регистрация</a> 
                    </li> 
                @endif 
            </ul> 
        </div> 
    </div> 
</nav>