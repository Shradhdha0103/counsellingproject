<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Models\contacts;

class ContactController extends Controller
{
    // public function send(Request $request)
    // {
    //     dd($request->all());
    //     // Validation
    //     $validated = $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'message' => 'required',
    //     ]);

    //     // Sending email
    //     Mail::to('shradha.webappdev@gmail.com')->send(new ContactMail($validated));

    //     return back()->with('success', 'Email sent successfully!');
    // }

    public function store(Request $request)
    {
        try {
            // Validate the incoming data
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:contacts,email',  // Make sure the table name is 'contacts'
                'phone' => 'required|string|max:15',  // Assuming you want to capture phone as well
                'message' => 'required|string', // Validate the message field
            ]);

            // Create a new contact in the database using the Contact model
            $contact = contacts::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,  // Assuming you're collecting the phone number
                'message' => $request->message, // Assuming you're capturing the message as well
            ]);

            // Return a response (success message, redirect, etc.)
            return redirect()->back()->with('success', 'Thank you !');
        } catch (\Throwable $th) {
            // dd($th);
            // Handle any exceptions or errors
            return redirect()->back()->with('error', 'An error occurred while adding the contact!');
        }
    }
}
