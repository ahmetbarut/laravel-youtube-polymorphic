@extends('layout')

@section('content')
    <div class="row justify-content-center">
        <div class="col-6">
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">
                        Title
                    </label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="body">
                        Body
                    </label>
                    <textarea class="form-control" id="body" name="body" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="image">
                        Image
                    </label>
                   <input type="file" name="image" id="image" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-success">
                        Create
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection