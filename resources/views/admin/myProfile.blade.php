@extends('layouts.admin')

@section('content')

    <div class="card-body">
        <div class="col-12">
            <div class="row">

                <div class="col col-6">
                    <form action="{{ route('user.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('GET')
                        <h1 class="mb-2">My profile</h1>

                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" name="name" required value="{{ auth()->user()->name }}">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" disabled value="{{ auth()->user()->email }}">
                        </div>
                        <div class="form-group">
                            <label>About me</label>
                            <textarea class="form-control" name="about" required
                                      rows="7">{{ auth()->user()->about }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Change your picture</label><br>
                            <input type="file" name="picture" accept="image/*">
                        </div>

                        <button type="submit" class="btn btn-primary w-25">Save</button>&nbsp;&nbsp;&nbsp;
                        <button type="reset" class="btn btn-danger w-25">Cancel</button>

                    </form>
                </div>
                <div class="col col-1"></div>
                <div class="col col-4 mt-4">
                    <div class="justify-content-center d-flex">
                        @if(auth()->user()->picture)
                            <img src="{{ auth()->user()->picture }}" width="400" alt="User picture">
                        @else
                            <img src="{{ asset('assets/img/defaultProfilePicture.png') }}" width="400"
                                 alt="User picture">
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
