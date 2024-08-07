<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StylistProfile;
use App\Models\User;
use App\Services\StylistService;
use Illuminate\Support\Facades\Auth;

class StylistController extends Controller
{
    protected $stylistService;

    public function __construct(StylistService $stylistService)
    {
        $this->stylistService = $stylistService;
    }

    public function index()
    {
        $stylists = $this->stylistService->getAllStylists();
        return view('admin.stylists', ['stylists'=> $this->stylistService->getAllStylists()]);
    }

    public function show(StylistProfile $stylist)
    {
        $user=$stylist->user;
        // Since $stylist is already resolved through route model binding, we don't need to fetch it again.
        return view('admin.show-stylist', compact('user'));
    }

    public function destroy(StylistProfile $stylist)
    {
        $this->stylistService->deleteStylist($stylist);
        return redirect()->back()->with('success', 'Stylist deleted successfully');
    }
}

