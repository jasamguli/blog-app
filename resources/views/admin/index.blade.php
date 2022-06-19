@extends('layouts.admin')

@section('content')

    <div class="col col-10">
        <div class="col col-12 d-flex justify-content-center">
            <h1 class="m-3">Posts</h1>
        </div>
        <table class="table table-stripped table-hover ml-3 mr-3">
            <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Published by</th>
                <th>Published at</th>
                <th>Image</th>
                <th>Edit</th>
            </tr>
            </thead>
            <tbody>

            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td><a href="{{ route('post.show', $post) }}">{{ $post->title }}</a></td>
                    <td>{{ $post->user->name}}</td>
                    <td>{{ $post->published_at}}</td>
                    <td>
                        <img src="{{ $post->picture }}" width="300" alt="Image not available">
                    </td>
                    <td>
                        <a href="{{ route('post.edit', $post) }}">
                            <button class="btn btn-warning">Edit</button>
                        </a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

@endsection
