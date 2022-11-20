@extends('layout')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="d-flex flex-column">
                        @foreach ($posts as $post)
                            <div class="card">
                                <div class="card-header">
                                    Featured
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <p class="card-text">{{ $post->body }}</p>
                                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Devamını oku</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
