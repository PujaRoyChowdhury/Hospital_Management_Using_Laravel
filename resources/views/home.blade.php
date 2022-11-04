@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ Auth::user()->name }}{{ __(', You are logged in!') }}

                    <div class="row">
                        <dic class="doctor">
                            <a href="{{url('/')}}"> <button type="button" class="btn btn-outline-primary">DOCTORS</button></a>
                        </div>
                        <dic class="patient">
                            <a href="{{url('/')}}"> <button type="button" class="btn btn-outline-primary">PATIENT</button></a>
                        </div>
                        <dic class="patient">
                            <a href="{{url('/')}}"> <button type="button" class="btn btn-outline-primary">APPOINTMENT</button></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection