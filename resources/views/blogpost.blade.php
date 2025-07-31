@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/blogpost.css') }}">

<div>
    <div class="main-content">

        <div class="blog-container">
            <div class="blog-img">
                @php
                $image = request('image') ?? 'images/artimages/default.png';
                @endphp

                <img class="bimg" src="{{ asset($image) }}" alt="Blog image">
            </div>
            <div class="blog">

                <h1 style="font-size: clamp(35px, 2.2vw, 100px); margin: 40px 0px 0px 0px; letter-spacing: 0.05em;">{{ $blogpost->title }}</h1>
                <h1 class="author-details" style="margin: 0px; font-weight: normal;">Author: {{ $blogpost->author->first_name }} {{ $blogpost->author->last_name }}</h3>

                    <hr style="border: none; height: 0.5px; background-color: black;">
                    <h1></h1>
                    <p style="font-size: clamp(20px, 2vw, 30px); text-align: justify; column-count: 2; column-gap: 40px;">
                        {{ $blogpost->content }}
                    </p>
            </div>
        </div>

        <div class="suggested-container">
            <div class="imgpad"></div>
            <div class="suggested">
                <h1 style="text-align: center;">Related</h1>

                @foreach ($otherPosts as $post)

                <div class="latest-box" style="display: flex; align-items: center; gap: 5px; margin-bottom: 30px; flex-direction: row;">
                    @php
                    $files = glob(public_path('images/artimages/*.png'));
                    $path = count($files) ? 'images/artimages/' . basename($files[array_rand($files)]) : null;
                    $imagePath = $path ?? 'images/artimages/default.png';
                    @endphp

                    @if ($path)
                    <div
                        style="width: clamp(120px, 20vw, 120px); height: clamp(100px, 20vw, 100px); overflow: hidden; flex-shrink: 0; box-shadow: 6px 6px 0px 0px rgba(0, 0, 0, 0.2);">
                        <img src="{{ asset($path) }}" alt="Random Art"
                            style="width: clamp(120px, 20vw, 120px); height: clamp(100px, 20vw, 100px); object-fit: cover; display: block; ">
                    </div>
                    @endif               

                <a href="/blogpost/{{ $post->blogpost_id }}">
                    {{ $post->title }}
                </a>

                </div>
                @endforeach
            </div>
        </div>

    </div>


    @endsection