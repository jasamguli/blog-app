@extends('layouts.admin')

@section('content')

    <div class="col col-10">
        <table class="table table-stripped table-hover ml-3 mr-3">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Posts</th>
                <th>Picture</th>
                <th>About</th>
                <th>Admin</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>

            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name}}</td>
                    <td>{{ $user->email}}</td>
                    <td>{{ count($user->posts)}}</td>
                    <td>
                        @if($user->picture)
                            <img src="{{ $user->picture }}" height="150" alt="User picture">
                        @else
                            <img src="{{ asset('assets/img/defaultProfilePicture.png') }}" width="150"
                                 alt="User picture">
                        @endif
                    </td>
                    <td>{{ $user->about}}</td>
                    <td>{{ $user->admin}}</td>
                    <td>
                        @if($user->admin)
                            <button class="btn btn-secondary disabled">Admin</button>
                        @else
                            <form method="post" action="{{ route('user.destroy', $user->id) }}">
                                @csrf
                                @method('GET')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

@endsection
