<div class="container-fluid pcolor py-4">

    <div class="container ">
        <div class="row d-flex ">
            <div class="col-md-4 px-4">
                <div class="card rounded-0 p-3 ">
                    <h4 class="card-title text-center fw-bold pcolortext">Contact</h4>
                    <hr>
                    <div class="card-body  text-center ">
                        <img src="{{ asset($company->logo) }}" width="100%" alt="">
                        <p class="text-secondary ">{{ $company->address }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 px-4">
                <div class="card rounded-0 p-3 ">
                    <h4 class="card-title text-center fw-bold pcolortext">Contact</h4>
                    <hr>
                    <div class="card-body  text-center ">
                        <img src="{{ asset($company->logo) }}" width="100%" alt="">
                        <p class="text-secondary ">{{ $company->address }}</p>
                        <p class="text-secondary ">Company Registration Certificate No .:</p>
                        <span>{{ $company->registration_no }}</span>

                    </div>
                </div>
            </div>
            <div class="col-md-4 px-4">
                <div class="card rounded-0 p-3 ">
                    <h4 class="card-title text-center fw-bold pcolortext">Contact</h4>
                    <hr>
                    <div class="card-body  text-center ">
                        <img src="{{ asset($company->logo) }}" width="100%" alt="">
                        <p class="text-secondary ">{{ $company->address }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
