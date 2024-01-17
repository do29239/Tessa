<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Stylist_Profile;
use App\Models\User;

class StylistController extends Controller
{
    public function index()
    {
        $stylists = Stylist_Profile::all();

        return view('admin.stylists', compact('stylists'));
    }

    public function show(Stylist_Profile $stylist)
    {
        return view('admin.show-stylist',compact('stylist'));
    }

    public function destroy(Stylist_Profile $stylist)
    {
        $stylist->delete();

        return redirect()->back()->with('success', 'Stylist deleted successfully');
    }
}
