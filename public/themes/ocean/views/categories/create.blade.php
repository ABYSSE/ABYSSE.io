@extends('master')

@section('pageTitle')
    @lang('abysse.new_category')
@stop

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="widget">
                <div class="widget-title">
                    @lang('abysse.new_category')
                </div>

                <div class="widget-body">
                    {!! Form::open(['route' => 'category.store']) !!}
                        @include('categories.form')

                        <input name="from_url" type="hidden" value="{{ $from_url }}">
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop