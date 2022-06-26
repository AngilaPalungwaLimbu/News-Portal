@extends('frontend.app')

@section('content')
    <!-- ===== LATEST TOP 3 NEWS ===== -->
    <div class="py-5">
        <div class="container">
            <div class="row gy-4">
                @foreach ($posts as $post)
                    <div class="col-md-12">
                        <div class="card bg-light p-4">
                            <div class="card-body text-center">
                                <h1 class="display-5 fw-semibold py-3 "><a
                                        href="/{{ $post->slug }}">{{ $post->title }}</a></h1>
                                @if (!empty($post->sub_title))
                                    <h2 class="fw-semibold my-3 scolor ">{{ $post->sub_title }}</h2>
                                @endif
                                <a href="/{{ $post->slug }}">
                                    <img src="{{ asset($post->image) }}" class="my-3" width="100%" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- ===== LATEST TOP 3 NEWS END ===== -->

    <!-- ===== RAJNITI ===== -->
    {{-- <div>
        <div class="container">
            <div class="row">
                <!-- RAJNITI SECTION -->
                <div class="col-md-8">

                    <div class="row">
                        <!-- Heading -->
                        <div class="col-md-12 ">
                            <div class="d-flex justify-content-between py-2 px-3 bgdark mb-4 ">
                                <span>
                                    <h5 class="fw-bold p-1">राजनीति</h5>
                                </span>
                                <span><a href="" class="scolor fw-bold ">More +</a></span>
                            </div>
                        </div>
                        <!-- Left Section -->
                        <div class="col-md-6">
                            <div class="row">
                                @foreach ($politics as $index => $post)
                                    @if ($index == 0)
                                        <div class="col-md-12">
                                            <div class="card border-0 mb-3">
                                                <div class="card-body p-0 text-center fs-5 bgdark">
                                                    <img src="{{ asset($post->image) }}" class="img-fluid mb-3"
                                                        alt="">
                                                    <h5 class="fs-5 text-dark fw-semibold">{{ $post->title }}</h5>
                                                    <div>{{ $post->created_at->diffForHumans() }}</div>
                                                    <span class="text-secondary"> {!! Str::limit($post->description, 150, ' ...') !!}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <!-- Right Section -->
                        <div class="col-md-6">
                            <div class="row">
                                @foreach ($politics as $index => $post)
                                    @if ($index > 0)
                                        <div class="col-md-12 ">
                                            <div class="d-flex">
                                                <img src="{{ asset($post->image) }}" class="img-fluid pe-3" width="30%"
                                                    height="auto" alt="">
                                                <h5>{{ $post->title }}</h5>
                                            </div>

                                            <hr>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <!-- BREAKING NEWS SECTION -->
                <div class="col-md-4">
                    <!-- Header Section -->
                    <div class="row">
                        <div class="col-md-12 py-3 px-4 pcolor">
                            <a href="">
                                <h5 class="mb-0 text-white">ताजा अपडेट</h5>
                            </a>
                        </div>
                        <div class="col-md-12 pt-4  lightblue mb-3">
                            <div class="row" >
                                @foreach ($latest as $post)
                                    <div class="col-md-12 ">
                                        <div class="d-flex">
                                            <img src="{{ asset($post->image) }}" class="img-fluid pe-3" width="30%"
                                                height="auto" alt="">
                                            <h5>{{ $post->title }}</h5>
                                        </div>

                                        <hr>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Header Section -->

                </div>
            </div>
        </div>
    </div>
    <!-- ===== RAJNITI END ===== --> --}}
@endsection
