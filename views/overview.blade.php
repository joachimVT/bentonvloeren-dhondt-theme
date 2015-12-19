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

				@include('partials/left-sidebar')

				<!-- begin:about-content -->
				<div class="col-md-9 col-sm-9 single-item">
					<h1>{{ $page->title }}</h1>
				</div>

				<div class="col-md-9 col-sm-9 single-item">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							{!! $page->body !!}
						</div>
					</div>
				</div>
				<!-- end:about-content -->
			</div>
		</div>
	</div>
@stop
