<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    {!! Form::label('name', trans('abysse.category_name')) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
    {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
</div>

{!! Form::submit(trans('abysse.save_category'), ['class' => 'btn btn-default pull-right']) !!}
