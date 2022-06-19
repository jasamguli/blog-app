<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth'); hahahahah
    }

    public function index()
    {
        $posts = Post::all()
            ->sortBy('created_at')
            ->where('published_at', '<=', now())
            ->take(5);
        return view('master.home', compact('posts'));
    }


//    public function about()
//    {
//        return view('master.about', ['user' => auth()->user()]);
//    }

    public function contact()
    {
        return view('master.contact');
    }

    public function post($slug)
    {
        $post = Post::query()->where('slug', $slug)->first();
        return view('master.post', ['post' => $post]);
    }

    public function blog()
    {
        $posts = Post::orderBy('published_at', 'desc')
            ->where('published_at', '<=', now())
            ->paginate(6);
        return view('master.blog', ['posts' => $posts]);
    }
}
