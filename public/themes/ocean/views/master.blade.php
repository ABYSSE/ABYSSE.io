<!-- Ocean theme based on https://github.com/Ehesp/Responsive-Dashboard -->
<!DOCTYPE html>
<html lang="{{ Lang::locale() }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@lang('abysse.title')</title>

        {!! HTML::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css') !!}
        {!! HTML::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css') !!}
        {!! HTML::style('themes/ocean/css/dashboard.css') !!}
        {!! HTML::style('themes/ocean/css/themes/blue.css') !!}
        {!! HTML::style('themes/ocean/css/sweet-alert.css') !!}
    </head>
    <body>
        <div class="active" id="page-wrapper">

            <!-- Sidebar -->
            @include('sidebar')

            <div id="content-wrapper">
                <div class="page-content">

                    <!-- Header Bar -->
                    @include('header_bar')

                    <!-- Main Content -->
                    @yield('content')

                </div>
            </div>
        </div>

        {!! HTML::script('https://code.jquery.com/jquery-1.11.0.min.js') !!}
        {!! HTML::script('https://code.jquery.com/jquery-migrate-1.2.1.min.js') !!}
        {!! HTML::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js') !!}
        {!! HTML::script('themes/ocean/js/sweet-alert.min.js') !!}
        {!! HTML::script('themes/ocean/js/ocean.js') !!}

        @yield('scripts')
    </body>
</html>