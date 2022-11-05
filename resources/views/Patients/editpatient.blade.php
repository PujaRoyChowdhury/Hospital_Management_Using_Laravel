@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/update" method="POST">
        @csrf
        <input type="hidden" class="form-control" name="id"  value={{$value->id}}>
        <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control" name="firstname" placeholder="Enter your firstname" value={{$value->first_name}}>
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control" name="lastname" placeholder="Enter your lastname" value={{$value->last_name}}>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" placeholder="Enter email" value={{$value->email}}>
        </div>
        <div class="form-group">
            <label>Phone Number</label>
            <input type="text" class="form-control" name="phone" placeholder="Enter phone number" value={{$value->phone}}>
        </div>
        <div class="form-group">
            <label>Age</label>
            <input type="text" class="form-control" name="age" placeholder="Enter your age" value={{$value->age}}>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="address" placeholder="Enter your address" value={{$value->address}}>
        </div>
        <div class="form-group">
            <label>Aadhaar Number</label>
            <input type="text" class="form-control" name="aadhaar" placeholder="Enter your aadhaar number" value={{$value->aadhaar}}>
        </div>
        <div class="form-group">
            <label>Sex</label>
            <input type="text" class="form-control" name="sex" placeholder="Enter your sex" value={{$value->sex}}>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>


</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(function(){
        $(".datepicker").datepicker();
    });
</script>
@endsection
