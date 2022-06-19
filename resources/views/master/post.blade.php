@extends('layouts.app')

@section('title', $post->title)
@section('subtitle', $post->short_description)

@section('bg-img', $post->picture)


@section('content')
    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    {!! $post->description !!}
                    <br>
                    <p class="py-lg-0 "> Posted by <i>{{$post->user->name}}</i> {{$post->published_at->diffForHumans()}}
                    </p>
                </div>
            </div>
        </div>
    </article>

@endsection
