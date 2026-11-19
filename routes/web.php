<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableController;

Route::get('/', [TableController::class, 'index']);
Route::get('/table/{table}', [TableController::class, 'show']);

