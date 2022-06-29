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
                            <a href="/news/{{$post->id }}">
                                <div class="card border-0 mb-3">
                                    <div class="card-body p-0 text-center fs-5 bgdark">
                                        <img src="{{ asset($post->image) }}" class="img-fluid mb-3"
                                            alt="">
                                        <h5 class="fs-5 text-dark fw-semibold">{{ $post->title }}</h5>
                                        <div>{{ $post->created_at->diffForHumans() }}</div>
                                        <span class="text-secondary"> {!! Str::limit($post->description, 150, ' ...') !!}</span>
                                    </div>
                                </div>
                            </a>
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
                            <a href="/news/{{$post->id }}">
                                <div class="d-flex">
                                    <img src="{{ asset($post->image) }}" class="img-fluid pe-3" width="30%"
                                        height="auto" alt="">
                                    <h5>{{ $post->title }}</h5>
                                </div>
                            </a>

                            <hr>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
