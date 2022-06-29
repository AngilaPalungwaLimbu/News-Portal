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
                       <a href="/news/{{$post->id }}">
                        <div class="d-flex">
                            <img src="{{ asset($post->image) }}" class="img-fluid pe-3" width="30%"
                                height="auto" alt="">
                            <h5>{{ $post->title }}</h5>
                        </div>
                       </a>

                        <hr>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Header Section -->

</div>
