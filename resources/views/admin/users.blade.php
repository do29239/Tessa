@extends('layouts.MasterAdmin')

@section('content')
    <div class="content">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h4 class="card-title">Users</h4>
                    </div>
                    <div class="card-body">
                        @if(count($users) > 0)
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover text-center">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr onclick="window.location='{{ route('show_users', $user) }}';" style="cursor: pointer;">
                                            <td>{{ $user->first_name }}</td>
                                            <td>{{ $user->last_name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Actions">
                                                    <form method="POST" action="{{ route('user.destroy', ['user' => $user]) }}" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                    <form action="{{ route('show_user', ['user' => $user]) }}" style="display:inline;">
                                                        @csrf
                                                        <button type="submit" class="btn btn-primary btn-sm">View</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <p class="text-center">No users found.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
