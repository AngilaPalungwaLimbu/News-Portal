@extends('frontend.app')

@section('content')

    <!-- ===== LATEST TOP 3 NEWS ===== -->
        @include('frontend.components.home.latestnews')
    <!-- ===== LATEST TOP 3 NEWS END ===== -->

    <!-- ===== RAJNITI ===== -->
    <div>
        <div class="container">
            <div class="row">
                <!-- RAJNITI SECTION -->
                @include('frontend.components.home.rajnitinews')

                <!-- BREAKING NEWS SECTION -->
                @include('frontend.components.home.breakingnews')

            </div>
        </div>
    </div>
    <!-- ===== RAJNITI END ===== -->
@endsection
