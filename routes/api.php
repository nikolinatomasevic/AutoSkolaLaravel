<?php

use App\Http\Controllers\API\AutoSkolaKontroler;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PolaznikKontroler;
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

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('auto_skola', [AutoSkolaKontroler::class, 'index']);
    Route::get('auto_skola/{auto_skola}', [AutoSkolaKontroler::class, 'show']);
    Route::post('auto_skola', [AutoSkolaKontroler::class, 'store']);
    Route::delete('auto_skola/{auto_skola}', [AutoSkolaKontroler::class, 'destroy']);
    Route::get('polaznik', [PolaznikKontroler::class, 'index']);
    Route::delete('polaznik/{polaznik}', [PolaznikKontroler::class, 'destroy']);
    Route::post('logout', [AuthController::class, 'logout']);
});
