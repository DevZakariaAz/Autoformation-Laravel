<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all(); // Fetch all posts
        return view('posts', compact('posts')); // Pass posts to the view
    }
}
