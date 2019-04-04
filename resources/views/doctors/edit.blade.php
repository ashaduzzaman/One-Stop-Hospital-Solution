@extends('layouts.app')

@section('content')
    <div class="container">
     <div class="row">
     <div class="col-lg-12"> 
        {!! Form::model($doctor,['method' =>'PUT', 'url' => ["doctors",$doctor->id],'id'=>'doctor','class'=>'form-horizontal', 'role' => 'form', 'data-toggle' => 'form-ajax', 'data-url' => 'Yes', 'files' => true]) !!}
            @include('doctors._form',['submit_button' => 'Update'])
        {!! Form::close() !!}
     </div>
    </div>
@endsection
