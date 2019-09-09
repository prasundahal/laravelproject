<div class="form-group{{ $errors->has('apple_ball') ? 'has-error' : ''}}">
    {!! Form::label('apple_ball', 'Apple Ball', ['class' => 'control-label']) !!}
    {!! Form::text('apple_ball', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('apple_ball', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
