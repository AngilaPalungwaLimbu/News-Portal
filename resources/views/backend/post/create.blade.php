@extends('backend.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header ">
                    <span class="fs-4 fw-bold">Create New Post</span>
                    <a href="/post" class="float-end btn btn-info">Back</a>
                </div>
                <div class="card-body">

                    <form action="/post" , method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="title">Title<span class="text-danger">*</span></label>
                            <input type="text" name="title" id="title" class="form-control"
                                placeholder="Enter Title">
                        </div>
                        <div class="form-group">
                            <label for="sub_title">Sub Title</label>
                            <input type="text" name="sub_title" id="sub_title" class="form-control"
                                placeholder="Enter Sub Title">
                        </div>
                        <div class="form-group">
                            <label for="category_name"> Category <span class="text-danger">*</span></label>

                            <select name="category_id[]" id="category_id" class="form-select form-control select2"  multiple>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="form-group">
                            <label for="image">Image<span class="text-danger">*</span></label>
                            <input type="file" name="image" id="image" class="form-control"
                                accept="images/jpeg, images/jpg, images/png" placeholder="Enter Title">
                        </div>

                        <div class="form-group">
                            <label for="description">Description <span class="text-danger">*</span></label>
                            <textarea name="description" id="description" rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn btn-info">Save Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
