<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    public function upload(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'caption' => 'nullable|string|max:1000',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048', // Validate image file
        ]);

        // Handle the uploaded file
        if ($request->hasFile('image')) {
            $image = $request->file('image');

            // Generate a unique file name with extension
            $imageName = Str::random(10) . '.' . $image->getClientOriginalExtension();

            // Store the file in the 'public/images' directory
            $path = $image->storeAs('public/images', $imageName);

            // Generate the URL for the uploaded image
            $imageUrl = Storage::url($path);

            // Create a new Gallery record
            $gallery = Gallery::create([
                'name' => $request->input('name'),
                'image' => $imageUrl,
                'caption' => $request->input('caption', ''), // Default to an empty string if not provided
            ]);

            // Return the newly created gallery record as a JSON response
            return response()->json($gallery, 201);
        }

        return response()->json(['error' => 'No file uploaded'], 400);
    }
}
