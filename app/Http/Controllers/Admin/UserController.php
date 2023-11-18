<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('role', 0)->get();
        return view('admin.show-users', compact('users'));
    }

    public function approve_account($id)
    {
        $user = User::find($id);
        $user->usertype = 2;
        $user->save();
        return redirect()->back()->with('success', 'User approved successfully');
    }
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin.show-users')->with('success', 'User deleted successfully');
    }
}
