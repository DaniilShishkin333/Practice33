<?php

namespace App\Http\Controllers;

use App\Models\Trener;

class TrenerController extends Controller
{
    public function show($id)
    {
        $trener = Trener::findOrFail($id);
        return view('trener', compact('trener'));
    }
}
