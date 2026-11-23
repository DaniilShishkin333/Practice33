<?php

namespace App\Http\Controllers;

use App\Models\Stadium;

class StadiumController extends Controller
{
    public function show($id)
    {
        $stadium = Stadium::findOrFail($id);
        return view('stadium', compact('stadium'));
    }
}
