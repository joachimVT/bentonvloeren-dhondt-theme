<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand visible-xs" href="{{ URL::to('/') }}">{{ Setting::get('core::site-name') }}</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            {!! Menu::render('header-left', 'nav-left') !!}
            <a href="#" class="logo visible-lg visible-md">
            <!--<img src="img/.jpg" alt="dodolan manuk responsive catalog themes">
            --></a>
            <div id="brand" class="visible-lg visible-md">&nbsp;</div>
            {!! Menu::render('header-right', 'nav-right') !!}
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
