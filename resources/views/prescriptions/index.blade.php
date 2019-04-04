@extends('layouts.app')

@section('content')

<div class="row" id="patient-info" @submit="addTask()">
    <div class="col-md-4 text-center" style="border: 1px solid red;border-radius: 10px; font-family: 'ZCOOL XiaoWei', serif; font-size: 20px;">
        <strong >Name:</strong>
        {{ $patient->name }}
    </div>
    <div class="col-md-2 text-center" style="border: 1px solid red;border-radius: 10px;font-family: 'ZCOOL XiaoWei', serif; font-size: 20px;">
        <strong>Age:</strong>
        {{ $patient->age }}
    </div>
    <div class="col-md-4 text-center" style="border: 1px solid red;border-radius: 10px;font-family: 'ZCOOL XiaoWei', serif; font-size: 20px;">
        <strong>Contact No:</strong>
        {{ $patient->contact }}
    </div>
    <div class="col-md-2 text-center" style="font-family: 'ZCOOL XiaoWei', serif; font-size: 20px;">
    <!-- <button class="button" style="vertical-align:middle"><span>Save & Print </span></button> -->
    <input type="submit" value="Save & Print" class="button">
    </div>
</div>
    


<div class="row" id="prescription">

    <div class="col-md-4" id="symptom">

        @include('prescriptions.symptom')

    </div>

    <div class="form-group col-md-4" id="test">

        @include('prescriptions.test')

    </div>

    <div class="col-md-4" id="medicine">

        @include('prescriptions.medicine')

    </div>
    
</div>

<script src="{{ asset('js/prescription/medicine.js') }}"></script>
<script src="{{ asset('js/prescription/symptom.js') }}"></script>
<script src="{{ asset('js/prescription/test.js') }}"></script>

@endsection