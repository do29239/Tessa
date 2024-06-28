<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(ContactRequest $request)
    {
        // Handle the validated request data
        $data = $request->validated();

        // Send email (optional)
        Mail::to(config('mail.from.address'))->send(new ContactMail($data));

        // Return a response
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
