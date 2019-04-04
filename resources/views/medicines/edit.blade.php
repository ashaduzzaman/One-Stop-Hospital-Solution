{!! Form::model($medicine,['method' =>'PUT', 'url' => ["medicines",$medicine->id],'id'=>'medicine','class'=>'form-horizontal', 'role' => 'form', 'data-toggle' => 'form-ajax', 'data-url' => 'Yes', 'files' => true]) !!}
    @include('medicines._form',['submit_button' => 'Update'])
{!! Form::close() !!}