<?php

namespace App\Http\Controllers;

use App\Models\Staff;

class StaffController extends Controller
{
    public function show($id)
    {
        $staff = Staff::findOrFail($id);
        return view('staff', compact('staff'));
    }
}
