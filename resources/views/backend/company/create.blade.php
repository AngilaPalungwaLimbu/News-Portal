@extends('backend.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header ">
                    <span class="fs-4 fw-bold"> Setting</span>
                    <a href="/company" class="float-end btn btn-info">Back</a>
                </div>
                <div class="card-body">

                    <form action="/company/" , method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Company Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="Enter your name">
                        </div>

                        <div class="form-group">
                            <label for="address">Address <span class="text-danger">*</span></label>
                            <input type="text" name="address" id="address" class="form-control"
                                placeholder="Enter your address">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact">Contact <span class="text-danger">*</span></label>
                                    <input type="text" name="contact" id="contact" class="form-control"
                                        placeholder="Enter your number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    <input type="text" name="email" id="email" class="form-control"
                                        placeholder="Enter your email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="registration_no">Registration no. </label>
                                    <input type="text" name="registration_no" id="registration_no" class="form-control"
                                        placeholder="Enter your registration_no">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="pan_no">pan_no </label>
                                    <input type="text" name="pan_no" id="pan_no" class="form-control"
                                        placeholder="Enter your pan_no">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="information_registration_no">Information registration no. </label>
                                    <input type="text" name="information_registration_no"
                                        id="information_registration_no" class="form-control"
                                        placeholder="Enter your information registration no.">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact_no_for_ads">Contact no for ads </label>
                                    <input type="text" name="contact_no_for_ads" id="contact_no_for_ads"
                                        class="form-control" placeholder="Enter  contact no for ads">
                                </div>
                            </div>
                        </div>
                       <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="logo">Upload logo </label>
                                    <input type="file" name="logo" id="logo" class="form-control">
                                </div>
                            </div>
                       </div>

                        <button type="submit" class="btn btn-info">Add Record</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
