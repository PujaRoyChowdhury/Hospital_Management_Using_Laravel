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

    public function getAppointment()
    {
        return view('Appointments/addappointment');
    }

    public function setAppointment(Request $request)
    {
            $request->validate([
            'doctorid' => 'required',
            'visitdate' => 'required',
            'patientid' => 'required',
        ]);

        $appointment = new Appointment();

        $appointment->doctor_id= $request->doctorid;
        $appointment->visit_date = $request->visitdate;
        $appointment->patient_id = $request->patientid;

        $appointment->save();

        return redirect('Appointments/addappointment');
    }

    public function showAppointment()
    {
        $data = Appointment::paginate(10);
        return view('Appointments/showappointment', ['values' => $data]);
    }

    public function delete($id)
    {
        $data = Appointment::find($id);
        $data->delete();
        return redirect('Appointments/showappointment');
    }

}
