@extends('layouts.app')

@section('content')
    <h1>Registration</h1>
    <form action="/register" method="POST">
        @csrf
        <div>
            <label for="firstName">First Name</label>
            <input type="text" name="firstName" />
        </div>

        <div>
            <label for="lastName">Last Name</label>
            <input type="text" name="lastName">
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" name="email">
        </div>

        <div>
            <label for="username">Username</label>
            <input type="text" name="username" />
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>

        <button type="submit">SUBMIT</button>
    </form>
    <a href="/login">Already Have an Account?</a>
@endsection