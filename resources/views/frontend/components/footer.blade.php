<div class="container-fluid pcolor py-5">

    <div class="container ">
        <div class="row d-flex ">
            <div class="col-md-4 px-4">
                <div class="card rounded-0 p-3 ">
                    <div class="card-body  text-center ">
                        <img src="{{ asset($company->logo) }}" width="100%" alt="" class="mb-2">
                        <p class="text-secondary ">{{ $company->address }}</p>
                        <p class="text-secondary ">Company Registration Certificate No .: <br> <span
                                class="fw-bold text-black">{{ $company->registration_no }}</span></p>
                        <p class="text-secondary ">Permanent Account No.: <span
                                class="fw-bold text-black">{{ $company->pan_no }}</span></p>
                        <p class="text-secondary ">Information and Broadcasting Department Registration No: <span
                                class="fw-bold text-black">{{ $company->pan_no }}</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 px-4">
                <div class="card-fluid rounded-0 p-3 ">
                    <h4 class="card-title text-center fw-bold text-white"> Useful Link</h4>
                    <hr>
                    <div class="card-body  text-center text-white">
                        @foreach ($menus as $index => $menu)
                        @if ($index<=6)
                        <p >
                            <a class="nav-link active  text-white" aria-current="page"
                            href="/kapurinews/{{ $menu->slug }}">{{ $menu->category_name }}</a>
                        </p>
                        @endif
                    @endforeach

                    </div>
                </div>
            </div>
            <div class="col-md-4 px-4">
                <div class="card-fluid rounded-0 p-3 ">
                    <h4 class="card-title text-center fw-bold text-white">Contact Us</h4>
                    <hr>
                    <div class="card-body  text-center text-white ">
                        <p >{{ $company->address }}</p>
                        <p >Email: {{ $company->email }}</p>
                        <p >Phone: {{ $company->contact }}</p>
                        <p >For Advertisement</p>
                        <p >Phone: {{ $company->contact_no_for_ads }}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
