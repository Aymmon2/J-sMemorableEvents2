<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AppointmentRequest;


class FormController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'occasion' => 'required|string|max:255',
            'themecolors' => 'required|string|max:255',
            'event' => 'required|string|max:255',
            'people' => 'required|integer',
            'message' => 'required|string',
        ]);

        // Save the form data to the database
        AppointmentRequest::create($validatedData);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
