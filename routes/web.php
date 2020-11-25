<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\EmployeController;

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
Route::post('/employer/store',[EmployeController::class, 'store']);
Route::post('/genre',[GenreController::class, 'store']);
Route::get('/create',[EmployeController::class, 'index']);
