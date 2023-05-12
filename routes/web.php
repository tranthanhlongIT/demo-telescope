<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/throw-exception', [DemoController::class, 'throwException']);
Route::get('/users', [DemoController::class, 'getAllUser']);
Route::get('/users/{user}', [DemoController::class, 'getUser']);
