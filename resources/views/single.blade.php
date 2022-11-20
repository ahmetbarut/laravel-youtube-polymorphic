@extends('layout')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            {{ $post->title }}
                        </div>
                        <div class="card-body">
                            <img src="{{ asset('storage/'.$post->image->path) }}" class="img-fluid">
                            {{ $post->body }}
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row justify-content-center mt-3">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            Yorumlar
                        </div>
                        <div class="card-body">
                            <form action="{{ route('posts.comments.store', $post->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="body">
                                        Body
                                    </label>
                                    <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
                                </div>

                                <label for="image">
                                    Image
                                </label>

                                <input type="file" name="image" id="image" class="form-control">
                                
                                <button class="btn btn-success">
                                    Comment
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <hr>
            <div class="row justify-content-center my-4">
                <div class="col-6">
                    <div class="row">
                        @foreach ($post->comments as $comment)
                            <div class="col-12">
                                <h2>{{ $loop->iteration }}. Yorum</h2>
                                {{ $comment->body }}
                                <img src="{{ asset('storage/'.$comment->image->path) }}" class="img-fluid">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
