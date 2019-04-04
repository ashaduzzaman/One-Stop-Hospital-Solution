<form >
    
    <div class="form-group" style="margin-top:20px">
            <h2>Add a Medicine</h2>
        
    </div>
    <div class="form-group">
        {!! Form::label('name','Name',['class'=>'col-md-3 control-label company-label']) !!}
        <div class="col-md-5">
            {!! Form::text('name',null, ['id'=>'name', 'class' =>'form-control', 'align'=>'center', 'placeholder' => 'Name']) !!}
            <p class="text-danger">{{$errors->first('name')}}</p>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-5 col-md-offset-3">
            {!! Form::submit($submit_button,['class' => 'btn btn-sm btn-primary pull-right'])!!}
        </div>
    </div>
</form>

