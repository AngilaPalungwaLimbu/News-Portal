<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\CompanyController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\AdController;
use App\Http\Controllers\Frontend\PageController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'home']);
Route::get('/news/{id}', [PageController::class, 'single']);
Route::get('/kapurinews/{slug}', [PageController::class, 'category']);
Route::post('subscribe', [PageController::class, 'subscribe']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::middleware(['admin'])->group(function () {
    Route::resource('company', CompanyController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('post', PostController::class);
    Route::resource('ad', AdController::class);
});
