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

            <ul class="nav navbar-nav nav-left">
			  <li class="{{ Request::segment(2) == '' ? 'active': '' }}"><a href="/">Home</a></li>
			  <li class="{{ Request::segment(2) == 'gepolierde-betonvloer' ? 'active': '' }}"><a href="/gepolierde-betonvloer">Gepolierde betonvloer</a></li>
			  <li class="{{ Request::segment(2) == 'onderhoud' ? 'active': '' }}"><a href="/onderhoud">Onderhoud</a></li>
			</ul>
            <a href="#" class="logo visible-lg visible-md">
            <!--<img src="img/.jpg" alt="dodolan manuk responsive catalog themes">
            --></a>
            <div id="brand" class="visible-lg visible-md">&nbsp;</div>
            <ul class="nav navbar-nav nav-right">
              <li class="{{ Request::segment(2) == 'werkwijze' ? 'active': '' }}"><a href="/werkwijze">Werkwijze</a></li>
              <li class="{{ Request::segment(2) == 'realisaties' ? 'active': '' }}"><a href="/realisaties">Realisaties</a></li>
			  <li class="{{ Request::segment(2) == 'over-ons' ? 'active': '' }}"><a href="/over-ons">Over ons</a></li>
			  <li class="{{ Request::segment(2) == 'contact' ? 'active': '' }}"><a href="/contact">Contact</a></li>
			</ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
