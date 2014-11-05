@extends('master')

@section('pageTitle')
    @lang('abysse.edit_project')
@stop

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="widget">
                <div class="widget-title">
                    <span class="pull-left"><i class="fa fa-edit"></i> @lang('abysse.edit_project')</span>

                    {!! Form::open(['route' => ['project.destroy', $project->id], 'method' => 'DELETE', 'class' => 'submit-confirm']) !!}
                        {!! Form::submit(trans('abysse.delete_project'), ['class' => 'btn btn-sm btn-danger pull-right confirm-delete']) !!}
                    {!! Form::close() !!}
                    <div class="clearfix"></div>
                </div>

                <div class="widget-body">
                    {!! Form::model($project, ['route' => ['project.update', $project->id], 'method' => 'PATCH']) !!}
                        @include('projects.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@stop

@section('scripts')
    <script>
        $(function() {
            $('.confirm-delete').click(function() {
                swal({
                    title: @lang('abysse.confirm_delete_title'),
                    text: @lang('abysse.confirm_delete_text'),
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#DD6B55',
                    confirmButtonText: @lang('abysse.confirm_delete'),
                    cancelButtonText: @lang('abysse.confirm_cancel'),
                    closeOnConfirm: true
                },
                function(){
                    $('.submit-confirm').submit();
                });

                return false;
            });
        });
    </script>
@stop