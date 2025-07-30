<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
       public function sendEmail(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone-number' => 'required',
            'message' => 'required|string',
        ]);

        $name = $validated['name'];
        $email = $validated['email'];
        $phonenumber = $validated['phone-number'];
        $messageContent = $validated['message'];

        // Send the email
        Mail::to('m7mdgidrah@gmail.com')->send(new ContactMail($name, $email,$phonenumber, $messageContent));

        return redirect()->back()->with('success', 'Your message has been sent!');
    }
}
