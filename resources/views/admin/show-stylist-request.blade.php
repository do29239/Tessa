@extends('layouts.MasterAdmin')

@section('content')
<style>
    .text-center-custom {
        text-align: center;
    }
    .product-image {
        max-width: 100px;
        max-height: 100px;
    }
</style>

<div class="content">
    <div class="row justify-content-center mt-4">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header d-flex justify-content-between align-items-center">
                    <form action="{{ route('requests.index') }}" class="d-inline">
                        <button type="submit" class="btn btn-primary btn-sm">Stylist Requests</button>
                    </form>

                    <h2 class="card-title text-center-custom">Request Details</h2>

                    <div>
                        <form action="{{ route('requests.update', $stylistRequest) }}" method="POST" class="d-inline">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-success btn-sm">Approve</button>
                        </form>

                        <form action="{{ route('requests.destroy', $stylistRequest) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Disapprove</button>
                        </form>
                    </div>
                </div>

                <div class="card-body">
                    <h2>Stylist Details</h2>
                    <table class="table table-bordered">
                        <tr>
                            <td><strong>Saloon Name:</strong></td>
                            <td>{{ $stylistRequest->saloon_name ?? '—' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Saloon City:</strong></td>
                            <td>{{ $stylistRequest->saloon_city ?? '—' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Saloon Address:</strong></td>
                            <td>{{ $stylistRequest->saloon_address ?? '—' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Saloon Phone:</strong></td>
                            <td>{{ $stylistRequest->saloon_phone ?? '—' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Message:</strong></td>
                            <td>{!! nl2br(e($stylistRequest->message ?? '')) !!}</td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-4">
        <div class="col-md-12">
            <div class="card card-half">
                <div class="card-body">
                    <h2>User Details</h2>
                    <table class="table table-bordered">
                        <tr>
                            <td><strong>First Name:</strong></td>
                            <td>{{ $stylistRequest->user?->first_name ?? '—' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Last Name:</strong></td>
                            <td>{{ $stylistRequest->user?->last_name ?? '—' }}</td>
                        </tr>
                        <tr>
                            <td><strong>City:</strong></td>
                            <td>{{ $stylistRequest->user?->city ?? '—' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Address:</strong></td>
                            <td>{{ $stylistRequest->user?->address ?? '—' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Postcode / Zip:</strong></td>
                            <td>{{ $stylistRequest->user?->postcode ?? '—' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Phone:</strong></td>
                            <td>{{ $stylistRequest->user?->phone ?? '—' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Email Address:</strong></td>
                            <td>{{ $stylistRequest->user?->email ?? '—' }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
