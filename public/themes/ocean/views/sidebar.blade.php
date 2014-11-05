<div id="sidebar-wrapper">
    <ul class="sidebar">
        <li class="sidebar-main">
            <a href="#">
                Rise of Azeroth
            </a>
        </li>
        <li class="sidebar-title">
            <span class="pull-left">@lang('abysse.projects')</span>

            {{-- If is admin --}}
            <a href="{!! URL::route('project.create') !!}" title="@lang('abysse.new_project')"><span class="menu-icon fa fa-plus"></span></a>
        </li>

        @foreach($projects_list as $project)
            <li class="sidebar-list">
                <a href="{!! URL::route('project.show', [$project->id]) !!}">{{ $project->name }} <span class="menu-icon fa fa-briefcase"></span></a>
            </li>
        @endforeach
    </ul>

    <div class="sidebar-footer">
        <div class="col-xs-12">
            {!! HTML::link('http://abysse.github.io/', 'ABYSSE.io', ['target' => '_blank']) !!}
        </div>
    </div>
</div>