<?php

use App\Http\Controllers\AppointmentController;
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

Route::get('Doctors/doctorlist', [DoctorController::class, 'showDoctor'])->middleware(['auth']);
Route::get('Doctors/doctors', [DoctorController::class, 'getDoctor'])->middleware(['auth']);
Route::post('Doctors/doctors', [DoctorController::class, 'setDoctor'])->middleware(['auth']);
Route::get('delete/{id}',[DoctorController::class,'delete'])->middleware(['auth']);
Route::get('editdoctor/{id}',[DoctorController::class,'edit'])->middleware(['auth']);
Route::post('update',[DoctorController::class,'update'])->middleware(['auth']);


Route::get('Patients/addpatient', [PatientController::class, 'getPatient'])->middleware(['auth']);
Route::post('Patients/addpatient', [PatientController::class, 'setPatient'])->middleware(['auth']);
Route::get('Patients/showpatient', [PatientController::class, 'showPatient'])->middleware(['auth']);
Route::get('delete/{id}',[PatientController::class,'delete'])->middleware(['auth']);
Route::get('editpatient/{id}',[PatientController::class,'edit'])->middleware(['auth']);
Route::post('update',[PatientController::class,'update'])->middleware(['auth']);

Route::get('/index',[AppointmentController::class,'index'])->middleware(['auth']);
Route::get('Appointments/addappointment',[AppointmentController::class, 'getAppointment'])->middleware(['auth']);
Route::post('Appointments/addappointment', [AppointmentController::class, 'setAppointment'])->middleware(['auth']);
Route::get('Appointments/showappointment',[AppointmentController::class, 'showAppointment'])->middleware(['auth']);
Route::get('delete/{id}',[AppointmentController::class,'delete'])->middleware(['auth']);