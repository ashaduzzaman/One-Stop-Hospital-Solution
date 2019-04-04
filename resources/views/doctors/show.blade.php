@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb" style="margin-top:20px">
        <div class="float-left"><h2>Doctor Details</h2></div>
        <div class="float-right">
            <a href="{{ route('doctors.index') }}" class="btn btn-outline-primary">Back</a>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $doctor->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {{ $doctor->email }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Salary:</strong>
            {{ $doctor->salary }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Contact Number:</strong>
            {{ $doctor->phone }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Work Area:</strong>
            {{ $doctor->workarea }}
        </div>
    </div>
</div>
</div>

@endsection