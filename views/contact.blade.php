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
    <!-- begin:contact -->
    <div class="page-content contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                      <li><a href="#">Home</a></li>
                      <li class="active">Contact Us</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h1>Contact met betonvloeren Dhondt</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <p>{!! $page->body !!}</p>
                </div>
                <div class="col-md-4">
                    <p>Tel: + 32 471 49 01 29
                    <br>
                    <a href="mailto:info@betonvloeren-dhondt.be">info@betonvloeren-dhondt.be</a>
                    <br>
                    BTW BE111.111.111
                    </p>
                    <p>
                        Zultseweg 24
                        <br>
                        9870 Zulte
                    </p>
                </div>
            </div>
            <div class="row padd20-top-btm">
                <form method="post" action="contact">
                    <div class="col-md-5 col-sm-5">
                        <h3>Verstuur bericht</h3>
                        <input type="text" name="name" class="form-control" placeholder="Naam" required>
                        <input type="text" name="first_name" class="form-control" placeholder="Voornaam" required>
                        <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                    </div>
                    <div class="col-md-7 col-sm-7">
                        <textarea name="message" class="form-control" rows="7" placeholder="Bericht" required></textarea>
                        <input type="submit" name="submit" value="Versturen" class="btn btn-black btn-block btn-lg">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="maps"></div>
    <!-- end:contact -->
@stop
