<?php

use App\Http\Controllers\Api\CategoryApiController;
use App\Http\Controllers\Api\CompanyApiController;
use App\Http\Controllers\Api\PostApiController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/company',[CompanyApiController::class,'query']);
Route::get('/menus',[CategoryApiController::class,'query']);
Route::get('/posts',[PostApiController::class,'query']);
Route::get('/search',[PostApiController::class,'search']);
