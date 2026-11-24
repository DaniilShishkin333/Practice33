<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function show($id)
    {
        $country = Country::findOrFail($id);

        return view('country', compact('country'));
    }

    public function create()
    {
        return view('form', [

            'isEdit' => false,

            'action' => '/countries'
        ]);
    }


    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);

        Country::create(['name' => $request->name]);

        return redirect('/table/countries');

    }


    public function edit($id)
    {
        $country = Country::findOrFail($id);

        return view('form', [

            'isEdit' => true,

            'item' => $country,

            'action' => '/countries/' . $country->id
        ]);
    }


    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required|string|max:255']);

        $country = Country::findOrFail($id);

        $country->update(['name' => $request->name]);

        return redirect ('/table/countries');
    }
}