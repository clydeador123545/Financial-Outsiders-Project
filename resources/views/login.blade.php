@extends('layouts.app')

@section('content')
    <h1>Login</h1>
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
    <a href="/register">Don't Have an Account?</a>
@endsection