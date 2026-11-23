<?php

namespace App\Http\Controllers;

use App\Models\Team;

class TeamController extends Controller
{
    public function show($id)
    {
        $team = Team::findOrFail($id);
        return view('team', compact('team'));
    }
}
