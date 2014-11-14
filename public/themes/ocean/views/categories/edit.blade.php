@extends('master')

@section('pageTitle')
    @lang('abysse.edit_category')
@stop

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="widget">
                <div class="widget-title">
                    @lang('abysse.edit_category')
                </div>

                <div class="widget-body">
                    {!! Form::model($category, ['route' => ['category.update', $category->id], 'method' => 'PATCH']) !!}
                        @include('categories.form')
                    {!! Form::close() !!}

                    {!! link_to_route('category.index', trans('abysse.back'), [], ['class' => 'btn btn-default pull-right', 'style' => 'margin-right: 7px;']) !!}
                </div>
            </div>
        </div>
    </div>

@stop