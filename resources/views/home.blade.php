@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">

    <div class="home-content">

        <div class="left-content">
            <div class="banner">
                <img class="bimg" src="https://images.unsplash.com/photo-1579621970795-87facc2f976d?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
            </div>
            <div class="recommended">
                <h2 class="atitle">Recommended For You</h2>
                <div class="links">
                    @foreach ($recommended as $reco)
                    <div class="box">
                        <a href="/blogpost/{{ $reco->blogpost_id }}">{{ $reco->title }}</a>
                    </div>       
                    @endforeach
                </div>
            </div>

            <h2 class="atitle">LATEST Today</h2>
            <div class="latest">
                @foreach ($randomPosts as $post)
                    <div class="latest-box">
                        <img src="{{ $post->image_path }}"  width="300">
                        <a href="/blogpost/{{ $post->blogpost_id }}"><h2>{{$post->title}}</h2></a>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="right-content">
            <h2>Exclusive News</h2>
            @foreach ($randomPosts as $post)
                <a href="/blogpost/{{ $post->blogpost_id }}">
                {{ $post->title }}
                </a>
            @endforeach
        </div>
    </div>
    

@endsection
