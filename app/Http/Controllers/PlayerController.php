<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function show($id)
{
    $player = Player::with(['team', 'city'])->findOrFail($id);

    return view('player', compact('player'));
}

    public function create()
    {
        return view('form', [

            'isEdit' => false,

            'action' => '/players'
        ]);
    }


    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);

        Player::create($request->all());

        return redirect('/table/players');

    }


    public function edit($id)
    {
        $players = Player::findOrFail($id);

        return view('form', [

            'isEdit' => true,

            'item' => $players,

            'action' => '/players/' . $players->id
        ]);
    }


    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required|string|max:255']);

        $player = Player::findOrFail($id);

        $player->update($request->all());

        return redirect ('/table/players');
    }
}