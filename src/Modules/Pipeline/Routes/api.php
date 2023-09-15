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

use Modules\Pipeline\Entities\Card;

Route::middleware([ 'auth:sanctum' ])->group(function () {

    Route::apiResource('/pipelines', \Modules\Pipeline\Http\Controllers\PipelineController::class);
    Route::apiResource('/stages', \Modules\Pipeline\Http\Controllers\StageController::class);
    Route::apiResource('/cards', \Modules\Pipeline\Http\Controllers\CardController::class);
    Route::apiResource('/card-events', \Modules\Pipeline\Http\Controllers\CardEventController::class);

});
