@extends('frontend.app')

@section('content')
    <div>
        <div class="container">
            <div class="row">
                <!-- LEFT SECTION -->
                <div class="col-md-8">

                    <h1 class="display-5 fw-semibold py-3 "><a href="">{{ $post->title }}</a></h1>
                    @if (!empty($post->sub_title))
                        <h3 class="fw-semibold text-secondary">{{ $post->sub_title }}</h3>
                    @endif
                    <img src="{{ asset($post->image) }}" class="my-3" width="100%" alt="">
                    <div class="fs-5"> {!! $post->description!!}</div>
                    <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="" data-numposts="5"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
