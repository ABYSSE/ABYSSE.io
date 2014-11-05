@extends('master')

@section('pageTitle')
    @lang('abysse.projects')
@stop

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="widget">
                <div class="widget-title">
                    @lang('abysse.new_project')
                </div>

                <div class="widget-body">
                    @foreach ($projects as $project)
                        <h3>{{ $project->name }}</h3>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@stop