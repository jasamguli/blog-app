@extends('layouts.app')

@section('content')

    <div class="col-5 mx-auto py-lg-3 my-lg-3">

        @foreach($posts->take(5) as $post)
            <a href="{{route('post', ['slug' => $post->slug])}}">
                <h1> {{ $post->title }}</h1>
                <h6 class="display-6"> {{$post->short_description}}</h6>
                <img src="{{$post->picture}}" alt="Post picture">
            </a>
            <p class="py-lg-0 "> Posted by <i>{{$post->user->name}}</i> {{$post->published_at->diffForHumans()}}</p>
            <hr>
        @endforeach
        <a href="{{route('blog')}}" class="btn-outline-primary "> View more-></a>
    </div>
@endsection


