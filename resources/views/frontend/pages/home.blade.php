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
                                    <h1 class="display-5 fw-semibold py-3 "><a href="">{{ $post->title }}</a></h1>
                                    @if (!empty($post->sub_title))
                                    <h2 class="fw-semibold my-3 scolor ">{{ $post->sub_title }}</h2>
                                    @endif
                                    <img src="{{ asset($post->image) }}" class="my-3" width="100%" alt="">
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
                            <div class="col-md-12 ">
                                <div class="d-flex justify-content-between py-2 px-3 bgdark mb-2 ">
                                    <span><h5 class="fw-bold">राजनीति</h5></span>
                                    <span><a href="" class="scolor fw-bold">More +</a></span>
                                </div>
                            </div>
                            <!-- Left Section -->
                            <div class="col-md-6">
                                <div class="row">
                                    @foreach ($politics as $index=> $post)
                                        @if ($index == 0)
                                        <div class="col-md-12">
                                           <div class="card border-0">
                                                <div class="card-body px-0 text-center fs-5">
                                                    <img src="{{ asset($post->image) }}" class="img-fluid mb-3" alt="">
                                                    <h5 class="fs-5 text-dark">{{ $post->title }}</h5>
                                                    <div>{{ $post->created_at->diffForHumans() }}</div>
                                                   <span class="text-secondary"> {!! Str::limit($post->description,150," ...") !!}</span>
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
                                    @foreach ($politics as $index=> $post)
                                        @if($index>0)
                                            <div class="col-md-12 py-2">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <img src="{{ asset($post->image) }}" class="img-fluid" alt="">
                                                       </div>
                                                       <div class="col-md-8">
                                                             <h5>{{ $post->title }}</h5>
                                                       </div>
                                                </div>
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
