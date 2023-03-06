<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/superadmin', function(){
    return view('superadmin');
})->name('superadmin')->middleware('superadmin');

Route::get('/admin', function(){
    return view('admin');
})->name('admin')->middleware('admin');

Route::get('/depthead', function(){
    return view('depthead');
})->name('depthead')->middleware('depthead');

Route::get('/staff', function(){
    return view('staff');
})->name('staff')->middleware('staff');

Route::get('/client', function(){
    return view('client');
})->name('client')->middleware('client');