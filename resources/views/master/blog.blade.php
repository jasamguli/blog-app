@extends('layouts.app')

@section('content')
    <!-- Post Content-->
    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">

                    @foreach($posts as $post)
                        <a href="{{route('post', ['slug' => $post->slug])}}">
                            <h1> {{ $post->title }}</h1>
                            <h6 class="display-6"> {{$post->short_description}}</h6>
                            <img src="{{$post->picture}}" alt="Post picture">
                        </a>
                        <p class="py-lg-0 "> Posted
                            by <i>{{$post->user->name}}</i> {{$post->published_at->diffForHumans()}}</p>
                        <hr>
                    @endforeach

                    <span>
                    {{$posts->links()}}
                </span>
                    <style>
                        /*.w-5 {*/
                        /*    display: none*/
                        /*}*/
                    </style>
                </div>
            </div>
        </div>
    </article>


@endsection
