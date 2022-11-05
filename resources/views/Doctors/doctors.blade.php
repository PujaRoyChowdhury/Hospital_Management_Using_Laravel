@extends('layouts.app')

@section('content')
<div class="container">
    <form action="addpatient" method="POST">
        @csrf
        <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control" name="firstname" placeholder="Enter your firstname">
            <span style="color:red;">@error('firstname'){{$message}}@enderror</span>
            
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control" name="lastname" placeholder="Enter your lastname">
            <span style="color:red;">@error('lastname'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" placeholder="Enter email">
            <span style="color:red;">@error('email'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>Phone Number</label>
            <input type="text" class="form-control" name="phone" placeholder="Enter phone number">
            <span style="color:red;">@error('phone'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>Department</label>
            <input type="text" class="form-control" name="department" placeholder="Enter your department">
            <span style="color:red;">@error('department'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>Visit Date</label>
            <input type="text" class="form-control datepicker" name="visitdate" placeholder="Visit date">
            <span style="color:red;">@error('visitdate'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>Visit time</label>
            <input type="text" class="form-control" name="visittime" placeholder="Visit time">
            <span style="color:red;">@error('visittime'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>fees</label>
            <input type="text" class="form-control" name="fees" placeholder="Fees">
            <span style="color:red;">@error('fees'){{$message}}@enderror</span>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>


</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(function() {
        $(".datepicker").datepicker();
    });
</script>
@endsection