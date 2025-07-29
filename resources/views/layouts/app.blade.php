<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    @vite('resources/css/app.css')
</head>
<body>
    <header class="top-bar">
        <div class="logo">
            <i class='fa-solid fa-sack-dollar sack-logo'></i>
            <a id="finout" href="/"><h1>FinOut</h1></a>
        </div>
        <div class="account-links">
            @auth
                <form action="/logout" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" style="background:none; border:none; color:white; cursor:pointer;">Log Out</button>
                </form>

                 <a class="toplink" href="/profile">Account</a>
            @else
                <a class="toplink" href="/login">Log In</a>
            @endauth
        </div>
    </header>
    <main class="px-5">
        @yield('content')
    </main>
</body>
</html>