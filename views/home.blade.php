@extends('layouts.master')

@section('title')
    {{ $page->title }} | @parent
@stop
@section('meta')
    <meta name="title" content="{{ $page->meta_title}}" />
    <meta name="description" content="{{ $page->meta_description }}" />
@stop

@section('slider')
	@include('partials/slider')
@endsection()

@section('content')
<!-- begin:service -->
<div id="service">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading-title">
					<h2>Diensten</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-4">
				<div class="service-container">
					<div class="service-photos">
						<a href="/gepolierde-betonvloer/terrassen-en-opritten"><img src="{{ Theme::url('img/beton.jpg')}}"></a>
					</div>
					<h3>Terrassen en opritten</h3>
					<p>Een terras of oprit is niet alleen stijlvol maar ook robuust en duurzaam. Bovendien zijn er meerdere voordelen ten opzichte van traditionele klinkers of tegels.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="service-container">
					<div class="service-photos">
						<a href="/gepolierde-betonvloer/woningen"><img src="{{ Theme::url('img/beton.jpg')}}"></a>
					</div>
					<h3>Woningen</h3>
					<p>Steeds vaker wordt in nieuwe woningen voor betonvloeren in huis gekozen in plaats van tegelvloeren. Er zijn dan ook vele voordelen.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="service-container">
					<div class="service-photos">
						<a href="/gepolierde-betonvloer/tuinhuizen-en-bijgebouwen"><img src="{{ Theme::url('img/beton.jpg')}}"></a>
					</div>
					<h3>Tuinhuizen en bijgebouwen</h3>
					<p>Een tuinhuis is een handige opbergplaats die makkelijk in mekaar gezet kan worden,
                        maar een stevige ondergrond is hierbij uiterst belangrijk.
                        Een betonnen dek is hierovoor een logische keuze.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end:service -->
@stop
