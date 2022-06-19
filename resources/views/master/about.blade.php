@extends('layouts.app')

@section('title', 'Nešto o meni')
@section('subtitle', '')

@section('content')
<!-- Main Content-->
<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <img width="500" src="{{ $user->picture }}" alt="Profile picture">
                <br>
                <br>
                <h2>
                    {{ $user->name }}
                </h2>
                <div class="main-content">
                    {!! auth()->user()->about !!}
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
