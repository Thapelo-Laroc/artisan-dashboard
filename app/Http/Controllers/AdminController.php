<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Video;

class AdminController extends Controller
{
    

    public function showUserList()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function deleteuser($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            // Optionally, add a success message or redirect to a different page
            return redirect()->back()->with('success', 'User deleted successfully.');
        } else {
            // Handle the case when the user is not found
            return redirect()->back()->with('error', 'User not found.');
        }
    }


    public function postVideo(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'youtube_link' => 'required|url',
        ]);
    
        Video::create([
            'title' => $request->title,
            'description' => $request->description,
            'youtube_link' => $request->youtube_link,
        ]);
    
        return redirect()->back()->with('success', 'Video posted successfully.');
    }

}
