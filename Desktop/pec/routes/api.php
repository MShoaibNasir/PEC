<?php

use Illuminate\Http\Request;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\api\BookingApiController;
use App\Http\Controllers\api\TimeSlotApiController;
use App\Http\Controllers\api\GlobalApiController;
use App\Models\User;
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

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/check-email', [AuthController::class, 'checkEmail']);
Route::get('/global-options', [GlobalApiController::class, 'index']);

Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/forgot-password', [AuthController::class, 'forgotPassword']);
// Route::post('/update-password', [AuthController::class, 'updatePassword']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/me', function(Request $request) {
        return auth()->user();
    });
    Route::post('/me/update',[AuthController::class, 'update']);
    Route::post('/reset-password', [AuthController::class, 'resetPassword']);
    Route::post('/auth/exit', [AuthController::class, 'logout']);

    Route::post('booking/available-seats', [BookingApiController::class, 'available_seats']);
    Route::apiResource('booking', 'api\BookingApiController');
    Route::get('/timeslot', [TimeSlotApiController::class, 'index']);
});
