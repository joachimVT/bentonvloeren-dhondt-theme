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
					{!! $page->body !!}
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-4">
				<div class="service-container">
					<div class="service-photos">
						<a href="/betonvloer"><img src="{{ Theme::url('img/beton.jpg')}}"></a>
					</div>
					<h3>Gepolierde betonvloeren</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis lectus metus, at posuere neque.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="service-container">
					<div class="service-photos">
						<a href="/betonvloer/terras-in-gepolierde-beton"><img src="{{ Theme::url('img/beton.jpg')}}"></a>
					</div>
					<h3>Opritten en terrassen</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis lectus metus, at posuere neque.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="service-container">
					<div class="service-photos">
						<img src="{{ Theme::url('img/beton.jpg')}}">
					</div>
					<h3>Waterpartijen</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis lectus metus, at posuere neque.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end:service -->
@stop
