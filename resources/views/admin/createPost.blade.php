@extends('layouts.admin')

@section('content')

    <div class="col col-12">
        <div class="card-body">

            <h1 class="mb-2">Create a new post</h1>
            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')

                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="Enter title" required name="title">
                </div>
                <div class="form-group">
                    <label>Short description</label>
                    <input type="text" class="form-control" required name="short_description">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="description"
                              rows="7"></textarea>
                </div>
                <div class="col col-2">
                    <div class="form-group">
                        <label>Publish at</label>
                        <input type="datetime-local" class="form-control" required name="published_at">
                    </div>
                </div>
                <div class="form-group">
                    <label>Upload a picture</label> <br>
                    <input type="file" name="picture" accept="image/*">
                </div>
                <button type="submit" class="btn btn-primary w-25">Save</button>&nbsp;&nbsp;&nbsp;
                <button type="reset" class="btn btn-danger w-25">Cancel</button>
            </form>

        </div>
    </div>

@endsection
