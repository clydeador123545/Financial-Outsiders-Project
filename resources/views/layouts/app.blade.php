<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Display&display=swap" rel="stylesheet">
</head>

<body>
    <header class="top-bar">
        <div class="logo" style="display: flex; align-items: center; height: 100%;">
            <img src="{{ asset('images/finout_logo.png') }}" alt="FinOut Logo"
                style="max-height: 50px; height: auto; width: auto; margin-left: 10px;">
            <a id="finout" href="/" style="text-decoration: none; color: white;">
                <h1 style="font-weight: normal; margin: 0; font-size: 50px;">FinOut</h1>
            </a>
        </div>
        <div class="account-links">
            @auth
                <form action="/logout" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit"
                        style="background:none; border:none; color:white; cursor:pointer; font-family: 'Libre Caslon Display', serif; font-size: 40px;">Log
                        Out</button>
                </form>

                <a class="toplink" style="font-size: 40px;" href="/profile">Account</a>
            @else
                <a class="toplink" style="font-size: 40px;" href="/login">Log In</a>
            @endauth
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>

</html>