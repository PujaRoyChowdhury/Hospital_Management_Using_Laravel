<?php

use App\Http\Controllers\DoctorController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/doctorlist', [DoctorController::class, 'showDoctor']);
Route::get('/doctors', [DoctorController::class, 'getDoctor']);
Route::post('/doctors', [DoctorController::class, 'setDoctor']);
Route::get('/delete/{id}',[DoctorController::class,'delete']);
Route::get('editdoctor/{id}',[DoctorController::class,'edit']);
Route::post('update',[DoctorController::class,'update']);