<?php

use App\Http\Controllers\BuildingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/building', [BuildingController::class, 'index']);
Route::get('/building/{id}', [BuildingController::class, 'room']);
