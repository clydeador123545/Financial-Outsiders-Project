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

            <h1>{{ $blogpost->title }}</h1>
            <div class="author-details">
                <p>Author: {{ $blogpost->author->first_name }} {{ $blogpost->author->last_name }}</p>
                <h4>AI Overview
In CSS, border-box refers to a value of the box-sizing property, which dictates how an element's total width and height are calculated.
When box-sizing: border-box; is applied to an element, the specified width and height values for that element include its content, padding, and border. This means that if you set an element's width to 200px and then add 20px of padding and a 5px border, the total visible width of the element on the page will still be 200px. The content area will shrink to accommodate the padding and border within that specified total width.
This behavior contrasts with the default box-sizing: content-box; where the width and height only refer to the content area. In content-box mode, adding padding or border to an element will increase its total visible size beyond the specified width and height.
box-sizing: border-box; is widely used in modern CSS layouts because it simplifies the calculation of element dimensions and makes responsive design more predictable, as the declared width and height always reflect the element's actual footprint on the page, including its visual additions like padding and borders.AI Overview
In CSS, border-box refers to a value of the box-sizing property, which dictates how an element's total width and height are calculated.
When box-sizing: border-box; is applied to an element, the specified width and height values for that element include its content, padding, and border. This means that if you set an element's width to 200px and then add 20px of padding and a 5px border, the total visible width of the element on the page will still be 200px. The content area will shrink to accommodate the padding and border within that specified total width.
This behavior contrasts with the default box-sizing: content-box; where the width and height only refer to the content area. In content-box mode, adding padding or border to an element will increase its total visible size beyond the specified width and height.
box-sizing: border-box; is widely used in modern CSS layouts because it simplifies the calculation of element dimensions and makes responsive design more predictable, as the declared width and height always reflect the element's actual footprint on the page, including its visual additions like padding and borders.</h4>
            </div>
            <p>{{ $blogpost->content }}</p>
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
