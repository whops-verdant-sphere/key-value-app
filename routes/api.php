<?php

use App\Http\Controllers\ItemController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// this is test comment

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->group(function () {
  Route::post('/object/get_one', [ItemController::class, 'store']);
  Route::get('/objects/get_all_record_records', [ItemController::class, 'getAllRecords']);
  Route::get('/object/{key}', [ItemController::class, 'show']);
});
