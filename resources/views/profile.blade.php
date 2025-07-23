@extends('layouts.app')

@section('content')
    <h1>{{ $user->first_name }} {{ $user->last_name }}</h1>
    <p>Email: {{ $user->email }}</p>
    <p>Username: {{ $user->username }}</p>
    <p>Role: {{ $user->role }}</p>
    <img src="{{ $user->profile_picture}}" 
          width="100">
@endsection
