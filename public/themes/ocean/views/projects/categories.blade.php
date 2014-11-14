@extends('master')

@section('pageTitle')
    {{ $project->name }}
@stop

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="widget">
                <div class="widget-title">
                    @lang('abysse.edit_project_categories')
                </div>

                <div class="widget-body">

                    <div class="row">
                        <div class="dual-list list-left col-xs-5">
                            <div class="well">
                                <h4 class="pull-left">Catégories</h4>

                                {!! link_to_route('category.index', trans('abysse.manage_categories'), [], ['class' => 'btn btn-default pull-right']) !!}
                                <a href="{!! URL::route('category.create') !!}" title="{{ trans('abysse.new_category') }}" class="btn btn-default pull-right" style="margin-right: 5px;"><span class="menu-icon fa fa-plus"></span></a>
                                <div class="clearfix"></div>

                                <ul class="list-group">

                                        @foreach ($project->availableCategories() as $category)
                                            <li class="list-group-item">{{ $category->name }} <input name="categories[]" type="hidden" value="{{ $category->id }}"></li>
                                        @endforeach

                                </ul>
                            </div>
                        </div>

                        <div class="list-arrows col-xs-2 text-center">
                            <button class="btn btn-default btn-sm move-left">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </button>
                            <br />
                            <button class="btn btn-default btn-sm move-right">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </button>
                        </div>

                        <div class="dual-list list-right col-xs-5">
                            {!! Form::model($project, ['route' => ['project.update_categories', $project->id], 'method' => 'PATCH']) !!}
                                <div class="well">
                                    <h4 class="pull-left">Assignées au projet</h4>
                                    {!! Form::submit(trans('abysse.save'), ['class' => 'btn btn-default pull-right']) !!}
                                    <div class="clearfix"></div>

                                    <ul class="list-group">

                                            @foreach ($project->categories()->orderBy('name')->get() as $category)
                                                <li class="list-group-item">{{ $category->name }} <input name="categories[]" type="hidden" value="{{ $category->id }}"></li>
                                            @endforeach

                                    </ul>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>

                    <ul class="list-group">

                    @foreach ($project->categories as $categorie)


                    @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop