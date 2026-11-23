<?php

namespace App\Http\Controllers;

use App\Models\Tournament;

class TournamentController extends Controller
{
    public function show($id)
    {
        $tournament = Tournament::findOrFail($id);
        return view('tournament', compact('tournament'));
    }
}
