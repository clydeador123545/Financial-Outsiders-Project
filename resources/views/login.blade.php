<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<body>
    <form action="/login" method="POST">
        @csrf
        <div>
            <label for="username">Username</label>
            <input type="text" name="username">
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>

        <button type="submit">Login</button>
    </form>
</body>
</html>