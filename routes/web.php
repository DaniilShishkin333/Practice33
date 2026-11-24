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


Route::get('/cities/create', [CityController::class, 'create']);
Route::post('/cities', [CityController::class, 'store']);
Route::get('/cities/{id}/edit', [CityController::class, 'edit']);
Route::put('/cities/{id}', [CityController::class, 'update']);
Route::get('/cities/{id}', [CityController::class, 'show']);


Route::get('/countries/create', [CountryController::class, 'create']);
Route::post('/countries', [CountryController::class, 'store']);
Route::get('/countries/{id}/edit', [CountryController::class, 'edit']);
Route::put('/countries/{id}', [CountryController::class, 'update']);
Route::get('/countries/{id}', [CountryController::class, 'show']);


Route::get('/players/create', [PlayerController::class, 'create']);
Route::post('/players', [PlayerController::class, 'store']);
Route::get('/players/{id}/edit', [PlayerController::class, 'edit']);
Route::put('/players/{id}', [PlayerController::class, 'update']);
Route::get('/players/{id}', [PlayerController::class, 'show']);


Route::get('/teams/create', [TeamController::class, 'create']);
Route::post('/teams', [TeamController::class, 'store']);
Route::get('/teams/{id}/edit', [TeamController::class, 'edit']);
Route::put('/teams/{id}', [TeamController::class, 'update']);
Route::get('/teams/{id}', [TeamController::class, 'show']);


Route::get('/treners/create', [TrenerController::class, 'create']);
Route::post('/treners', [TrenerController::class, 'store']);
Route::get('/treners/{id}/edit', [TrenerController::class, 'edit']);
Route::put('/treners/{id}', [TrenerController::class, 'update']);
Route::get('/treners/{id}', [TrenerController::class, 'show']);


Route::get('/doctors/create', [DoctorController::class, 'create']);
Route::post('/doctors', [DoctorController::class, 'store']);
Route::get('/doctors/{id}/edit', [DoctorController::class, 'edit']);
Route::put('/doctors/{id}', [DoctorController::class, 'update']);
Route::get('/doctors/{id}', [DoctorController::class, 'show']);


Route::get('/staffs/create', [StaffController::class, 'create']);
Route::post('/staffs', [StaffController::class, 'store']);
Route::get('/staffs/{id}/edit', [StaffController::class, 'edit']);
Route::put('/staffs/{id}', [StaffController::class, 'update']);
Route::get('/staffs/{id}', [StaffController::class, 'show']);


Route::get('/tournaments/create', [TournamentController::class, 'create']);
Route::post('/tournaments', [TournamentController::class, 'store']);
Route::get('/tournaments/{id}/edit', [TournamentController::class, 'edit']);
Route::put('/tournaments/{id}', [TournamentController::class, 'update']);
Route::get('/tournaments/{id}', [TournamentController::class, 'show']);


Route::get('/stadiums/create', [StadiumController::class, 'create']);
Route::post('/stadiums', [StadiumController::class, 'store']);
Route::get('/stadiums/{id}/edit', [StadiumController::class, 'edit']);
Route::put('/stadiums/{id}', [StadiumController::class, 'update']);
Route::get('/stadiums/{id}', [StadiumController::class, 'show']);

Route::get('/table/{table}', [TableController::class, 'show']);
Route::get('/table/{table}/{id}', [TableController::class, 'showItem']);