@extends('layouts.app')

@section('content')
<div class="m-3">
    <a href="{{url('/Appointments/addappointment')}}"> <button type="button" class="btn btn-outline-primary">Add Appointment</button></a>
</div>
<table class="table" border="1">
    <thead>
        <tr>
            <td scope="col">Id</td>
            <td scope="col">Doctor Id</td>
            <td scope="col">Visit Date</td>
            <td scope="col">Patient Id</td>
            <td scope="col">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($values as $value)
        <tr>
            <td>{{$value['id']}}</td>
            <td>{{$value['doctor_id']}}</td>
            <td>{{$value['visit_date']}}</td>
            <td>{{$value['patient_id']}}</td>
            <td>
                <a href="/editpatient/{{$value['id']}}">Edit</a>
                <a href="/delete/{{$value['id']}}">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    <thead>
    <span>{{$values->links()}}</span>
    <style>
      .w-5{
        display: none;
      }
    </style>
        @endsection