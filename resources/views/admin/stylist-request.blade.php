@extends('layouts.Masteradmin')

@section('content')
    <style>
        .text-center-custom {
            text-align: center;
        }
    </style>
    <div class="content">
        <div class="row justify-content-center mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-center-custom">Stylist Requests</h4>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div style="overflow-x: auto;">
                                <table class="table table-bordered mx-auto">
                                    <thead class="text-center">
                                    <tr>
                                        <th class="text-center-custom">First Name</th>
                                        <th class="text-center-custom">Last Name</th>
                                        <th class="text-center-custom">E-mail</th>
                                        <th class="text-center-custom">Saloon Name</th>
                                        <th class="text-center-custom">Saloon City</th>
                                        <th class="text-center-custom">Saloon Address</th>
                                        <th class="text-center-custom">Saloon Phone</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($requests as $request)
                                        <tr class="text-center">
                                            <td class="text-center-custom">{{ $request->user->first_name }}</td>
                                            <td class="text-center-custom">{{ $request->user->last_name }}</td>
                                            <td class="text-center-custom">{{ $request->user->email }}</td>
                                            <td class="text-center-custom">{{ $request->saloon_name }}</td>
                                            <td class="text-center-custom">{{ $request->saloon_city }}</td>
                                            <td class="text-center-custom">{{ $request->saloon_address }}</td>
                                            <td class="text-center-custom">{{ $request->saloon_phone }}</td>
                                            <td class="text-center-custom">
                                                <form action="{{ route('approve_request', $request) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary btn-sm">Approve</button>
                                                </form>
                                            </td>
                                            <td class="text-center-custom">
                                                <form action="{{ route('disapprove_request', $request) }}" method="GET">
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary btn-sm">Disapprove</button>
                                                </form>
                                            </td>
                                            <td class="text-center-custom">
                                                <form action="{{ route('request.show', $request) }}">
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary btn-sm">View</button>
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
    </div>
@endsection
