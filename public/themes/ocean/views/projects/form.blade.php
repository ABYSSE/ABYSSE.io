<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    {!! Form::label('name', trans('abysse.project_name')) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
    {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('parent_id') ? 'has-error' : '' }}">
    {!! Form::label('parent_id', trans('abysse.project_parent')) !!}
    {!! $parentSelect !!}
    {!! $errors->first('parent_id', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    {!! Form::label('description', trans('abysse.project_description')) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    {!! $errors->first('description', '<span class="help-block">:message</span>') !!}
</div>

{!! Form::submit(trans('abysse.save_project'), ['class' => 'btn btn-default pull-right']) !!}
