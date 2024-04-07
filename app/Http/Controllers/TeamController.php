<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    // Display a form to create a new team
public function create()
{
    return view('teams.create');
}

// Store a new team in the database
public function store(Request $request)
{
    $request->validate([
        'name' => 'required|unique:teams'
    ]);

    $team = new Team();
    $team->name = $request->name;
    $team->user_id = auth()->id();
    $team->save();

    return redirect()->route('teams.index')->with('success', 'Team created successfully.');
}

// Display a list of teams for the authenticated user
public function index()
{
    $teams = auth()->user()->teams;
    return view('teams.index', compact('teams'));
}

// Display a form to edit an existing team
public function edit(Team $team)
{
    return view('teams.edit', compact('team'));
}

// Update an existing team in the database
public function update(Request $request, Team $team)
{
    $request->validate([
        'name' => 'required|unique:teams,name,' . $team->id
    ]);

    $team->name = $request->name;
    $team->save();

    return redirect()->route('teams.index')->with('success', 'Team updated successfully.');
}

// Delete an existing team from the database
public function destroy(Team $team)
{
    $team->delete();
    return redirect()->route('teams.index')->with('success', 'Team deleted successfully.');
}

}
