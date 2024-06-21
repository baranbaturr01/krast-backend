<?php

use Illuminate\Support\Facades\Route;

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::post('integration', [IntegrationController::class, 'store']);
    Route::put('integration/{id}', [IntegrationController::class, 'update']);
    Route::delete('integration/{id}', [IntegrationController::class, 'destroy']);
});
