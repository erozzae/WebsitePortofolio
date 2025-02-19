<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\HomeController;
use App\Http\Controllers\API\RegisterController;

Route::controller(RegisterController::class)->group(function(){
    Route::post('/register','register');
    Route::post('/login','login');
    Route::post('/logout','logout')->middleware('auth:sanctum');
});

Route::middleware('auth:sanctum')->group(function(){
    Route::controller(HomeController::class)->group(function(){
        Route::get('/home','home');

        Route::post('/home/greeting','updateGreeting');
        Route::post('/home/about_me','updateAboutMe');
    });
});
