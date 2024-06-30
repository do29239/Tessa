@extends('layouts.MasterAdmin')

@section('content')
    <style>
        .text-center-custom {
            text-align: center;
        }
        .product-image {
            max-width: 100px; /* Set the maximum width as per your design */
            max-height: 100px; /* Set the maximum height as per your design */
        }
    </style>

    <div class="content">
        <div class="row justify-content-center mt-4">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header d-flex justify-content-between align-items-center">
                        <form action="{{ route('request.index') }}" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-primary btn-sm">Stylist Requests</button>
                        </form>
                        <h2 class="card-title text-center-custom">Request Details</h2>
                        <div>

                            <form action="{{ route('request.update', $request) }}" method="POST" class="d-inline">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-primary btn-sm">Approve</button>
                            </form>
                            <form action="{{ route('request.destroy', $request) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-primary btn-sm">Disapprove</button>
                            </form>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <div style="overflow-x: auto;">
                            <div class="card-body">
                                <h2>Stylist Details</h2>
                                <table class="table table-bordered">
                                    <tr>
                                        <td><strong>Saloon Name:</strong></td>
                                        <td>{{ $request->saloon_name }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Saloon City:</strong></td>
                                        <td>{{ $request->saloon_city }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Saloon Address:</strong></td>
                                        <td>{{ $request->saloon_address }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Saloon Phone</strong></td>
                                        <td>{{ $request->saloon_phone }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Message</strong></td>
                                        <td>{!! nl2br(e($request->message)) !!}</td>
                                    </tr>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-md-12">
                <div class="centered-card" >
                    <div class="card  card-half">
                        <div class="card-body">
                            <div class="card-body">
                                <h2>User Details</h2>
                                <table class="table table-bordered">
                                    <tr>
                                        <td><strong>First Name:</strong></td>
                                        <td>{{ $request->user->first_name }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Last Name:</strong></td>
                                        <td>{{ $request->user->last_name }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>City:</strong></td>
                                        <td>{{ $request->user->city }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Address:</strong></td>
                                        <td>{{ $request->user->address }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Postcode / Zip:</strong></td>
                                        <td>{{ $request->user->postcode }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Phone:</strong></td>
                                        <td>{{ $request->user->phone }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Email Address:</strong></td>
                                        <td>{{ $request->user->email }}</td>
                                    </tr>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
