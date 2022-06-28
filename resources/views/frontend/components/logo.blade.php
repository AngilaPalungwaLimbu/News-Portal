<div class="container py-4  ">

    <div class="row ">
        <div class="col-md-4">
            <a href="/">
                <img src="{{ asset($company->logo) }}" width="100%" alt="">
            </a>
        </div>
        <div class="col-md-6 offset-md-2">
            @if (!empty($top_ads))
            <a href="{{ $top_ads->link }}" target="_blank">
                <img src="{{ asset($top_ads->image) }}"alt=""  width="100%">
            </a>
            @endif
        </div>
    </div>




</div>
