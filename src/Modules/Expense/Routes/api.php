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

    Route::apiResource('/expenses', \Modules\Expense\Http\Controllers\ExpenseController::class);
    Route::apiResource('/expense-categories', \Modules\Expense\Http\Controllers\ExpenseCategoryController::class);

});
