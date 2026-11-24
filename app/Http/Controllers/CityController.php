<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
   public function show($id)
{
    $city = City::with('country')->findOrFail($id);
    
    return view('city', compact('city'));
}


    public function create()
    {
        return view('form', [

            'isEdit' => false,

            'action' => '/cities'
        ]);
    }


    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);

        City::create(['name' => $request->name]);

        return redirect('/table/cities');

    }


    public function edit($id)
    {
        $city = City::findOrFail($id);

        return view('form', [

            'isEdit' => true,

            'item' => $city,

            'action' => '/cities/' . $city->id
        ]);
    }


    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required|string|max:255']);

        $city = City::findOrFail($id);

        $city->update(['name' => $request->name]);

        return redirect ('/table/cities');
    }
}