@extends('layouts.app')

@section('content')
<div class="m-3">
    <a href="{{url('/Patients/addpatient')}}"> <button type="button" class="btn btn-outline-primary">Add Patient</button></a>
</div>
<table class="table" border="1">
    <thead>
        <tr>
            <td scope="col">Id</td>
            <td scope="col">First Name</td>
            <td scope="col">Last Name</td>
            <td scope="col">Email</td>
            <td scope="col">Phone</td>
            <td scope="col">Age</td>
            <td scope="col">Address</td>
            <td scope="col">Aadhaar Number</td>
            <td scope="col">Sex</td>
            <td scope="col">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($values as $value)
        <tr>
            <td>{{$value['id']}}</td>
            <td>{{$value['first_name']}}</td>
            <td>{{$value['last_name']}}</td>
            <td>{{$value['email']}}</td>
            <td>{{$value['phone']}}</td>
            <td>{{$value['age']}}</td>
            <td>{{$value['address']}}</td>
            <td>{{$value['aadhaar']}}</td>
            <td>{{$value['sex']}}</td>
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