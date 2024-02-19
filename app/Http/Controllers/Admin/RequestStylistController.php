<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestStylistRequest;
use App\Mail\RequestDenied;
use App\Models\RequestStylist;
use App\Models\StylistProfile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class RequestStylistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requests = RequestStylist::with('user')->get();
        return view('admin.stylist-request', compact('requests'));
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
        $request->user()->update(['request_submitted' => true]);

        return redirect()->route('show_products')->with('message', 'Request Made Successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(RequestStylist $request)
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

//    public function update(Request_Stylist $request)
//    {
//        // Assuming there's a user associated with the request
//        $user = $request->user;
//
//        // Check if the user exists and has the role 0
//        if ($user && $user->role === 0) {
//            DB::beginTransaction();
//
//            try {
//                // First, change the user's role to 2
//
//
//                // Then, move data to stylist_profiles table
//                $stylistProfile = Stylist_Profile::make([
//                    'user_id' => $user->id,
//                    'saloon_name' => $request->saloon_name,
//                    'saloon_city' => $request->saloon_city,
//                    'saloon_address' => $request->saloon_address,
//                    'saloon_phone' => $request->saloon_phone,
//                    // Add other fields as needed
//                ]);
//                $request->user->update(['role' => 2]);
//                // Save the created profile
//                $stylistProfile->save();
//
//                // Delete the record from request_stylist table
//                $request->delete();
//
//                // Commit the transaction
//                DB::commit();
//
//                // Redirect back with a success message
//                return redirect()->back()->with('success', 'Request approved successfully');
//            } catch (\Exception $e) {
//                // Rollback the transaction in case of an error
//                DB::rollBack();
//
//                // Handle the exception (e.g., log it, show an error message)
//                // Redirect back with an error message
//                return redirect()->back()->with('error', 'Unable to approve request');
//            }
//        } else {
//            // Redirect back with an error message if the user does not exist or has a different role
//            return redirect()->back()->with('error', 'Unable to approve request');
//        }
//    }




    public function update(RequestStylist $request)
    {
        // Assuming there's a user associated with the request
        $user = $request->user;

        // Check if t.he user exists and has the role 0
        if ($user && $user->role === 0) {
            DB::beginTransaction();

            try {

            // Move data to stylist_profiles table
            $s = StylistProfile::make([
                'user_id' => $user->id,
                'saloon_name' => $request->saloon_name,
                'saloon_city' => $request->saloon_city,
                'saloon_address' => $request->saloon_address,
                'saloon_phone' => $request->saloon_phone,
                // Add other fields as needed
            ]);


                // Save the created profile
                $s->save();

                // Delete the record from request_stylist table
                $request->delete();
                $request->user()->update(['role' => 2]);


                // Commit the transaction
                DB::commit();

                // Redirect back with a success message
                return redirect()->back()->with('success', 'Request approved successfully');
            } catch (\Exception $e) {
                // Rollback the transaction in case of an error
                DB::rollBack();

                // Handle the exception (e.g., log it, show an error message)
                // Redirect back with an error message
                return redirect()->back()->with('error', 'Unable to approve request');
            }
        } else {
            // Redirect back with an error message if the user does not exist or has a different role
            return redirect()->back()->with('error', 'Unable to approve request');
        }
    }







    public function destroy(Request_Stylist $request)
    {
        // Assuming there's a user associated with the request
        $user = $request->user;

        // Check if the user exists and has the role 0
        if ($user && $user->role === 0) {
            // Delete the record from request_stylist table
            $request->delete();
            // Send an email to the user
            //Mail::to($user->email)->send(new RequestDenied($user)); // Assuming you have a Mailable named RequestDenied
            //// Additional logic if needed

            // Redirect back with a success message
            return redirect()->back()->with('success', 'Request denied successfully');
        }

        // Redirect back with an error message if the user does not exist or has a different role
        return redirect()->back()->with('error', 'Unable to deny request');
    }
}
