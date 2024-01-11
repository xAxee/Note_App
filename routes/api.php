<?php

use App\Http\Controllers\ApiController;
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

//Route::apiResource('note', ApiController::class);

Route::get('note', [ApiController::class, 'index'])
Route::get('note/{id}', [ApiController::class, 'show'])
Route::post('note', [ApiController::class, 'store'])
Route::put('note', [ApiController::class, 'update'])
Route::delete('note', [ApiController::class, 'delete'])