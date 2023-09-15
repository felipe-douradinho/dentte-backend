<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware([ 'auth:sanctum' ])->group(function () {

    Route::apiResource('/countries', \Modules\Localization\Http\Controllers\CountryController::class);
    Route::apiResource('/states', \Modules\Localization\Http\Controllers\StateController::class);
    Route::apiResource('/cities', \Modules\Localization\Http\Controllers\CityController::class);

});
