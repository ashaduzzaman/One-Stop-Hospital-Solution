<form>
    <div class="form-group" style="margin-top:20px">
        @if(isset($test))
            <h2>Update a Test</h2>
        @else
            <h2>Add a Test</h2>
        @endif
    </div>
    <div class="form-group">
        {!! Form::label('group','Test Group',['class'=>' col-lg-3 control-label company-label']) !!}
        <div class="col-lg-5">
            {!! Form::text('group',null, ['id' => 'group', 'class' =>'form-control ', 'placeholder' => 'Medicine Group']) !!}
            <p class="text-danger">{{$errors->first('group')}}</p>
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('name','Name',['class'=>'col-lg-3 control-label company-label']) !!}
        <div class="col-lg-5">
            {!! Form::text('name',null, ['id'=>'name', 'class' =>'form-control ', 'placeholder' => 'Name']) !!}
            <p class="text-danger">{{$errors->first('name')}}</p>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-5 col-lg-offset-3">
            {!! Form::submit($submit_button,['class' => 'btn btn-sm btn-primary pull-right'])!!}
        </div>
    </div>
</form>