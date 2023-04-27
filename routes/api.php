<?php

use App\Http\Controllers\Api\SetupAppController;
use App\Http\Controllers\Api\UpdateAppController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('version', function () {
    return '1';
});

Route::prefix('v1')->group(function () {
    Route::post('apps/{app}/setup/{token}', SetupAppController::class)->name('apps.setup');
    Route::post('apps/{app}/update', UpdateAppController::class)->middleware('auth:sanctum')->name('apps.update');
});
