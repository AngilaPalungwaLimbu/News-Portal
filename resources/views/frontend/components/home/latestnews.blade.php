<div class="py-3">
    <div class="container">
        <div class="row gy-4">
            @if (!empty($posts))
            @foreach ($posts as $post)
                <div class="col-md-12">
                    <div class="card bg-light p-4">
                        <div class="card-body text-center">
                            <h1 class="display-5 fw-semibold py-3 "><a
                                    href="/news/{{$post->id }}">{{ $post->title }}</a></h1>
                            @if (!empty($post->sub_title))
                                <h2 class="fw-semibold my-3 scolor ">{{ $post->sub_title }}</h2>
                            @endif
                            <a href="/news/{{ $post->id }}">
                                <img src="{{ asset($post->image) }}" class="my-3" width="100%" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach

            @endif
        </div>
    </div>
</div>
