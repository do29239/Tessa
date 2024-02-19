<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StylistProfile;
use App\Models\User;

class StylistController extends Controller
{
    public function index()
    {
        $stylists = StylistProfile::all();

        return view('admin.stylists', compact('stylists'));
    }

    public function show(StylistProfile $stylist)
    {
        return view('admin.show-stylist',compact('stylist'));
    }

    public function destroy(StylistProfile $stylist)
    {
        $stylist->delete();

        return redirect()->back()->with('success', 'Stylist deleted successfully');
    }
}
