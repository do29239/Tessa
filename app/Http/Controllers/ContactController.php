<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Jobs\SendContactEmail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(ContactRequest $request)
    {
        // Handle the validated request data
        $data = $request->validated();

        SendContactEmail::dispatch($data);

        // Return a response
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
