<!-- begin:product-sidebar -->
<div class="col-md-3 col-sm-3">
	<div class="row sidebar">
		<div class="col-md-12">
			<ul class="nav nav-pills nav-stacked">
			  <li class="{{ Request::segment(3) == 'terrassen-en-opritten' ? 'active': '' }}">
				  <a href="/gepolierde-betonvloer/terrassen-en-opritten">Terrassen en opritten</a>
			  </li>
			  <li class="{{ (Request::segment(3) == 'woningen') ? 'active': '' }}">
				  <a href="/gepolierde-betonvloer/woningen">Woningen</a>
			  </li>
			  <li class="{{ (Request::segment(3) == 'tuinhuizen-en-bijgebouwen') ? 'active': '' }}">
				  <a href="/gepolierde-betonvloer/tuinhuizen-en-bijgebouwen">Tuinhuizen en bijgebouwen</a>
			  </li>
			</ul>
		</div>
	</div>
</div>
<!-- end:product-sidebar -->
