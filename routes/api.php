<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\HomeController;
use App\Http\Controllers\API\RegisterController;

Route::controller(RegisterController::class)->group(function(){
    Route::post('/register','register');
    Route::post('/login','login');
});

Route::middleware('auth:sanctum')->group(function(){
    Route::resource('home',HomeController::class);
});
