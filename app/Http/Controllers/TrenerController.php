<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trener;

class TrenerController extends Controller
{
    public function show($id)
{
    $trener = Trener::with('team')->findOrFail($id);

    return view('trener', compact('trener'));
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

        Trener::create($request->all());

        return redirect('/table/treners');

    }


    public function edit($id)
    {
        $trener= Trener::findOrFail($id);

        return view('form', [

            'isEdit' => true,

            'item' => $trener,

            'action' => '/treners/' . $trener->id
        ]);
    }


    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required|string|max:255']);

        $trener = Trener::findOrFail($id);

        $trener->update($request->all());

        return redirect ('/table/treners');
    }
}