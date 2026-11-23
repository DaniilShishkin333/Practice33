<?php

namespace App\Http\Controllers;

use App\Models\Country;

class CountryController extends Controller
{
    public function show($id)
    {
        $country = Country::findOrFail($id);

        return view('country', compact('country'));
    }
}
