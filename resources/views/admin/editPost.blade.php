@extends('layouts.admin')

@section('content')

    <div class="card-body">

        <form action="{{ route('post.update', $post) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="col-12">
                <div class="row">
                    <div class="col col-8">

                        <h1 class="m-3">Edit post</h1>

                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" placeholder="Enter title" required
                                   name="title" value="{{ $post->title }}" data-form-type="text">
                        </div>
                        <div class="form-group">
                            <label>Short description</label>
                            <input type="text" class="form-control" placeholder="Enter short description"
                                   required name="short_description"
                                   value="{{ $post->short_description }}" data-form-type="text">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="5" placeholder="Full description" required
                                      name="description">{{ $post->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Publish at</label>
                            <input type="datetime-local" class="form-control"
                                   value="{{ substr_replace($post->published_at, 'T', 10, 1) }}"
                                   name="published_at"/>
                            {{--Opet malo gimnastike--}}
                        </div>

                        <button class="btn btn-primary w-25" type="submit">
                            Save
                        </button>&nbsp;&nbsp;&nbsp;
                        <button type="reset" class="btn btn-danger w-25">Cancel</button>
                    </div>

                    <div class="col col-4 mt-4">
                        @if($post->picture)
                            <img src="{{ $post->picture }}" width="400" alt="User picture">
                        @else
                            <img src="{{ asset('assets/img/defaultProfilePicture.png') }}" width="400"
                                 alt="User picture">
                        @endif

                        <div class="form-group m-2">
                            <label>Change the picture</label><br>
                            <input type="file" name="picture" accept="image/*">
                        </div>
                    </div>

                </div>
            </div>

        </form>

        <br>
        <div class="col col-12 justify-content-end d-flex">
            <form action="{{ route('post.destroy', $post) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-danger">Delete post</button>
            </form>
        </div>

    </div>

@endsection

@section('scripts')
    <script src="https://cdn.tiny.cloud/1/b0hvgs89c6n3c7x9q2irixqh6jgute9b4feganu15oulkm8l/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
            toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
        });
    </script>
@endsection
