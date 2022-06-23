@extends('backend.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header ">
                        <span class="fs-4 fw-bold">View All Ads</span>
                        <a href="/ad/create" class="float-end btn btn-info"><i class="fas fa-plus"></i><span
                                class="hide-menu ps-2">Create new Ads </span></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Compnay name</th>
                                        <th>Ad Position</th>
                                        <th>Link</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ads as $ad)
                                        <tr>

                                            <td>{{ $ad->company }}</td>
                                            <td>{{ $ad->ads_category }}</td>
                                            <td>{{ $ad->link }}</td>

                                            <td>
                                                <form action="/ad/{{ $ad->id }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="/ad/{{ $ad->id }}/edit"
                                                        class="btn btn-success text-white btn-sm">Edit</a>
                                                    <button class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
