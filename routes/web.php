<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
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



Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('registration', 'App\Http\Controllers\PagesController@registration')->name('registration');
Route::post('registration', 'App\Http\Controllers\AuthController@registration');
Route::get('profile', 'App\Http\Controllers\PagesController@profile')->name('profile');
Route::get('login', 'App\Http\Controllers\PagesController@login')->name('login');
Route::post('login', 'App\Http\Controllers\AuthController@login');
Route::get('logout', 'App\Http\Controllers\AuthController@logout');
Route::get('newtask', 'App\Http\Controllers\TaskController@newView')->name('newtask');
Route::post('newtask', 'App\Http\Controllers\TaskController@create');
Route::post('removetask', 'App\Http\Controllers\TaskController@remove');
Route::get('test', 'App\Http\Controllers\AuthController@test');
Route::get('admin', 'App\Http\Controllers\AuthController@admin')->middleware('admin.confirm')->name('admin');
Route::resource('/admin/users', UserController::class)->middleware('admin.confirm');