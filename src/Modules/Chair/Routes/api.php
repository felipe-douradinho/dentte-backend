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

//Route::middleware([
//    'auth:sanctum',
//    InitializeTenancyByDomain::class,
//    PreventAccessFromCentralDomains::class,
//])->group(function () {

Route::middleware([ 'auth:sanctum' ])->group(function () {

    Route::apiResource('/chairs', \Modules\Chair\Http\Controllers\ChairController::class);

});
