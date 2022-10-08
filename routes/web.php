<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->middleware('traffic');;
Route::get('/project/{id}', [App\Http\Controllers\HomeController::class, 'show']);
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about']);
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact']);
Route::post('/contact', [App\Http\Controllers\HomeController::class, 'store'])->name('contact.us.store');

Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Route::resource('dashboard', 'ProjectController');
    Route::resource('about', 'AboutController');
    Route::resource('contact', 'ContactController');
    Route::resource('social', 'SocialController');
    Route::resource('email', 'EmailController');
});
