<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    //
    public function getPatient()
    {
        return view('Patients/addpatient');
    }
    public function setPatient(Request $request)
    {
            $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits:10',
            'age' => 'required',
            'address' => 'required',
            'aadhaar' => 'required',
            'sex' => 'required'
        ]);

        $patient = new Patient;

        $patient->first_name = $request->firstname;
        $patient->last_name = $request->lastname;
        $patient->email = $request->email;
        $patient->phone = $request->phone;
        $patient->age = $request->age;
        $patient->address = $request->address;
        $patient->aadhaar = $request->aadhaar;
        $patient->sex = $request->sex;

        $patient->save();

        return redirect('Patients/addpatient');
    }

    public function showPatient()
    {
        $data = Patient::all();
        return view('Patients/showpatient', ['values' => $data]);
    }

    public function delete($id)
    {
        $data = Patient::find($id);
        $data->delete();
        return redirect('Patients/showpatient');
    }

    public function edit(Patient $patient , $id)
    {
        $patient= Patient::find($id);
        return view('Patients/editpatient',['value'=>$patient]);
    }
    
    public function update(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits:10',
            'age' => 'required',
            'address' => 'required',
            'aadhaar' => 'required',
            'sex' => 'required'
        ]);
        
        $patient = Patient::find($request->id);
        $patient->first_name = $request->firstname;
        $patient->last_name = $request->lastname;
        $patient->email = $request->email;
        $patient->phone = $request->phone;
        $patient->age = $request->age;
        $patient->address = $request->address;
        $patient->aadhaar = $request->aadhaar;
        $patient->sex = $request->sex;

        $patient->save();

        // Session::put('successMessage','Question successfully updated');

        return redirect('Patients/showpatient');
    }
}
