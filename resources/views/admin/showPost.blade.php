@extends('layouts.admin')

@section('content')
    <div class="row w-100 card-body">

        <div class="col col-5">
            <div>
                <label><h2><u>Title:</u></h2></label>
                <h3>{{ $post->title }}</h3><br>
            </div>
            <div>
                <label><u><b>Published by:</b></u></label>
                <p>{{ $post->user->name }}</p><br>
            </div>
            <div>
                <label><u><b>Published at:</b></u></label>
                <p>{{ $post->published_at }}</p><br>
            </div>
            <div>
                <label><u><b>Slug:</b></u></label>
                <p>{{ $post->slug }}</p><br>
            </div>
            <div>
                <label><u><b>Short description:</b></u></label>
                <h5>{{ $post->short_description }}</h5>
            </div>
        </div>

        <div class="col col-1"></div>
        <div class="col col-6">
            <img src="{{ $post->picture }}" width="500" alt="Post picture"><br><br>
            <label><u><b>Description:</b></u></label>
            <p>{!! $post->description !!}</p>
        </div>

    </div>

@endsection
