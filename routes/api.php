<?php

use App\Http\Controllers\Api\User\GetUsersListController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('/users')->group(function () {
    Route::get('/', GetUsersListController::class);
});
