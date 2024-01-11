<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestStylistRequest;
use App\Mail\RequestDenied;
use App\Models\Request_Stylist;
use App\Models\_Profile;
use App\Models\Stylist_Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RequestStylistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requests=Request_Stylist::all();
        $users=User::all();
        return view('admin.stylist-request',compact('requests','users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RequestStylistRequest $request)
    {
        $validatedData = $request->validated();

        // Set the user_id when creating the Request_Stylist record
        $request = auth()->user()->request()->create($validatedData);

        return redirect()->back()->with('message', 'Request Made Successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(Request_Stylist $request)
    {
        return view('admin.show-stylist-request', compact('request'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function approveRequest(Request_Stylist $request)
    {
        // Assuming there's a user associated with the request
        $user = $request->user;

        // Check if the user exists and has the role 0
        if ($user && $user->role === 0) {
            // Move data to stylist_profiles table
            Stylist_Profile::create([
                'user_id' => $user->id,
                'saloon_name' => $request->saloon_name,
                'saloon_city' => $request->saloon_city,
                'saloon_address' => $request->saloon_address,
                'saloon_phone' => $request->saloon_phone,
                // Add other fields as needed
            ]);

            // Delete the record from request_stylist table
            $request->delete();

            // Change the user's role to 2
            $request->user()->update(['role' => 2]);

            // Additional logic if needed

            // Redirect back with a success message
            return redirect()->back()->with('success', 'Request approved successfully');
        }

        // Redirect back with an error message if the user does not exist or has a different role
        return redirect()->back()->with('error', 'Unable to approve request');
    }
    public function disapproveRequest(Request_Stylist $request)
    {
        // Assuming there's a user associated with the request
        $user = $request->user;

        // Check if the user exists and has the role 0
        if ($user && $user->role === 0) {
            // Delete the record from request_stylist table
            $request->delete();

            // Send an email to the user
            Mail::to($user->email)->send(new RequestDenied($user)); // Assuming you have a Mailable named RequestDenied
            //Mail::to($request->user())->send(new OrderShipped($order));
            // Additional logic if needed

            // Redirect back with a success message
            return redirect()->back()->with('success', 'Request denied successfully');
        }

        // Redirect back with an error message if the user does not exist or has a different role
        return redirect()->back()->with('error', 'Unable to deny request');
    }
}
