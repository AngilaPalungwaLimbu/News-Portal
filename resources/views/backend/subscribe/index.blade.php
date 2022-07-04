@extends('backend.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header ">
                    <span class="fs-4 fw-bold">Subscriber</span>

                        <a href="/event_notification" class="float-end btn btn-info">Send Email</a>

                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>SNo.</th>
                                <th>Email</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subscribers as $subscriber)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $subscriber->email}}</td>

                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
