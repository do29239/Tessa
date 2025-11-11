@extends('layouts.MasterAdmin')

@section('content')
    <style>
        .text-center-custom { text-align: center; }
    </style>

    <div class="content">
        <div class="row justify-content-center mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-center-custom">Stylist Requests</h4>
                        <div class="text-right">
                            <form action="{{ route('show_stylists') }}">
                                @csrf
                                <button type="submit" class="btn btn-primary btn-sm">Stylists</button>
                            </form>
                        </div>
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
                                        <th class="text-center-custom">Message</th>
                                        <th class="text-center-custom">Approve</th>
                                        <th class="text-center-custom">Disapprove</th>
                                        <th class="text-center-custom">View</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($requests as $request)
                                        {{--                                        @php
                                                                                    $message = $request->message;
                                                                                    $shortMessage = strlen($message) > 15 ? substr($message, 0, 15) . '...' : $message;
                                                                                @endphp --}}
                                        <tr class="text-center">
                                            <td class="text-center-custom">{{ $request->user?->first_name ?? '—' }}</td>
                                            <td class="text-center-custom">{{ $request->user?->last_name ?? '—' }}</td>
                                            <td class="text-center-custom">{{ $request->user?->email ?? '—' }}</td>
                                            <td class="text-center-custom">{{ $request->saloon_name ?? '—' }}</td>
                                            <td class="text-center-custom">{{ $request->saloon_city ?? '—' }}</td>
                                            <td class="text-center-custom">{{ $request->saloon_address ?? '—' }}</td>
                                            <td class="text-center-custom">{{ $request->saloon_phone ?? '—' }}</td>
                                            {{--                                            <td>
                                                                                            <span class="short-message">{{ $shortMessage }}</span>
                                                                                            <span class="full-message" style="display: none;">{{ $message }}</span>
                                                                                            @if (strlen($message) > 15)
                                                                                                <button class="read-more-btn">Read More</button>
                                                                                                <button class="show-less-btn" style="display: none;">Show Less</button>
                                                                                            @endif
                                                                                        </td> --}}
                                            <td class="text-center-custom">
                                                <form action="{{ route('requests.update', $request) }}" method="POST">
                                                    @csrf
                                                    @method('PUT') {{-- This line specifies that the form is making a PUT request --}}
                                                    <button type="submit" class="btn btn-primary btn-sm">Approve</button>
                                                </form>
                                            </td>
                                            <td class="text-center-custom">
                                                <form action="{{ route('requests.destroy', $request) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE') {{-- This specifies that the form is making a DELETE request --}}
                                                    <button type="submit" class="btn btn-primary btn-sm">Disapprove</button>
                                                </form>
                                            </td>
                                            <td class="text-center-custom">
                                                <a href="{{ route('requests.show', $request) }}" class="btn btn-primary btn-sm">View</a>
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

{{-- @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.read-more-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const td = this.closest('td');
                    const shortMessageElement = td.querySelector('.short-message');
                    const fullMessageElement = td.querySelector('.full-message');
                    const showLessButton = td.querySelector('.show-less-btn');

                    shortMessageElement.style.display = 'none';
                    fullMessageElement.style.display = 'inline';
                    this.style.display = 'none';
                    showLessButton.style.display = 'inline';
                });
            });

            document.querySelectorAll('.show-less-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const td = this.closest('td');
                    const fullMessageElement = td.querySelector('.full-message');
                    const shortMessageElement = td.querySelector('.short-message');
                    const readMoreButton = td.querySelector('.read-more-btn');

                    fullMessageElement.style.display = 'none';
                    shortMessageElement.style.display = 'inline';
                    this.style.display = 'none';
                    readMoreButton.style.display = 'inline';
                });
            });
        });
    </script>
@endpush --}}
