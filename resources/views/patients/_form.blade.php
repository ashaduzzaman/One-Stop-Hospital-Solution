
<div class="margin-tb" style="margin-top:50px">
<div class="form-group">
    {!! Form::label('name','Fullname',['class'=>' col-lg-3 control-label company-label']) !!}
    <div class="col-lg-5">
        {!! Form::text('name',null, ['id' => 'name', 'class' =>'form-control ', 'placeholder' => 'Fullname']) !!}
        <p class="text-danger">{{$errors->first('name')}}</p>
    </div>
</div>
<div class="form-group">
    {!! Form::label('age','Age',['class'=>'col-lg-3 control-label company-label']) !!}
    <div class="col-lg-5">
        {!! Form::text('age',null, ['id'=>'age', 'class' =>'form-control ', 'placeholder' => 'Age']) !!}
        <p class="text-danger">{{$errors->first('age')}}</p>
    </div>
</div>
<div class="form-group">
    {!! Form::label('contact','Contact',['class'=>'col-lg-3 control-label company-label'])!!}
    <div class="col-lg-5">
        {!! Form::text('contact',null, ['id'=>'contact', 'class'=>'form-control', 'placeholder'=> 'Contact']) !!}
        <p class="text-danger">{{$errors->first('contact')}}</p>
    </div>
</div>
<div class="form-group">
    {!! Form::label('doctor','Choose Doctor',['class'=>'col-lg-3 control-label company-label']) !!}
    <div class="col-lg-5">
        {!! Form::select('doctor_id', $doctors, null, ['class'=>'form-control m-bot15', 'placeholder' => 'Select Doctor']) !!}
        
        <p class="text-danger">{{$errors->first('doctor_id')}}</p>
    </div>
</div>
<div class="form-group">
    {!! Form::label('date','Choose Date',['class'=>'col-lg-3 control-label company-label']) !!}
    <div class="col-lg-5">
    {{ Form::date('date', new \DateTime(), ['class' => 'form-control m-bot15']) }}
        
        <p class="text-danger">{{$errors->first('date')}}</p>
    </div>
</div>
<br>
<div class="form-group">
    <div class="col-lg-5 col-lg-offset-3">
        {!! Form::submit($submit_button,['class' => 'btn btn-sm btn-primary pull-right'])!!}
    </div>
</div>
</div>
