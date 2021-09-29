<?php

use App\Http\Controllers\CharacterController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WeaponController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('users', UserController::class);
Route::resource('maps', MapController::class);
Route::resource('characters', CharacterController::class);
Route::resource('rooms', RoomController::class);
Route::resource('weapons', WeaponController::class);