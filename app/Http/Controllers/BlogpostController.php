<?php

namespace App\Http\Controllers;

use App\Models\Blogposts;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class BlogpostController extends Controller
{
    public function store(Request $request)
    {
        $posts = Blogposts::with('author')->get();
        
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blog_images', 'public');
        }

        $post = Blogposts::create([
            'title' => $request->input('title'),
            'slug' => Str::slug($request->input('title')),
            'author_id' => Auth::id() ?? 1, // hardcoded or use actual user
            'published_at' => now(),
            'image_path' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Blog post created!');
    }

    public function show($id)
    {
        $post = Blogposts::findOrFail($id);  
        $otherPosts = Blogposts::where('id', '!=', $id)->get(); 

        return view('blogpost.show', compact('post', 'otherPosts'));
    }
    
}
