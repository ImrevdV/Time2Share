<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Time2Share</title>
</head>
<body>
    <nav class="navbar">
        <a href="/" class="logo-link">
            <img src="{{asset('images/logo.png')}}" alt="Logo" class="logo" />
        </a>
        <ul class="nav-links">
            @auth
            <li class="nav-item">
                <span class="welcome-text">Welcome {{auth()->user()->name}}</span>
            </li>
            <li class="nav-item">
                <a href="/listings/manage" class="nav-link"><i class="fa-solid fa-gear"></i> Manage Listings</a>
            </li>
            <li class="nav-item">
                <form class="logout-form" method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="logout-button">
                        <i class="fa-solid fa-door-closed"></i> Logout
                    </button>
                </form>
            </li>
            @else
            <li class="nav-item">
                <a href="/register" class="nav-link"><i class="fa-solid fa-user-plus"></i> Register</a>
            </li>
            <li class="nav-item">
                <a href="/login" class="nav-link"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
            </li>
            @endauth
        </ul>
    </nav>    
    <main>
        {{$slot}}
    </main>
    <a href="/listings/create" class="create"><i class="fa-solid fa-plus"></i>  Share your item!</a>
    <x-modal />
</body>
</html>