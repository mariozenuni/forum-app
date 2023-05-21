<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Channels\ChannelsController;
use App\Http\Controllers\Discussions\DiscussionsController;
use App\Http\Controllers\Replies\RepliesController;
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

//Public routes
Route::post('auth/register',[AuthController::class,'register']);
Route::post('auth/login',[AuthController::class,'login']);

//protected routes
Route::group(['middleware'=>['auth:sanctum']],function(){
    Route::apiResource('channels',ChannelsController::class);
    Route::apiResource('discussions',DiscussionsController::class);
    Route::get('discussion/search/{title}',[DiscussionsController::class,'search']);
    Route::post('/discussion/reply/{discussion}',[RepliesController::class,'reply']);   
    Route::put('/discussion/reply/{reply}',[RepliesController::class,'updateReply']);  
    Route::delete('/discussion/reply/{reply}',[RepliesController::class,'deleteReply']);  
    Route::post('logout',[AuthController::class,'logout']);
});
