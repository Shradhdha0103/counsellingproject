<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function showConsultationForm()
    {
        return view('consult');
    }

    public function bookConsultation(Request $request)
    {
        // Validate form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
        ]);

        // Jane App API endpoint (replace with actual endpoint)
        $url = 'https://api.janeapp.com/v1/consultations';  // Example endpoint

        // Data to send to Jane App
        $data = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'api_key' => env('JANE_APP_API_KEY'), // Your API key from Jane App
        ];

        // Send data to Jane App API
        $response = Http::post($url, $data);

        // Check for success
        if ($response->successful()) {
            return response()->json([
                'message' => 'Consultation successfully booked in Jane App!',
                'data' => $response->json(),
            ]);
        } else {
            return response()->json([
                'message' => 'Failed to book consultation.',
                'error' => $response->json(),
            ], $response->status());
        }
    }
}