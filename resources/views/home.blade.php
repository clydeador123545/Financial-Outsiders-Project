@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">

    <div class="home-content">

        <!-- Banner Image -->
        <div class="left-content">
            <div class="banner">
                <img class="bimg"
                    src="https://images.unsplash.com/photo-1579621970795-87facc2f976d?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
            </div>

            <!-- Article Sections & Titles -->
            <h1 style="font-size: clamp(35px, 2.2vw, 100px); margin: 40px 0px 0px 0px;">FEATURED: How to Grow Money from a
                Pot!</h1>
            <h2 style="margin: 0px; font-weight: normal;">Ipsum.com | Amet S.</h3>
                <hr style="border: none; height: 0.5px; background-color: black;">

                <!-- Recommended Section -->
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

                <!-- Latest News Feed -->
                <h2 class="atitle">LATEST Today</h2>
                <div class="latest">
                    @foreach ($randomPosts as $post)
                        <div class="latest-box">                                                   
                            
                            @php
                            $files = glob(public_path('images/artimages/*.png'));
                             $path = count($files) ? 'images/artimages/' . basename($files[array_rand($files)]) : null;
                            @endphp

                            @if ($path)
                            <img src="{{ asset($path) }}" width="300" alt="Random Art">
                            @endif

                           
                            <a href="/blogpost/{{ $post->blogpost_id }}">
                                <h2>{{$post->title}}</h2>
                            </a>
                        </div>
                    @endforeach
                </div>
        </div>

        <!-- Right Pane -->
        <div class="right-content">
            <h2 style="text-align: center;">Exclusive News</h2>
            @foreach ($randomPosts as $post)
                <a style="text-decoration: underline;" href="/blogpost/{{ $post->blogpost_id }}">
                    {{ $post->title }}
                </a>
            @endforeach
        </div>
    </div>


@endsection