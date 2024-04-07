<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SocialLinksController extends Controller
{
    public function storeGithub(Request $request)
    {
        $request->validate([
            'github' => 'required|string|max:255',
        ]);

        $user = auth()->user();
        $user->github = $request->github;
        $user->save();

        return redirect()->back()->with('success', 'GitHub username updated successfully.');
    }

    public function storeTwitter(Request $request)
    {
        $request->validate([
            'twitter' => 'required|string|max:255',
        ]);

        $user = auth()->user();
        $user->twitter = $request->twitter;
        $user->save();

        return redirect()->back()->with('success', 'X(Twitter) username updated successfully.');
    }

    public function storeSlack(Request $request)
    {
        $request->validate([
            'slack' => 'required|string|max:255',
        ]);

        $user = auth()->user();
        $user->slack = $request->slack;
        $user->save();

        return redirect()->back()->with('success', 'Slack username updated successfully.');
    }
}
