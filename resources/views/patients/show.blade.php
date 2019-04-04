@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb" style="margin-top:20px">
        <div class="float-left"><h2>Patient Details</h2></div>
        <div class="float-right">
            <a href="{{ route('patients.index') }}" class="btn btn-outline-primary">Back</a>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $patient->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Age:</strong>
            {{ $patient->age }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Contact No:</strong>
            {{ $patient->contact }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Doctor Name:</strong>
            {{ $patient->doctor->name }}
        </div>
    </div>
</div>
</div>

@endsection