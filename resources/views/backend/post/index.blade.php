@extends('backend.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-right-0">
                    <div class="card-header ">
                        <span class="fs-4 fw-bold">Posts</span>
                        <a href="/post/create" class="float-end btn btn-info">Create Post </a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                        @foreach ($posts as $post)
                                <div class="col-md-3">
                                    <div class="card-hover">
                                        <div class="card-body">
                                            <h5>{{ $post->title }}</h5>
                                            <img src="{{ asset($post->image) }}" class="img-fluid"  alt="">
                                        </div>
                                        <div class="card-footer">
                                            <form action="/post/{{$post->id}} " method="post">
                                                @csrf
                                                @method('delete')
                                                <a href="/post/{{ $post->id }}/edit" class="btn btn-info">Edit</a>
                                                {{-- <a href="/post/{{ $post->id }}" class="btn badge bg-success"
                                                    target="page">Detail</a> --}}
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                    </div>

                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
