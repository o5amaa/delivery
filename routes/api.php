<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\MenuItemController;
use Illuminate\Support\Facades\Route;


Route::prefix('v1')->group(function () {
    //
    Route::apiResource('categories', CategoryController::class);

    Route::apiResource('menus', MenuItemController::class);

});
