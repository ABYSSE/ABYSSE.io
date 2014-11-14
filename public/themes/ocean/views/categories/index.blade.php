@extends('master')

@section('pageTitle')
    @lang('abysse.manage_categories')
@stop

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="widget">
                <div class="widget-title">
                    @lang('abysse.manage_categories')
                </div>

                <div class="widget-body">
                    <table class="table table-bordered no-margin">

                        <thead>
                            <tr>
                                <th>@lang('abysse.name')</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($categories as $category)
                                <tr>

                                    <td>
                                        <span class="pull-left" style="margin-top: 7px;">{{ $category->name }}</span>

                                        {!! Form::open(['route' => ['category.destroy', $category->id], 'method' => 'DELETE', 'class' => 'pull-right submit-confirm']) !!}
                                            <input type="submit" value="{{ trans('abysse.delete') }}" class="btn btn-danger pull-right confirm-delete" style="margin-left: 8px;">
                                        {!! Form::close() !!}

                                        {!! link_to_route('category.edit', trans('abysse.edit'), [$category->id], ['class' => 'btn btn-default pull-right']) !!}
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

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
                    title: '@lang('abysse.confirm_delete_title')',
                    text: '@lang('abysse.confirm_delete_category_text')',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#DD6B55',
                    confirmButtonText: '@lang('abysse.delete')',
                    cancelButtonText: '@lang('abysse.confirm_cancel')',
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