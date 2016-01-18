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

    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ Theme::url('apple-touch-icon-57x57.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ Theme::url('apple-touch-icon-114x114.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ Theme::url('apple-touch-icon-72x72.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ Theme::url('apple-touch-icon-144x144.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="{{ Theme::url('apple-touch-icon-60x60.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ Theme::url('apple-touch-icon-120x120.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{ Theme::url('apple-touch-icon-76x76.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ Theme::url('apple-touch-icon-152x152.png') }}" />
    <link rel="icon" type="image/png" href="{{ Theme::url('favicon-196x196.png" sizes="196x196') }}" />
    <link rel="icon" type="image/png" href="{{ Theme::url('favicon-96x96.png" sizes="96x96') }}" />
    <link rel="icon" type="image/png" href="{{ Theme::url('favicon-32x32.png" sizes="32x32') }}" />
    <link rel="icon" type="image/png" href="{{ Theme::url('favicon-16x16.png" sizes="16x16') }}" />
    <link rel="icon" type="image/png" href="{{ Theme::url('favicon-128.png" sizes="128x128') }}" />
    <meta name="application-name" content="Betonvloeren Dhondt"/>
    <meta name="msapplication-TileColor" content="#2C3E50" />
    <meta name="msapplication-TileImage" content="{{ Theme::url('mstile-144x144.png') }}" />
    <meta name="msapplication-square70x70logo" content="{{ Theme::url('mstile-70x70.png') }}" />
    <meta name="msapplication-square150x150logo" content="{{ Theme::url('mstile-150x150.png') }}" />
    <meta name="msapplication-wide310x150logo" content="{{ Theme::url('mstile-310x150.png') }}" />
    <meta name="msapplication-square310x310logo" content="{{ Theme::url('mstile-310x310.png') }}" />


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
