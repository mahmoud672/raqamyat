<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\BlogController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\AboutController;
use App\Http\Controllers\Dashboard\DashboardController;

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



Route::group(['middleware'=>['auth']],function (){


    /*** Dashboard ***/
    Route::get('/', [DashboardController::class, 'index']);

    /*** Blogs ***/
    Route::resource("blog",BlogController::class);
    /*** Products ***/
    Route::resource("product",ProductController::class);
    /*** About ***/
    Route::get("about/edit",[AboutController::class,'index']);
    Route::patch("about/edit/{id}",[AboutController::class,'update']);

});

Auth::routes();
