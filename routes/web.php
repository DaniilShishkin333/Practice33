<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableController;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TrenerController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StadiumController;
use App\Http\Controllers\TournamentController;

Route::get('/', [TableController::class, 'index']);
Route::get('/about', [StaticController::class, 'about']);

Route::get('/table/{table}', [TableController::class, 'show']);
Route::get('/table/{table}/{id}', [TableController::class, 'showItem']);

Route::get('/countries/{id}', [CountryController::class, 'show']);
Route::get('/cities/{id}', [CityController::class, 'show']);
Route::get('/teams/{id}', [TeamController::class, 'show']);
Route::get('/players/{id}', [PlayerController::class, 'show']);
Route::get('/treners/{id}', [TrenerController::class, 'show']);
Route::get('/doctors/{id}', [DoctorController::class, 'show']);
Route::get('/staffs/{id}', [StaffController::class, 'show']);
Route::get('/stadiums/{id}', [StadiumController::class, 'show']);
Route::get('/tournaments/{id}', [TournamentController::class, 'show']);