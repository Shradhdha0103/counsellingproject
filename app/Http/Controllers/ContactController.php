<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Models\contacts;
use App\Models\setting;
use App\Models\serviceMaster;

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


    //     return back()->with('success', 'Email sent successfully!');
    // }

    public function index()
    {
        $pagename = "Contact Page";
        $service_master = serviceMaster::all();
        $banner = setting::orderBy('id', 'desc')->first();
        return view('contact', compact('pagename', 'service_master', 'banner'));
    }
    public function store(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:contacts,email',
            'phone' => 'required|string|max:15',
            'message' => 'required|string',
        ], [
            // Custom error message for duplicate email
            'email.unique' => 'The email address has already been taken. Please use a different email.'
        ]);

        // If validation passes, create a new contact in the database
        try {
            $contact = contacts::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'services' => $request->input('services'),
                'message' => $request->message,
                'role' => 2  // Assuming you're capturing the message as well
            ]);

            // Send an email using Mailgun
            Mail::to('gofornirvana@gmail.com')->send(new ContactMail($contact));

            // Save contact to the database
            $contact->save();

            // Return success message
            return redirect()->back()->with('success', 'Thank you!');
        } catch (\Throwable $th) {
            // Handle any unexpected errors
            return redirect()->back()->with('error', 'An error occurred while adding the contact!');
        }
    }
}
