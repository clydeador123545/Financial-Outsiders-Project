@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/blogpost.css') }}">

<div class="container mx-auto px-4 py-8 max-w-10xl">
    <div class="flex flex-col lg:flex-row gap-15 items-start">
        <main class="flex-1 mt-[-100px]">
            <article class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="p-8">
                    <h1 class="text-4xl font-bold text-gray-900 mb-4">{{ $blogpost->title}}</h1>

                   
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-800 font-bold">
                            {{ strtoupper(substr($blogpost->author->first_name, 0, 1)) }}{{ strtoupper(substr($blogpost->author->last_name, 0, 1))}}
                        </div>
                        <div>
                            <p class="text-gray-700 font-medium">
                                {{ $blogpost->author->first_name }} 
                                {{ $blogpost->author->last_name }}
                            </p>
                            <p class="text-gray-500 text-sm">
                                Published {{ $blogpost->created_at->diffForHumans() }}
                            </p>
                        </div>
                    </div>

                    <div class="prose max-w-none text-gray-700">
                        {!! nl2br(e($blogpost->content)) !!}
                    </div>
                    
                </div>
            </article>

            {{-- Comments --}}
            <section class="bg-white rounded-xl shadow-md overflow-hidden mt-8">
                <div class="p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6 pb-6">
                        Comments ({{ $blogpost->comments->count() }})
                    </h2>
                    @forelse ($blogpost->comments as $comment)
                        <div class="flex gap-4 mb-6 pb-6 border-b border-gray-100 last:border-0 last:mb-0 last:pb-0">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-purple-100 flex items-center justify-center text-purple-800 font-bold">
                                {{ strtoupper(substr($comment->user->name, 0, 1))}}
                            </div>

                            <div class="flex-1">
                                <div class="flex items-baseline gap-3 mb-2">
                                    <h4 class="font-medium text-gray-900">
                                        {{ $comment->user->first_name }}
                                        {{ $comment->user->last_name }}
                                    </h4>
                                    <span class="text-sm text-gray-500">
                                        {{ $comment->created_at->diffForHumans() }}
                                    </span>
                                </div>
                                <p class="text-gray-700">
                                    {{ $comment->description }}
                                </p>
                            </div>
                        </div>
                    @empty
                        <p class="text-gray-500 italic">
                            No comments yet. Be the first tocomment!
                        </p>
                    @endforelse
                </div>
            </section>
        </main>

        {{-- Sidebar "Related Posts" --}}
        <aside class="lg:w-80 flex-shrink-0 sticky top-8 flex h-fit">
            <div class="bg-white rounded-xl shadow-md overflow-hidden p-6 ">
                <h3 class="text-2xl font-bold text-gray-900 mb-6 pb-2">Related Posts</h3>
                <div class="space-y-4">
                    @foreach ($otherPosts as $post)
                        <a href="/blogpost/{{ $post->blogpost_id }}"
                            class="block group"    
                        >
                            <div class="p-3 rounded-lg hover:bg-gray-50 transition-colors">
                                <h4 class="font-medium text-gray-900 group-hover:text-indigo-600 transition-colors">{{ $post->title }}</h4>
                                <p class="text-sm text-gray-500 mt-1">
                                    {{ $post->created_at->diffForHumans() }}
                                </p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </aside>
    </div>
</div>


    
@endsection
