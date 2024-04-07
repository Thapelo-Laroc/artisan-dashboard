<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class FileUploadController extends Controller
{
    // Show the file upload form
    public function showUploadForm()
    {
        return view('upload-file');
    }

    // Handle the file upload request
    public function uploadFile(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'file' => ['required', 'file', 'max:2048'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Get the current authenticated user
        $user = Auth::user();

        // Get the current authenticated user as the parent user
        $parent = Auth::user();

        // Check if the user already has a file and delete it from the storage
        if (!is_null($user->file_path)) {
            Storage::delete($user->file_path);
        }

        // Get the original file name and extension
        $original_name = $request->file('file')->getClientOriginalName();

        // Store the file with the original name and extension
        $file_path = $request->file('file')->storeAs('public/uploads', $original_name);

        // Update the user's file path in the database
        $user->update(['file_path' => $file_path]);

        // Update the file path of all the child users of the parent user
        $parent->children()->update(['file_path' => $file_path]);

        // Redirect to the dashboard with a success message
        return redirect()->route('home')->with('status', 'File uploaded successfully.');
    }
}
