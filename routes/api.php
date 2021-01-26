<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyAPI;
use App\Http\Controllers\MembersController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("data",[dummyAPI::class,'getData']);
Route::get("member/{id?}",[MembersController::class,'list']);
Route::post('addmember',[MembersController::class,'add']);
Route::put('updatemember',[MembersController::class,'update']);
Route::get('searchmember/{name}',[MembersController::class,'search']);

