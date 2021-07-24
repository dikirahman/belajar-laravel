<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // menampilkan semua data post
    public function index() 
    {
        return view('posts', [
            "title" => "Post",
            "posts" => Post::all()
        ]);
    }
    // menampilkan detail post
    public function show($slug)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => Post::find($slug)
        ]);
    }
}
