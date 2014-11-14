@extends('master')

@section('pageTitle')
@lang('abysse.auth_register')
@stop

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="widget">
            <div class="widget-title">
                @lang('abysse.auth_register')
            </div>

            <div class="widget-body">
                {!! Form::open(['route' => 'register.store']) !!}

                    <div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
                        {!! Form::label('username', trans('abysse.auth_username')) !!}
                        {!! Form::text('username', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('username', '<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                        {!! Form::label('password', trans('abysse.auth_password')) !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                        {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                        {!! Form::label('password_confirmation', trans('abysse.auth_password_confirm')) !!}
                        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                        {!! $errors->first('password_confirmation', '<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('realname') ? 'has-error' : '' }}">
                        {!! Form::label('realname', trans('abysse.auth_realname')) !!}
                        {!! Form::text('realname', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('realname', '<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        {!! Form::label('email', trans('abysse.auth_email')) !!}
                        {!! Form::text('email', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                    </div>

                    {!! Form::submit(trans('abysse.auth_create'), ['class' => 'btn btn-default pull-right']) !!}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@stop