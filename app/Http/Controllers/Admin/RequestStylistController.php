<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestStylistRequest;
use App\Jobs\SendAdminNewRequestEmail;
use App\Models\RequestStylist;
use App\Services\RequestStylistService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RequestStylistController extends Controller
{
    protected $requestStylistService;

    public function __construct(RequestStylistService $requestStylistService)
    {
        $this->requestStylistService = $requestStylistService;
    }

    public function index()
    {
        $requests = $this->requestStylistService->getAllRequests();
        return view('admin.stylist-request', compact('requests'));
    }

//    public function store(RequestStylistRequest $request)
//    {
//        $validatedData = $request->validated();
//        $this->requestStylistService->createRequest(auth()->user(), $validatedData);
//        return redirect()->route('show_products')->with('message', 'Request Made Successfully');
//    }

    public function store(RequestStylistRequest $request)
    {
        // Validate the stylist code separately or add it to existing validated data
        $validatedData = $request->validated();
        $stylistCodeValidation = Validator::make($request->all(), [
            'stylist_code' => 'nullable|string'
        ])->validate();

        // Merge stylist code validation results with existing validated data
        $validatedData = array_merge($validatedData, $stylistCodeValidation);

        if (!empty($validatedData['stylist_code'])) {
            try {
                if ($this->requestStylistService->redeemStylistCode($validatedData['stylist_code'], $validatedData)) {
                    return redirect()->route('main')->with('success', 'You have successfully registered as a stylist.');
                }
            } catch (\Exception $e) {
                // If the code is invalid, inform the user and optionally continue the regular request process
                return redirect()->back()->with('error', 'Invalid or expired code.');
            }
        }

        // Proceed with creating a stylist request if no code is provided or if the code redemption fails
        $this->requestStylistService->createRequest(auth()->user(), $validatedData);
        session()->flash('request_submitted');
        return redirect()->route('main')->with('message', 'Your request has been submitted for review.');
    }


    public function show(RequestStylist $request)
    {
        return view('admin.show-stylist-request', compact('request'));
    }

    public function update(RequestStylist $request)
    {
        try {
            $this->requestStylistService->approveRequest($request);
            return redirect()->route('requests.index')->with('success', 'Request approved successfully');
        } catch (\Exception $e) {
            return redirect()->route('requests.index')->with('error', 'Unable to approve request: ' . $e->getMessage());
        }
    }

    public function destroy(RequestStylist $request)
    {
        try {
            $this->requestStylistService->denyRequest($request);
            return redirect()->route('requests.index')->with('success', 'Request denied successfully');
        } catch (\Exception $e) {
            return redirect()->route('requests.index')->with('error', 'Unable to deny request: ' . $e->getMessage());
        }
    }

//    public function registerStylist(RequestStylistRequest $request)
//    {
//        $validatedData = $request->validated();
//
//        if (!empty($validatedData['stylist_code'])) {
//            // Attempt to redeem the stylist code
//            try {
//                $stylistService = new RequestStylistService();
//                if ($stylistService->redeemStylistCode($validatedData['stylist_code'], $request->user()->id)) {
//                    // Directly create the stylist profile and assign the stylist role
//                    return redirect()->route('dashboard')->with('success', 'You have successfully registered as a stylist.');
//                }
//            } catch (\Exception $e) {
//                // If code is invalid, continue to normal request submission
//                return redirect()->back()->with('error', 'Invalid or expired code. Your request is submitted for review.');
//            }
//        }
//
//        // Code not provided or redeem failed, submit for admin approval
//        $this->requestStylistService->createRequest($request->user(), $validatedData);
//
//        return redirect()->route('dashboard')->with('message', 'Your request has been submitted for review.');
//    }


    public function createCode($distributorId)
    {
        try {
            $code = $this->requestStylistService->generateStylistCode($distributorId);
            return redirect()->back()->with('code', $code);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to generate code: ' . $e->getMessage());
        }
    }


}


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
