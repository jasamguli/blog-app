<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        if ($request['param'] == 'admin') {
            if (!auth()->user()->admin) {
                return back();
            }

            $posts = Post::all()->sortByDesc('published_at');
            return view('admin.index', compact('posts'));
        }

        $posts = Post::all()->where('user_id', auth()->user()->id)->sortByDesc('published_at');
        return view('admin.index',compact('posts'));
    }

    public function create()
    {
        return view('admin.createPost');
    }

    public function store(StorePostRequest $request)
    {
        $inputs = $request->validated();
        $inputs['user_id'] = auth()->id();
        $inputs['published_at'] = $request->published_at; // TODO doesn't store this column ask Boris

        if ($request['picture']) {
            $file = $request['picture'];
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('/storage/images/posts'), $filename);
            $inputs['picture'] = '/storage/images/posts/' . $filename;
        }
        auth()->user()->posts()->create($inputs);

        return redirect('admin');
    }

    public function show(Post $post)
    {
        if (auth()->user()->admin) {
            return view('admin.showPost', compact('post'));
        }

        if ($post->user != auth()->user()) {
            return back();
        }

        return view('admin.showPost', compact('post'));
    }

    public function edit(Post $post)
    {
        if (auth()->user()->admin) {
            return view('admin.editPost', compact('post'));
        }

        if ($post->user != auth()->user()) {
            return back();
        }

        return view('admin.editPost', compact('post'));
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        if ($post->user == auth()->user() || auth()->user()->admin) {

            $inputs = $request->validated();
            $inputs['slug'] = SlugService::createSlug(Post::class, 'slug', $request->title);
            $inputs['published_at'] = $request->published_at;

            if ($request['picture']) {
                $file = $request['picture'];
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('/storage/images/posts'), $filename);
                $inputs['picture'] = '/storage/images/posts/' . $filename;
            }
            $post->update($inputs);

            return redirect('admin');
        }

        return back();
    }

    public function destroy(Post $post)
    {
        if (auth()->user()->admin) {
            $post->delete();
            return redirect('admin');
        }

        if ($post->user != auth()->user()) {
            return back();
        }

        $post->delete();
        return redirect('admin');
    }
}
