@extends('backend.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header ">
                    <span class="fs-4 fw-bold">Edit Post</span>
                    <a href="/post" class="float-end btn btn-info">Back</a>
                </div>
                <div class="card-body">

                    <form action="/post/{{ $post->id }}" , method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control"
                                placeholder="Enter Title" value="{{$post->title}}">
                        </div>
                        <div class="form-group">
                            <label for="sub_title">Sub Title</label>
                            <input type="text" name="sub_title" id="sub_title" class="form-control"
                                placeholder="Enter Sub Title" value="{{$post->sub_title}}>
                        </div>
                        <div class="form-group">
                            <label for="category_name"> Category </label>
                            <select name="category_id[]" id="category_id" class="form-select form-control select2" multiple>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                           @foreach ($post->categories as $item)
                                                {{ $item->id == $category->id ? 'selected' : '' }}
                                           @endforeach
                                        >{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row">
                            <div class="my-2">
                                <img src="{{asset($post->image)}}"  width="200" alt="">
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="image">image</label>
                                    <input type="file" name="image" id="image" class="form-control" accept="images/jpeg, images/jpg, images/png">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description">Description <span class="text-danger">*</span></label>
                            <textarea name="description" id="description" rows="3" >{{$post->description}}</textarea>
                        </div>

                        <button type="submit" class="btn btn-info">Add Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
