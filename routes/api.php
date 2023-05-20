<?php

use App\Http\Controllers\ChannelsController;
use App\Http\Controllers\DiscussionsController;
use App\Http\Controllers\RepliesController;
use App\Http\Controllers\UsersController;
use App\Models\Discussion;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('channels',ChannelsController::class);
Route::apiResource('users',UsersController::class);
Route::apiResource('discussions',DiscussionsController::class);
Route::post('/discussion/reply/{discussion}',[RepliesController::class,'reply']);   
Route::put('/discussion/reply/{reply}',[RepliesController::class,'updateReply']);  
Route::delete('/discussion/reply/{reply}',[RepliesController::class,'deleteReply']);  