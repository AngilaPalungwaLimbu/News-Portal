@extends('frontend.app')

@section('content')
    <!-- ===== LATEST TOP 3 NEWS ===== -->
        <div class="py-5">
            <div class="container">
                <div class="row gy-4">
                    @foreach ($posts as $post)
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h1 class="display-5 fw-semibold"><a href="">{{ $post->title }}</a></h1>
                                    <img src="{{ asset($post->image) }}" width="100%" alt="">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    <!-- ===== LATEST TOP 3 NEWS END ===== -->

    <!-- ===== RAJNITI ===== -->
        <div>
            <div class="container">
                <div class="row">
                    <!-- RAJNITI SECTION -->
                    <div class="col-md-8">

                        <div class="row">
                             <!-- Heading -->
                            <div class="col-md-12">
                                <div class="d-flex justify-content-between py-2 px-3 bg-dark">
                                    <span><h5 class="text-white">राजनीति</h5></span>
                                    <span><a href="" class="text-white">More</a></span>
                                </div>
                            </div>
                            <!-- Left Section -->
                            <div class="col-md-6">
                                <div class="row">
                                    @foreach ($politics as $index=> $post)
                                        @if ($index == 0)
                                        <div class="col-md-12">
                                            <h5>{{ $post->title }}</h5>
                                        </div>
                                        @endif

                                    @endforeach
                                </div>
                            </div>
                            <!-- Right Section -->
                            <div class="col-md-6">
                                <div class="row">
                                    @foreach ($politics as $index=> $post)
                                        @if($index>0)
                                            <div class="col-md-12">
                                                <h5>{{ $post->title }}</h5>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- BREAKING NEWS SECTION -->
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
    <!-- ===== RAJNITI END ===== -->
@endsection
