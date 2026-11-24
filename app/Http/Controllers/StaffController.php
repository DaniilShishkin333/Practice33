<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{
  public function show($id)
{
    $staff = Staff::with('team')->findOrFail($id);
    
    return view('staff', compact('staff'));
}

 public function create()
    {
        return view('form', [

            'isEdit' => false,

            'action' => '/staffs'
        ]);
    }


    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);

        Staff::create($request->all());

        return redirect('/table/staffs');

    }


    public function edit($id)
    {
        $staff = Staff::findOrFail($id);

        return view('form', [

            'isEdit' => true,

            'item' => $staff,

            'action' => '/staffs/' . $staff->id
        ]);
    }


    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required|string|max:255']);

        $staff = Staff::findOrFail($id);

        $staff->update($request->all());

        return redirect ('/table/staffs');
    }
}