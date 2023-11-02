<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BicycleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [BicycleController::class, 'index']);
Route::post('/', [BicycleController::class, 'store'])->name('bicycle.store');
