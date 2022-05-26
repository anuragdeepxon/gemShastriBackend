<?php

use App\Http\Controllers\API\GemStoneAPIController;
use App\Http\Controllers\API\UserAPIController;
use Illuminate\Http\Request;
use Illuminate\Routing\Route as RoutingRoute;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::group(['middleware' => ['auth:api']], function () {
Route::prefix('gems')->group(function () {
    Route::get('/', [GemStoneAPIController::class, 'index']);
    Route::get('/show/{id}', [GemStoneAPIController::class, 'show']);
    Route::put('/store/{id}', [GemStoneAPIController::class, 'store']);
    Route::post('/update/{id}', [GemStoneAPIController::class, 'update']);
    Route::delete('/delete/{id}', [GemStoneAPIController::class, 'update']);
});
// });


Route::prefix('users')->group(function () {
    Route::get('/', [UserAPIController::class, 'index']);
    Route::get('/show/{id}', [UserAPIController::class, 'show']);
    Route::put('/store/{id}', [UserAPIController::class, 'store']);
    Route::post('/update/{id}', [UserAPIController::class, 'update']);
    Route::delete('/delete/{id}', [UserAPIController::class, 'update']);
});
