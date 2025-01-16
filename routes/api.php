<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('local')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/v_code', [AuthController::class, 'verification']);
    Route::get('/stores', [StoreController::class, 'index']);
    Route::get('/stores/{name}', [StoreController::class, 'search']);
    Route::get('/products/{id}', [ProductController::class, 'index']);
    Route::get('/products/{id}/{name}', [ProductController::class, 'search']);
    Route::get('/product/{idS}/{idP}', [ProductController::class, 'show']);
});

Route::middleware(['auth:sanctum', 'local'])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::post('/personal_info', [UserController::class, 'store']);
    Route::post('/addfavorites/{idS}/{idP}', [UserController::class, 'addToFavorites']);
    Route::get('/getfavorites', [UserController::class, 'getFavorites']);
    Route::get('/orders', [OrderController::class, 'index']);
    Route::post('/order', [OrderController::class, 'store']);
    Route::put('/orders/{id}', [OrderController::class, 'update']);
    Route::delete('/orders/{id}', [OrderController::class, 'destroy']);
    Route::post('/save_token', [UserController::class, 'saveToken']);
});
Route::put('/status', [OrderController::class, 'updateStatus']);
