@extends('master')

@section('pageTitle')
    {{ $project->name }}
    <span style="margin-left: 10px;">
        <a href="{!! URL::route('project.edit', [$project->id]) !!}" title="@lang('abysse.edit_project')"><span class="menu-icon fa fa-edit"></span></a>
    </span>
@stop

@section('content')

    @if ($hasChildren)

        @include('projects.subproject')

    @else

        <div class="row">
            <div class="col-md-6">
                <div class="widget">
                    <div class="widget-title">
                        <span class="pull-left">@lang('abysse.overview')</span>
                        {!! link_to_route('project.categories', trans('abysse.edit_project_categories'), [$project->id], ['class' => 'pull-right']) !!}
                        <div class="clearfix"></div>
                    </div>

                    <div class="widget-body">

                        <p>{!! $project->description !!}</p>

                         <h5>Suivi des tâches :</h5>

                         <ul>
                            @foreach ($project->categories as $category)

                                <li>{{ $category->name }}</li>

                            @endforeach
                         </ul>
                    </div>
                </div>
            </div>

    @endif

            <div class="col-md-6">
                <div class="widget">
                    <div class="widget-title">
                        <span class="pull-left">@lang('abysse.members')</span>

                        {!! link_to_route('project.edit', trans('abysse.edit'), [$project->id], ['class' => 'pull-right']) !!}
                        <div class="clearfix"></div>
                    </div>

                    <div class="widget-body">

                    </div>
                </div>
            </div>
        </div>

@stop