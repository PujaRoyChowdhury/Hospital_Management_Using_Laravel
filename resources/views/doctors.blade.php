@extends('layouts.app')

@section('content')
<div class="container">
<div class="col-md-6">
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> {{ $error }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endforeach
            </div>
    <form action="doctors" method="POST">
        @csrf
    <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control" name="firstname" placeholder="Enter your firstname">
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control" name="lastname" placeholder="Enter your lastname">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label>Phone Number</label>
            <input type="text" class="form-control" name="phone" placeholder="Enter phone number">
        </div>
        <div class="form-group">
            <label>Department</label>
            <input type="text" class="form-control" name="department" placeholder="Enter your department">
        </div>
        <div class="form-group">
            <label>Visit Date</label>
            <input type="text" class="form-control datepicker" name="visitdate" placeholder="Visit date">
        </div>
        <div class="form-group">
            <label>Visit time</label>
            <input type="text" class="form-control" name="visittime" placeholder="Visit time">
        </div>
        <div class="form-group">
            <label>fees</label>
            <input type="text" class="form-control" name="fees" placeholder="Fees">
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
