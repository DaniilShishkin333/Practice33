<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tournament;

class TournamentController extends Controller
{
   public function show($id)
{
    $tournament = Tournament::with('country')->findOrFail($id);
    
    return view('tournament', compact('tournament'));

}

 public function create()
    {
        return view('form', [

            'isEdit' => false,

            'action' => '/tournaments'
        ]);
    }


    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);

        Tournament::create($request->all());

        return redirect('/table/tournaments');

    }


    public function edit($id)
    {
        $tournament = Tournament::findOrFail($id);

        return view('form', [

            'isEdit' => true,

            'item' => $tournament,

            'action' => '/tournaments/' . $tournament->id
        ]);
    }


    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required|string|max:255']);

        $tournament = Tournament::findOrFail($id);

        $tournament->update($request->all());

        return redirect ('/table/tournaments');
    }
}
