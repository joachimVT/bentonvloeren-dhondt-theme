@extends('layouts.master')

@section('title')
    {{ $page->title }} | @parent
@stop
@section('meta')
    <meta name="title" content="{{ $page->meta_title}}" />
    <meta name="description" content="{{ $page->meta_description }}" />
@stop

@section('slider')
	@include('partials/default-slider')
@endsection()

@section('content')
    <div class="page-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ol class="breadcrumb">
				      <li><a href="#">Home</a></li>
				      <li class="active">{{ $page->title }}</li>
				    </ol>
				</div>
			</div>

			<div class="row">
				<!-- begin:about-content -->

				<div class="col-md-12 col-sm-12 single-item">
					<div class="row">
						<div class="col-md-8 col-sm-8">
							<h3>{{ $page->title }}</h3>
							{!! $page->body !!}
						</div>
						<div class="col-md-4 col-sm-4">
							<img src="{{ Theme::url('img/img05.jpg')}}" class="img-responsive img-rounded" alt="dodolan manuk catalog template">
						</div>
					</div>
				</div>
				<!-- end:about-content -->
			</div>
		</div>
	</div>
@stop
