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

				<!-- begin:-content -->
				<div class="col-md-9 col-sm-9 single-item">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							{!! $page->body !!}
						</div>
					</div>

                    <div class="row voffset2">
                        <div class="col-md-7 col-sm-7 item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">

                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam!</p>
                                        <small>Een tevreden klant</small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <div class="col-md-5 col-sm-5">
                            <div class="thumbnail">
                                <a href="{{ Theme::url('img/realisatie2.jpg')}}" class="fancybox">
                                    <img src="{{ Theme::url('img/realisatie2.jpg')}}" class="img-responsive" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <p>Heeft u nog vragen of wilt u graag wat meer informatie? <br><br>
                            <a href="/contact" class="btn btn-black">Maak een afspraak</a> of <a href="/offerte">vraag een offerte aan</a>
                            </p>
                        </div>
                    </div>
				</div>
				<!-- end:about-content -->

                <div class="col-md-9 col-sm-9 single-item">

                </div>
			</div>
		</div>
	</div>
@stop
