<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        if (!auth()->user()->admin) {
            return back();
        }

        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function myProfile()
    {
        return view('admin.myProfile');
    }

    public function destroyUser(User $user)
    {
        if ($user === auth()->user()) {
            return back();
        }

        if (!auth()->user()->admin) {
            return back();
        }

        $posts = $user->posts;
        foreach ($posts as $post) {
            $post->update(['user_id' => auth()->id()]);
        }

        $user->delete();
        return back();
    }

    public function updateUser(UpdateUserRequest $request)
    {
        $inputs = $request->validated();

        if ($request['picture']) {
            $file = $request['picture'];
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('/storage/images/users'), $filename);
            $inputs['picture'] = '/storage/images/users/' . $filename;
        }

        auth()->user()->update($inputs);
        return view('admin.myProfile');
    }
}
