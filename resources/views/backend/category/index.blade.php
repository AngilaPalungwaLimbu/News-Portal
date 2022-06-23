@extends('backend.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header ">
                        <span class="fs-4 fw-bold">View All Category</span>
                        <a href="/category/create" class="float-end btn btn-info"><i class="fas fa-plus"></i><span
                                class="hide-menu ps-2">Add Category </span></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Category Name</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $category->category_name }}</td>
                                            <td>
                                                @if ($category->status == 1)
                                                    <p><a href="" class="text-success">Active</a></p>
                                                @else
                                                    <p><a href="" class="text-danger">In Active</a></p>
                                                @endif
                                            </td>
                                            <td>
                                                <form action="/category/{{ $category->id }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="/category/{{ $category->id }}/edit"
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
