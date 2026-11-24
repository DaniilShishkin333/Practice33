<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stadium;

class StadiumController extends Controller
{
    public function show($id)
    {
        $stadium = Stadium::findOrFail($id);
        
        return view('stadium', compact('stadium'));
    }


    public function create()
    {
        return view('form', [

            'isEdit' => false,

            'action' => '/stadiums'
        ]);
    }


    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);

        Stadium::create($request->all());

        return redirect('/table/stadiums');

    }


    public function edit($id)
    {
        $stadium = Stadium::findOrFail($id);

        return view('form', [

            'isEdit' => true,

            'item' => $stadium,

            'action' => '/stadiums/' . $stadium->id
        ]);
    }


    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required|string|max:255']);

        $stadium = Stadium::findOrFail($id);

        $stadium->update($request->all());

        return redirect ('/table/stadiums');
    }
}