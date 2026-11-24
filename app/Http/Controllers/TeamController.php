<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;


class TeamController extends Controller
{

    public function show($id)
    {
        $team = Team::with(['city', 'players', 'treners', 'doctors', 'staffs', 'stadiums', 'tournaments'])->findOrFail($id);

        return view('team', compact('team'));
    }

    public function create()
    {
        return view('form', [

            'isEdit' => false,

            'action' => '/teams'
        ]);
    }


    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);

        Team::create($request->all());

        return redirect('/table/teams');

    }


    public function edit($id)
    {
        $team = Team::findOrFail($id);

        return view('form', [

            'isEdit' => true,

            'item' => $team,

            'action' => '/teams/' . $team->id
        ]);
    }


    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required|string|max:255']);

        $team = Team::findOrFail($id);
 public function create()
    {
        return view('form', [

            'isEdit' => false,

            'action' => '/teams'
        ]);
    }


    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);

        Team::create($request->all());

        return redirect('/table/teams');

    }


    public function edit($id)
    {
        $team = Team::findOrFail($id);

        return view('form', [

            'isEdit' => true,

            'item' => $team,

            'action' => '/teams/' . $team->id
        ]);
    }


    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required|string|max:255']);

        $team = Team::findOrFail($id);

        $team->update($request->all());

        return redirect ('/table/teams');
    }
}
        $team->update($request->all());

        return redirect ('/table/teams');
    }
}