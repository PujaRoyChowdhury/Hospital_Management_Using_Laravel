<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    //
    public function index()
    {
       $appointments = Appointment::with(['doctor','patient'])->get();
       
    }
}