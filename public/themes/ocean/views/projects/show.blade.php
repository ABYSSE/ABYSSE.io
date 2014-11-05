@extends('master')

@section('pageTitle')
    {{ $project->name }}
@stop

@section('content')
    <h1>{{ $project->name }} <small>{!! link_to_route('project.edit', 'Edit project', [$project->id]) !!}</small></h1>
@stop