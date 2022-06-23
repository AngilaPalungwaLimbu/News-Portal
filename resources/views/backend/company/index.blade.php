@extends('backend.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header ">
                    <span class="fs-4 fw-bold">General Setting</span>
                    @if (empty($company))
                        <a href="/company/create" class="float-end btn btn-info">Add Company Detail</a>
                    @endif
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (!empty($company))
                                <tr>
                                    <td>{{ $company->name }}</td>
                                    <td>{{ $company->address }}</td>
                                    <td>{{ $company->email }}</td>
                                    <td>{{ $company->contact }}</td>
                                    <th>
                                        <form action="/company/{{$company->id}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="/company/{{$company->id}}/edit" class="btn badge bg-success">Edit</a>
                                            <button type="submit" class="btn badge bg-danger">Delete</button>

                                        </form>

                                    </th>
                                </tr>
                            @endif
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
