<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DoctorController extends Controller
{
    //
    public function getDoctor()
    {
        return view('Doctors/doctors');
    }
    public function setDoctor(Request $request)
    {
            $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits:10',
            'department' => 'required',
            'visitdate' => 'required',
            'visittime' => 'required',
            'fees' => 'required'
        ]);

        $doctor = new Doctor;

        $doctor->first_name = $request->firstname;
        $doctor->last_name = $request->lastname;
        $doctor->email = $request->email;
        $doctor->phone = $request->phone;
        $doctor->department = $request->department;
        $doctor->visit_date = $request->visitdate;
        $doctor->visit_time = $request->visittime;
        $doctor->fees = $request->fees;

        $doctor->save();

        return redirect('Doctors/doctors');
    }

    public function showDoctor()
    {
        $data = Doctor::all();
        return view('Doctors/doctorlist', ['values' => $data]);
    }

    public function delete($id)
    {
        $data = Doctor::find($id);
        $data->delete();
        return redirect('Doctors/doctorlist');
    }

    public function edit(Doctor $doctor , $id)
    {
        $doctor= Doctor::find($id);
        return view('Doctors/editdoctor',['value'=>$doctor]);
    }
    
    public function update(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits:10',
            'department' => 'required',
            'visitdate' => 'required',
            'visittime' => 'required',
            'fees' => 'required'
        ]);
        $doctor = Doctor::find($request->id);
        $doctor->first_name = $request->firstname;
        $doctor->last_name = $request->lastname;
        $doctor->email = $request->email;
        $doctor->phone = $request->phone;
        $doctor->department = $request->department;
        $doctor->visit_date = $request->visitdate;
        $doctor->visit_time = $request->visittime;
        $doctor->fees = $request->fees;

        $doctor->save();

        // Session::put('successMessage','Question successfully updated');

        return redirect('Doctors/doctorlist');
    }
}
