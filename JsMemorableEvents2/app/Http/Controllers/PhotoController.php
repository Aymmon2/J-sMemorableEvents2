<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo; // Assuming you have a Photo model

class PhotoController extends Controller
{
    public function update(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust max file size as needed
        ]);

        // Get the file from the request
        $file = $request->file('photo');

        // Generate a unique name for the file
        $fileName = time() . '_' . $file->getClientOriginalName();

        // Move the file to the storage location (public storage in this case)
        $file->storeAs('public/photos', $fileName);

        // Update the database with the new file name
        // Assuming you have a Photo model with a 'filename' attribute
        $photo = new Photo();
        $photo->filename = $fileName;
        $photo->save();

        // Redirect or return a response as needed
        return redirect()->back()->with('success', 'Photo uploaded successfully.');
    }
}
