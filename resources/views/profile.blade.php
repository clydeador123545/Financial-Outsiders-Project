<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
</head>
<body>
    <h1>{{ $user->first_name }} {{ $user->last_name }}</h1>
    <p>Email: {{ $user->email }}</p>
    <p>Username: {{ $user->username }}</p>
    <p>Role: {{ $user->role }}</p>
    <img src="{{ $user->profile_picture }}" alt="Profile Photo" width="100">
</body>
</html>
