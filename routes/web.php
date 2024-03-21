<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\MountainController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('admin/blog',[BlogController::class,'blog'])->name('admin.blog');
Route::get('admin/blog',[BlogController::class,'blog'])->name('admin.blog');
Route::prefix('admin')->name('admin.')->group(function(){
    Route::prefix('mountain')->name('mountain.')->controller(MountainController::class)->group(function(){
        Route::get('the-seven-summits' ,'showMountainSummit')->name('showMountainSummit');
        Route::get('800m-peaks' ,'showMountainPeak')->name('showMountainPeak');
    });
});