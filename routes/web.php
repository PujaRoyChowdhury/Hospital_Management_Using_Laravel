<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
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

Route::get('Doctors/doctorlist', [DoctorController::class, 'showDoctor']);
Route::get('Doctors/doctors', [DoctorController::class, 'getDoctor']);
Route::post('Doctors/doctors', [DoctorController::class, 'setDoctor']);
Route::get('delete/{id}',[DoctorController::class,'delete']);
Route::get('editdoctor/{id}',[DoctorController::class,'edit']);
Route::post('update',[DoctorController::class,'update']);


Route::get('Patients/addpatient', [PatientController::class, 'getPatient']);
Route::post('Patients/addpatient', [PatientController::class, 'setPatient']);
Route::get('Patients/showpatient', [PatientController::class, 'showPatient']);
Route::get('delete/{id}',[PatientController::class,'delete']);
Route::get('editpatient/{id}',[PatientController::class,'edit']);
Route::post('update',[PatientController::class,'update']);