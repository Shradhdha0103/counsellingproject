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
        try {
            // Validate the incoming data
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:contacts,email',
                'phone' => 'required|string|max:15',
                'message' => 'required|string',
            ]);

            // Create a new contact in the database
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

            // Return a response (success message, redirect, etc.)
            return redirect()->back()->with('success', 'Thank you!');
        } catch (\Throwable $th) {
            // Handle any exceptions or errors
            dd($th);
            return redirect()->back()->with('error', 'An error occurred while adding the contact!');
        }
    }
}