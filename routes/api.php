<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ClassController;
use App\Http\Controllers\Api\SectionController;
use App\Http\Controllers\Api\SubjectController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// Route::apiResource('/form', [dashboarController::class);
Route::apiResource('/class', ClassController::class);
Route::apiResource('/subject', SubjectController::class);
Route::apiResource('/section', SectionController::class);