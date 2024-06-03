<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

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


Route::get('/register', [RegistrationController::class,'personIndex']);

Route::post('/register', [RegistrationController::class,'personRegister']);

Route::get('/', [RegistrationController::class,'personView']);

Route::get('/delete/{id}', [RegistrationController::class,'personDelete']);
Route::get('/edit/{id}', [RegistrationController::class,'personEdit']);
Route::post('/update/{id}', [RegistrationController::class,'personUpdate']);