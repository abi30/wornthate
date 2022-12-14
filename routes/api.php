<?php


use App\Http\Controllers\PlaceApiController;
use App\Http\Controllers\UserApiController;
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
//
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
route::get('/users',[UserApiController::class,'index']);
Route::get('/users/{id}', [UserApiController::class,'show']);


route::get('/places',[PlaceApiController::class,'index']);
Route::get('/places/{id}', [PlaceApiController::class,'show']);
