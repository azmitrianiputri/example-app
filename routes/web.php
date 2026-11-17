<?php

use App\Http\Controllers\ClubController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('users', UserController::class);
Route::resource('club', ClubController::class);
