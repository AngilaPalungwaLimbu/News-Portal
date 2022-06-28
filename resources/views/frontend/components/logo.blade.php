<div class="container py-4 d-flex">
    <a href="/">
        <img src="{{ asset($company->logo) }}" width="45%" alt="">
    </a>
    @if (!empty($top_ads))
    <a href="{{ $top_ads->link }}" target="_blank">
        <img src="{{ asset($top_ads->image) }}"alt=""  width="100%">
    </a>
    @endif
</div>
