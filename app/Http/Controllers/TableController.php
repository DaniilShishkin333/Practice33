<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index()
    {
        $counts = [
            'countries' => \App\Models\Country::count(),
            'cities' => \App\Models\City::count(),
            'teams' => \App\Models\Team::count(),
            'players' => \App\Models\Player::count(),
            'treners' => \App\Models\Trener::count(),
            'doctors' => \App\Models\Doctor::count(),
            'staffs' => \App\Models\Staff::count(),
            'stadiums' => \App\Models\Stadium::count(),
            'tournaments' => \App\Models\Tournament::count(),
        ];

        return view('welcome', compact('counts'));
    }

    
    public function show($table)
    {
        $models = [
            'countries' => \App\Models\Country::class,
            'cities' => \App\Models\City::class,
            'teams' => \App\Models\Team::class,
            'players' => \App\Models\Player::class,
            'treners' => \App\Models\Trener::class,
            'doctors' => \App\Models\Doctor::class,
            'staffs' => \App\Models\Staff::class,
            'stadiums' => \App\Models\Stadium::class,
            'tournaments' => \App\Models\Tournament::class,
        ];

        if (!isset($models[$table])) {
            abort(404);
        }

        $modelClass = $models[$table];
        $records = $modelClass::all();

        return view('table', compact('table', 'records'));
    }

    public function showItem($table, $id)
    {
        $models = [
            'countries' => \App\Models\Country::class,
            'cities' => \App\Models\City::class,
            'teams' => \App\Models\Team::class,
            'players' => \App\Models\Player::class,
            'treners' => \App\Models\Trener::class,
            'doctors' => \App\Models\Doctor::class,
            'staffs' => \App\Models\Staff::class,
            'stadiums' => \App\Models\Stadium::class,
            'tournaments' => \App\Models\Tournament::class,
        ];

        if (!isset($models[$table])){
            abort(404);
        }

        $modelClass = $models[$table];
        $record = $modelClass::findOrFail($id);

        
        return view('item', compact('table', 'record'));
    }
}