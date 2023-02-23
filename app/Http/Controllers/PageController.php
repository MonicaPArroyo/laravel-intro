<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function blog()
    {
        // $posts = Post::get();
        // $posts = Post::first();
        // $posts = Post::find();

        $posts = Post::latest()->paginate();
        return view('blog', ['posts' => $posts]);
    }

    public function post(Post $post)
    {
        // Simular consulta a base de datos
        return view('post', ['post' => $post]);
    }
}
