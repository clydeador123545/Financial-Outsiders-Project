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

                <h1 style="font-size: clamp(35px, 2.2vw, 100px); margin: 40px 0px 0px 0px;">{{ $blogpost->title }}</h1>
                <h2 class="author-details" style="margin: 0px; font-weight: normal;">Author: {{ $blogpost->author->first_name }} {{ $blogpost->author->last_name }}</h3>

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
                <h3>Related</h3>
                @foreach ($otherPosts as $post)
                <a href="/blogpost/{{ $post->blogpost_id }}">
                    {{ $post->title }}
                </a>
                @endforeach
            </div>
        </div>

    </div>


    @endsection