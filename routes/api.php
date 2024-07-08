<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ClubController;
use Symfony\Component\HttpFoundation\Request;
use App\Http\Controllers\API\PlayerController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// route players 
Route::apiResource("players", PlayerController::class);

// clubs
Route::apiResource("clubs", ClubController::class);
