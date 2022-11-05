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
            <label>Age</label>
            <input type="text" class="form-control" name="age" placeholder="Enter your age">
            <span style="color:red;">@error('age'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="address" placeholder="Enter your address">
            <span style="color:red;">@error('address'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>Aadhaar Number</label>
            <input type="text" class="form-control" name="aadhaar" placeholder="Enter your aahaar number">
            <span style="color:red;">@error('aadhaar'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>Sex</label>
            <input type="text" class="form-control" name="sex" placeholder="Enter your sex">
            <span style="color:red;">@error('sex'){{$message}}@enderror</span>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>
@endsection