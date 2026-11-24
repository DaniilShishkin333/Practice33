<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    public function show($id)
{
    $doctor = Doctor::with('team')->findOrFail($id);
    
    return view('doctor', compact('doctor'));
}

public function create()
    {
        return view('form', [

            'isEdit' => false,

            'action' => '/doctors'
        ]);
    }


    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);

        Doctor::create($request->all());

        return redirect('/table/doctors');

    }


    public function edit($id)
    {
        $doctor = Doctor::findOrFail($id);

        return view('form', [

            'isEdit' => true,

            'item' => $doctor,

            'action' => '/doctors/' . $doctor->id
        ]);
    }


    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required|string|max:255']);

        $doctor = Doctor::findOrFail($id);

        $doctor->update($request->all());

        return redirect ('/table/doctors');
    }
}