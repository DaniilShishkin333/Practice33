<?php

namespace App\Http\Controllers;

use App\Models\Player;

class PlayerController extends Controller
{
    public function show($id)
    {
        $player = Player::findOrFail($id);
        return view('player', compact('player'));
    }
}
