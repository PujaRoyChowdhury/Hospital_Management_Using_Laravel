@extends('layouts.app')

@section('content')
<div class="container">
    <form action="addappointment" method="POST">
        @csrf
        <div class="form-group">
            <label>Doctor Id</label>
            <input type="text" class="form-control" name="doctorid" placeholder="Enter doctor id">
            <span style="color:red;">@error('doctorid'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>Visit Date</label>
            <input type="text" class="form-control" name="visitdate" placeholder="Enter your visitdate">
            <span style="color:red;">@error('visitdate'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>Patient Id</label>
            <input type="text" class="form-control" name="patientid" placeholder="Enter patient id">
            <span style="color:red;">@error('email'){{$message}}@enderror</span>
        </div>   
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>
@endsection