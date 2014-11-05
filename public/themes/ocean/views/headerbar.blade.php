<div class="row header">
    <div class="col-xs-12">
        <div class="meta pull-left">
            <div class="page">
                @section('pageTitle')
                    @lang('abysse.dashboard')
                @show
            </div>
            <div class="breadcrumb-links">
                {!! $breadcrumb !!}
                @section('pageTitle')
                    @lang('abysse.dashboard')
                @show
            </div>
        </div>
        <div class="user pull-right">
            <div class="item dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    {!! HTML::image('themes/ocean/images/avatar.jpg', 'Username', ['style' => 'border-radius: 50%']) !!}
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li class="dropdown-header">
                        Joe Bloggs
                    </li>
                    <li class="divider"></li>
                    <li class="link">
                        <a href="#">Profile</a>
                    </li>
                    <li class="link">
                        <a href="#">Menu Item</a>
                    </li>
                    <li class="link">
                        <a href="#">Menu Item</a>
                    </li>
                    <li class="divider"></li>
                    <li class="link">
                        <a href="#">Logout</a>
                    </li>
                </ul>
            </div>
            <div class="item dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bell-o"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li class="dropdown-header">
                        Notifications
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">Server Down!</a>
                    </li>
                </ul>
            </div>
            <div class="item dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-tasks"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li class="dropdown-header">
                        Tasks
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">Server Down!</a>
                    </li>
                </ul>
            </div>
            <div class="item dropdown">
                <a href="#" class="search">
                    <i class="fa fa-search"></i>
                </a>
                <form class="navbar-form navbar-left search-form" style="margin-top: 12px; display: none;">
                    <div class="form-group">
                        <input type="text" class="form-control search-input" placeholder="Search">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>