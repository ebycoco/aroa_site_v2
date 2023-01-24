@extends('front.layouts.metiers.main')
@section('title')
    Offres d'emploi
@endsection
@section('meta_description')
    Aroapartners
@endsection
<link rel="stylesheet" href="{{ asset('assets/new/test/test_nicepage.css') }}" media="screen">
{{-- @section('sidebar')
    @include('front.it.partials.sidebar')
@endsection --}}
<style>
    .u-grey-5,
    .u-body.u-grey-5,
    .u-container-style.u-grey-5:before,
    .u-container-layout.u-grey-5:before,
    .u-table-alt-grey-5 tr:nth-child(even) {
        /* color: #111111; */
        background-color: transparent !important;
    }

    .u-black,
    .u-body.u-black,
    .u-container-style.u-black:before,
    .u-container-layout.u-black:before,
    .u-table-alt-black tr:nth-child(even) {
        color: #ffffff;
        background-color: transparent !important;
    }

    .u-button-style.u-palette-1-base,
    .u-button-style.u-palette-1-base[class*="u-border-"] {
        color: #ffffff !important;
        background-color: #7086B1 !important;
    }

</style>
@section('content')
    <a class="btn" style="color: #fff; margin-top: 2%;" href="{{url('/')}}"><img src="{{ asset('images/logo.png') }}" alt="logo" style="width: 100px;margin-left: -60px;margin-top: -60px;"></a>
    <link rel="stylesheet" href="{{ asset('assets/new/cssjs/blog/css/icomoon.css') }}">
    <section class="container">

        <div class="row mb-4 mt-4">
            <header class="col-xl-12">
                <h2 class="tm-text-shadow">Nos offres d'emploi</h2>
            </header>
        </div>
        <div class="row">
            @foreach ($offres as $offre)
                <div class="col-sm-12 col-md-6 col-lg-12 col-xl-6 mb-4">
                    <div class="media tm-bg-transparent-black tm-border-white">
                        <a href="{{ url('it/offre-emploi/detail/' . $offre->id) }}"><img
                                class="tm-icon-circled tm-icon-media"
                                src="{{ asset('/images/offres_images/' . $offre->image_url) }}" alt=""></a>
                        <div class="media-body" style="width: 100%">
                            <a href="#">
                                <h4>{{ $offre->title }}</h4>
                            </a>
                            <p>
                                {{ \Illuminate\Support\Str::limit(strip_tags($offre->content_fr), 40, $end = '...') }}
                            </p>
                        </div>


                    </div>
                </div>
            @endforeach

        </div>


    </section>
@endsection
