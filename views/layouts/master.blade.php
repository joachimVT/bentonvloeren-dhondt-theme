<!DOCTYPE html>
<html>
<head lang="{{ LaravelLocalization::setLocale() }}">
    <meta charset="UTF-8">
    @section('meta')
        <meta name="description" content="{{ Setting::get('core::site-description') }}" />
    @show
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @section('title'){{ Setting::get('core::site-name') }}@show
    </title>
    <link rel="shortcut icon" href="{{ Theme::url('favicon.ico') }}">

    {!! Theme::style('css/bootstrap.css') !!}

    <!-- Custom styles for this template -->
    {!! Theme::style('css/style.css') !!}
    {!! Theme::style('css/responsive.css') !!}

    <!-- Fancybox -->
    {!! Theme::style('js/vendor/fancybox/jquery.fancybox.css') !!}
</head>
<body>

@include('partials.navigation')

@yield('slider')

@yield('content')

@include('partials.footer')

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
{!! Theme::script('js/jquery.js') !!}
{!! Theme::script('js/bootstrap.js') !!}
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
{!! Theme::script('js/gmap3.js') !!}
{!! Theme::script('js/script.js') !!}
{!! Theme::script('js/vendor/fancybox/jquery.fancybox.pack.js') !!}
@yield('scripts')

<?php if (Setting::has('core::google-analytics')): ?>
    {{ Setting::get('core::google-analytics') }}
<?php endif; ?>
</body>
</html>
