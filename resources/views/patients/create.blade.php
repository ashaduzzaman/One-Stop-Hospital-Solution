@extends('layouts.app')

@section('content')
    <div class="container">
     <div class="row">
     <div class="col-lg-12 margin-tb" style="margin-top:20px">
    <div class="float-left">
        <h2>Creat Patient List</h2>
    </div>
    <div class="float-right">
        <a href="{{ route('patients.index')}}" class="btn btn-outline-primary">Back</a>
    </div>
</div>
     <div class="col-lg-12"> 
        {!! Form::open(['url' => "patients",'id'=>'patient','class'=>'form-horizontal', 'role' => 'form', 'data-toggle' => 'form-ajax', 'data-url' => 'No', 'files' => true]) !!}
            @include('patients._form',['submit_button' => 'Submit'])
        {!! Form::close() !!}
        
     </div>
    </div>
@endsection