@extends('layouts.app')

@section('content')
    <div class="container">
     <div class="row">
     <div class="col-lg-12"> 
        {!! Form::open(['url' => "doctors",'id'=>'doctor','class'=>'form-horizontal', 'role' => 'form', 'data-toggle' => 'form-ajax', 'data-url' => 'No', 'files' => true]) !!}
            @include('doctors._form',['submit_button' => 'Submit'])
        {!! Form::close() !!}
     </div>
    </div>
@endsection