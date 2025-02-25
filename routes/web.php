<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [UserController::class, 'index']);
Route::resource('user', UserController::class);
