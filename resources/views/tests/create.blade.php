
{!! Form::open(['url' => "tests",'id'=>'test','class'=>'form-horizontal', 'role' => 'form', 'data-toggle' => 'form-ajax', 'data-url' => 'No', 'files' => true]) !!}
    @include('tests._form',['submit_button' => 'Submit'])
{!! Form::close() !!}
