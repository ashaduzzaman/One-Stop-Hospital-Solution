{!! Form::model($test,['method' =>'PUT', 'url' => ["tests",$test->id],'id'=>'test','class'=>'form-horizontal', 'role' => 'form', 'data-toggle' => 'form-ajax', 'data-url' => 'Yes', 'files' => true]) !!}
    @include('tests._form',['submit_button' => 'Update'])
{!! Form::close() !!}