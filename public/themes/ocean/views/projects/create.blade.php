@extends('master')

@section('pageTitle')
    @lang('abysse.new_project')
@stop

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="widget">
                <div class="widget-title">
                    @lang('abysse.new_project')
                </div>

                <div class="widget-body">
                    {!! Form::open(['route' => 'project.store']) !!}
                        @include('projects.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop