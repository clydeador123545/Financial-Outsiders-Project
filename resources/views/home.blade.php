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
                <h1 style="font-size: 50px; font-weight: bold;">Recommended For You</h1>
                <div class="links">
                    @foreach ($recommended as $reco)
                    <div class="box">
                        <a href="/blogpost/{{ $reco->blogpost_id }}">{{ $reco->title }}</a>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Latest News Feed -->
            <h1 style="font-size: 40px; font-weight: bold;">LATEST Today</h1>
            <div class="latest" style="padding: 0px;">
                @foreach ($randomPosts as $post)
                <div class="latest-box" style="display: flex; align-items: center; gap: 15px; margin-bottom: 30px;">

                    <!-- Random Image from Local Folder Script -->
                    @php
                    $files = glob(public_path('images/artimages/*.png'));
                    $path = count($files) ? 'images/artimages/' . basename($files[array_rand($files)]) : null;
                    $imagePath = $path ?? 'images/artimages/default.png';
                    @endphp

                    @if ($path)
                    <div
                        style="width: clamp(100px, 20vw, 200px); height: clamp(100px, 20vw, 200px); overflow: hidden; flex-shrink: 0;">
                        <img src="{{ asset($path) }}" alt="Random Art"
                            style="width: clamp(100px, 20vw, 200px); height: clamp(100px, 20vw, 200px); object-fit: cover; display: block;">
                    </div>
                    @endif

                    <div style="display: flex; flex-direction: column; align-items: flex-start; gap: 5px;">

                        <h2 style="margin: 0; padding: 0;">News Source | Author K.</h2>

                        <a href="/blogpost/{{ $post->blogpost_id }}?image={{ urlencode($imagePath) }}" style="text-decoration: none; padding: 0;">
                            <h2 style="margin: 0;">{{ $post->title }}</h2>
                        </a>
                        <h3>Sic fili scite tibi vi sactramentum erit praemium Sanguine sanctum absconditum. Donguri wo tadotte mo tsukimasen
                            Mori no chiisana resutoran
                            Karappo no poketto wo masagutte
                            Wasureta hito kara tadori tsuku</h3>

                    </div>
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