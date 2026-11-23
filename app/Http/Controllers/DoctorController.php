<?php

namespace App\Http\Controllers;

use App\Models\Doctor;

class DoctorController extends Controller
{
    public function show($id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('doctor', compact('doctor'));
    }
}
