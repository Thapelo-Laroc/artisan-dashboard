<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserAssignmentController extends Controller
{
    // Show the user assignment form
    public function showAssignmentForm()
    {
        // Get all the users except the current user
        $users = User::where('id', '!=', Auth::id())->get();

        return view('assign-user', compact('users'));
    }

    // Handle the user assignment request
    public function assignUser(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'parent_id' => ['required', 'exists:users,id'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Get the current authenticated user
        $user = Auth::user();

        // Get the parent user by their id
        $parent = User::find($request->parent_id);

        // Update the user's parent id and parent name in the database
        $user->update(['parent_id' => $request->parent_id, 'parent_name' => $parent->name]);


        // Redirect to the dashboard with a success message
        return redirect()->route('home')->with('status', 'User assigned successfully.');
    }

    // Handle the user unassignment request
    public function unassignUser()
    {
        // Get the current authenticated user
        $user = Auth::user();

        // Update the user's parent id and parent name to null in the database
        $user->update(['parent_id' => null, 'parent_name' => null]);

        // Redirect to the dashboard with a success message
        return redirect()->route('home')->with('status', 'User unassigned successfully.');
    }

}
