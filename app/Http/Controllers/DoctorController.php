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
        return view('doctors');
    }
    public function setDoctor(Request $request)
    {
            $validation = $request->validate([
            'first_name' => 'required',
            'first_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits:10',
            'department' => 'required',
            'visit_date' => 'required',
            'visit_time' => 'required',
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

        return redirect('doctors');
    }

    public function showDoctor()
    {
        $data = Doctor::all();
        return view('doctorlist', ['values' => $data]);
    }

    public function delete($id)
    {
        $data = Doctor::find($id);
        $data->delete();
        return redirect('doctorlist');
    }

    public function edit(Doctor $doctor , $id)
    {
        $doctor= Doctor::find($id);
        return view('editdoctor',['value'=>$doctor]);
    }
    
    public function update(Request $request)
    {

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

        return redirect('doctorlist');
    }
}
