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

                    <form action="/ad" , method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="company">Compnay Name</label>
                            <input type="text" name="company" id="company" class="form-control"
                                placeholder="Enter Company Name">
                        </div>
                        <div class="form-group">
                            <label for="ads_category">Select Ads Type</label>
                            <select id="ads_category" class="form-control" name="ads_category">
                                <option value="header_ads">Header Ads (1900 x 300)</option>
                                <option value="topbar_ads">Topbar Ads (1400 X 150)</option>
                                <option value="sidebar_ads">Sidebar Ads (500 x 500)</option>
                            </select>
                        </div>
                        {{-- <select name="category_id[]" id="category_id" class="form-select form-control select2"  multiple>
                                <option value="" disabled selected>Select your option</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select> --}}

                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image" class="form-control"
                                accept="images/jpeg, images/jpg, images/png" placeholder="Enter Title">
                        </div>
                        <div class="form-group">
                            <label for="link">Ads Url</label>
                            <input type="text" name="link" id="link" class="form-control"
                                placeholder="Enter Ads Type">
                        </div>

                        <button type="submit" class="btn btn-info">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
