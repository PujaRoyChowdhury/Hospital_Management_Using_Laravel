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
            <label>Department</label>
            <input type="text" class="form-control" name="department" placeholder="Enter your department" value={{$value->department}}>
        </div>
        <div class="form-group">
            <label>Visit Date</label>
            <input type="text" class="form-control datepicker" name="visitdate" placeholder="Visit date" value={{$value->visit_date}}>
        </div>
        <div class="form-group">
            <label>Visit time</label>
            <input type="text" class="form-control" name="visittime" placeholder="Visit time" value={{$value->visit_time}}>
        </div>
        <div class="form-group">
            <label>fees</label>
            <input type="text" class="form-control" name="fees" placeholder="Fees" value={{$value->fees}}>
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
