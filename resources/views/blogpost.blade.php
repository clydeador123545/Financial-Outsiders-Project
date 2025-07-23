@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/blogpost.css') }}">

    <div class="main-content">
        <div class="blog">
        <h1>{{ $blogpost->title }}</h1>
        <div class="author-details">
            <p>Author: {{ $blogpost->author->first_name }} {{ $blogpost->author->last_name }}</p>
        </div>
        <p>{{ $blogpost->content }}</p>
        </div>
        
        <div class="suggested">
            <h3>Related</h3>
            @foreach ($otherPosts as $post)
                    <a href="/blogpost/{{ $post->blogpost_id }}">
                        {{ $post->title }}
                    </a>
            @endforeach         
        </div>
        
    </div>
    
@endsection
