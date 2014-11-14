<div class="row header">
    <div class="col-xs-12">
        <div class="meta pull-left">
            <div class="page">
                @section('pageTitle')
                    @lang('abysse.dashboard')
                @show
            </div>
        </div>
        <div class="user pull-right">

            @if (Auth::guest())

                <div class="item dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        {!! HTML::image('themes/ocean/images/avatar.jpg', 'Username', ['style' => 'border-radius: 50%']) !!}
                    </a>
                        <div class="dropdown-menu dropdown-menu-right">

                            {!! Form::open(['route' => 'project.store']) !!}

                                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Username']) !!}
                                    {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                                </div>

                                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
                                    {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                                </div>

                                <input class="btn btn-primary btn-block" type="submit" id="sign-in" value="Sign In">
                                <label style="text-align:center;margin-top:5px">or</label>
                                <input class="btn btn-primary btn-block" type="button" id="sign-in-google" value="Sign In with Google">

                            {!! Form::close() !!}

                        </div>
                </div>

            @else

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

            @endif

        </div>
    </div>
</div>