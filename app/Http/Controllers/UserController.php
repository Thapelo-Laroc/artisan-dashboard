<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class UserController extends Controller
{
    public function dashboard()
    {
        $videos = Video::all();

        return view('lessons', compact('videos'));
    }

    public function showDashboard()
{
    $videos = Video::all();
    return view('lessons', compact('videos'));
}
}