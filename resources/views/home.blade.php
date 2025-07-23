@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">

    <div class="home-content">

        <div class="left-content">
            <div class="recommended">
                <h2>Recommended For You</h2>
                <div class="links">
                    @foreach ($recommended as $reco)
                    <div class="box">
                        <a href="/blogpost/{{ $reco->blogpost_id }}">{{ $reco->title }}</a>
                    </div>       
                    @endforeach
                </div>
            </div>

            <h2>LATEST Today</h2>
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
