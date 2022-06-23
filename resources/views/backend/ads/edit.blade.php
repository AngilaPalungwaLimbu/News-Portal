@extends('backend.app')

@section('content')
    <div class="container ">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card-header ">
                    <span class="fs-4 fw-bold">Create New Ads</span>
                    <a href="/post" class="float-end btn btn-info">Back</a>
                </div>
                <div class="card-body">

                    <form action="/ad/{{ $ad->id }}" , method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="company">Compnay Name</label>
                            <input type="text" name="company" id="company" class="form-control"
                                placeholder="Enter Company Name" value="{{ $ad->company }}">
                        </div>
                        <div class="form-group">
                            <label for="ads_category">Ads Type</label>
                            <input type="text" name="ads_category" id="ads_category" class="form-control"
                                placeholder="Enter Ads Type" value="{{ $ad->ads_category}}">
                        </div>
                        {{-- <select name="category_id[]" id="category_id" class="form-select form-control select2"  multiple>
                                <option value="" disabled selected>Select your option</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select> --}}

                            <div class="row">
                                <div>
                                    <img src="{{asset($ad->image)}}"class="img-fluid" alt="">
                                </div>
                                <div class="col-md-12">

                                    <div class="form-group">
                                        <label for="image">Upload Image </label>
                                        <input type="file" name="image" id="image" class="form-control">
                                    </div>
                                </div>
                            </div>
                        <div class="form-group">
                            <label for="link">Ads Url</label>
                            <input type="text" name="link" id="link" class="form-control"
                                placeholder="Enter Ads Type" value="{{ $ad->ads_category}}" >
                        </div>

                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
