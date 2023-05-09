<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

Route::get('/home', function () {
    return view('home');

// Route::view('/home', [HomeController::class, 'Login'])->name('home');

// Route::group([
//     'prefix'=>config('user.prefix'),
// 'namespace'=> 'App\\Http\\Controllers',
// ],function(){
//     Route::get('Login','LoginController@formlogin')->name('user.login');
//     Route::post('Login','LoginController@login');
// Route::middleware(['auth:user'])->group (function (){
//     Route::post('Logout','LoginController@logout')->name('user.logout');
//     Route::view('/','dashboard')->name ('dashboard');
//     Route::view('/post','data-post')->name('post')->middleware('can:role,"admin","kasir"');
//     Route::view('/admin','data-admin')->name('admin')->middleware('can:role,"admin"');
// });
});

