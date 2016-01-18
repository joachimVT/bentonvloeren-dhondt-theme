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
<!-- begin:content -->
<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                  <li><a href="#">Home</a></li>
                  <li class="active">Over ons</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-md-9 col-sm-9">
                <h1>Over ons</h1>
                {!! $page->body !!}
            </div>
            <div class="col-md-3 col-sm-3">
                <img src="{{ Theme::url('img/realisatie2.jpg')}}" class="img-responsive img-rounded" alt="dodolan manuk catalog template">
            </div>
        </div>

        <div class="row padd20-top-btm">
            <div class="col-md-3 col-sm-3">
                <img src="{{ Theme::url('img/realisatie2.jpg')}}" class="img-responsive img-rounded" alt="dodolan manuk catalog template">
            </div>
            <div class="col-md-9 col-sm-9">
                <p>
                    Steeds vaker wordt beton voor de vloerafwerking van woningen gebruikt. Betonvloeren zijn
                    goedkoop, snel geplaatst, makkelijk te onderhouden en door de vele afwerkingsmogelijkheden ook esthetisch zeer veelzijdig.
                </p>
                <p>Vanuit die grote vraag is in 2010 Betonvloeren D’hondt in Zulte ontstaan.
                    In korte tijd hebben we de bouwplannen van honderden particulieren in Oost- en West-Vlaanderen gerealiseerd.
                    We zijn gespecialiseerd in terrassen, vloeren en opritten voor woningbouw.
                </p>
            </div>
        </div>

        <div class="row padd20-top-btm">
            <div class="col-md-12 text-center">
                <h3>Lorem ipsum dolor sit amet</h3>
                <p>Door een goede scholing en jarenlange praktijkervaring hebben we een sterke reputatie
                    opgebouwd die we elke dag opnieuw proberen te verdienen.
                    In de grondige afwerking vanonze projecten proberen we het verschil te maken.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- end:content -->
@stop
