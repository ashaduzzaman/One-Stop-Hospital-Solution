    
{!! Form::open(['url' => "medicines",'id'=>'medicine','class'=>'form-horizontal', 'role' => 'form', 'data-toggle' => 'form-ajax', 'data-url' => 'No', 'files' => true]) !!}
    @include('medicines._form',['submit_button' => 'Submit'])
{!! Form::close() !!}

     