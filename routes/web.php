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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'pages.logins')->name ('logins');
//Route::get('logins', [App\Http\Controllers\LoginController::class, 'index'])->name('logins');
//Route::post('custom-login', [App\Http\Controllers\LoginController::class, 'customLogin'])->name('login.custom'); 
//Route::view('/home', 'home')->name ('home');
//Route::view('addstudent', 'pages.addstudent')->name ('addstudent');
Route::view('editstudent', 'pages.editstudent')->name ('editstudent');
Route::view('viewstudent', 'pages.viewstudent')->name ('viewstudent');
//Route::get('signout', [App\Http\Controllers\LoginController::class, 'logout'])->name('signout');
//Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/students', [App\Http\Controllers\Auth\StudentsController::class,'student'])->name('students');
Route::get('/addstudent', [App\Http\Controllers\Auth\AddstudController::class,'addstudent'])->name('addstudent');

