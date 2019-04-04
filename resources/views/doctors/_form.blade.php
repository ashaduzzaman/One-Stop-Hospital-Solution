<div class="col-lg-12 margin-tb" style="margin-top:50px">
    <div class="float-left">
        <h2>Creat a Doctor List</h2>
    </div>
    <div class="float-right">
        <a href="{{ route('doctors.index')}}" class="btn btn-outline-primary">Back</a>
    </div>
</div>
<div class="margin-tb" style="margin-top:50px">
<div class="form-group">
    {!! Form::label('name','Fullname',['class'=>' col-lg-3 control-label company-label']) !!}
    <div class="col-lg-5">
        {!! Form::text('name',null, ['id' => 'name', 'class' =>'form-control ', 'placeholder' => 'Fullname']) !!}
        <p class="text-danger">{{$errors->first('name')}}</p>
    </div>
</div>
<div class="form-group">
    {!! Form::label('email','Email',['class'=>'col-lg-3 control-label company-label']) !!}
    <div class="col-lg-5">
        {!! Form::text('email',null, ['id'=>'email', 'class' =>'form-control ', 'placeholder' => 'Email']) !!}
        <p class="text-danger">{{$errors->first('email')}}</p>
    </div>
</div>
<div class="form-group">
    {!! Form::label('salary','Salary',['class'=>'col-lg-3 control-label company-label'])!!}
    <div class="col-lg-5">
        {!! Form::text('salary',null, ['id'=>'salary', 'class'=>'form-control', 'placeholder'=> 'Salary']) !!}
        <p class="text-danger">{{$errors->first('salary')}}</p>
    </div>
</div>
<div class="form-group">
    {!! Form::label('phone','Phone Number',['class'=>'col-lg-3 control-label company-label']) !!}
    <div class="col-lg-5">
        {!! Form::text('phone',null,['id'=>'phone', 'class'=>'form-control', 'placeholder'=> 'Phone']) !!}    
        <p class="text-danger">{{$errors->first('phone')}}</p>
    </div>
</div>
<div clas="form-group">
    {!! Form::label('workarea','Work Area',['class'=>'col-lg-3 control-label company-label']) !!}
    <div class="col-lg-5">
        {!! Form::text('workarea',null,['id'=>'workarea', 'class'=>'form-control', 'placeholder'=>'Work Area']) !!}
        <p class="text-danger">{{$errors->first('workarea')}}</p>
    </div>
</div>
<br>
<div class="form-group">
    <div class="col-lg-5 col-lg-offset-3">
        {!! Form::submit($submit_button,['class' => 'btn btn-sm btn-primary pull-right'])!!}
    </div>
</div>
</div>
