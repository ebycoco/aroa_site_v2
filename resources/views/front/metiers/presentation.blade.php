@extends('front.metiers.main')
@section('title')
    {{ __('traduction.Presentation') }} | {{ __('traduction.' . $pole->nom_pole) }}
@endsection
@section('meta_description')
    Aroapartners
@endsection
<link rel="stylesheet" href="{{ asset('public/front/metiers/css/nicepage.css') }}" media="screen">
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<link rel="stylesheet" href="{{ asset('public/front/metiers/css/style.css') }}">

<link rel="stylesheet" href="{{ asset('public/front/metiers/css/presentation.css') }}">
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<style>
    .u-section-3 .u-image-1 {
        width: 378px;
        height: 378px;
        background-image: url('{{ asset('public/images/presentations/poles/' . $presentation->image) }}');
        background-position: 50% 50%;
        margin: 0 auto;
    }

    /* .copyaroa {
        position: fixed;
        top: 95% !important;
    } */

    .anime_experte ul ul {
        margin-top: 10px !important;
        margin-left: 5%;
    }

    .u-container-layout ul {
        margin-left: 5%;
    }
</style>

@section('sidebar')
    @include('front.metiers.sidebar')
@endsection
@section('content')
    <section id="tm-section-1" class="tm-section">
        <div class="u-bodydd">
            <section class="u-align-center u-clearfix u-section-3 row" id="carousel_ba5b" style="width: 100%">
                <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-xl u-sheet-1 col-md-12">
                    <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                        <div class="u-layout">
                            <div class="u-layout-row">
                                <div class="u-container-style u-layout-cell u-left-cell u-size-34 u-layout-cell-1">
                                    <div class="u-container-layout u-valign-middle-xs u-container-layout-1">
                                        <div class="u-palette-1-base u-shape u-shape-circle u-shape-1 titre">
                                            <p>{{ __('traduction.' . $presentation->pole->nom_pole) }}</p>
                                        </div>
                                        <h2 class="u-text u-text-1 ml2s">{{ __('traduction.Presentation') }}</h2>
                                        @if (Config::get('app.locale') == 'fr')
                                            <p class="u-text u-text-2 text-justify" id="presents">
                                                {!! $presentation->presentation_fr !!}
                                            </p>
                                        @elseif (Config::get('app.locale') == 'en')
                                            <p class="u-text u-text-2 text-justify" id="presents">
                                                {!! $presentation->presentation_en !!}
                                            </p>
                                        @endif

                                        @if ($presentation->pole->nom_pole == 'Strategie')
                                            <p>
                                                <img src="{{ asset('public/images/croquis/strategie.png') }}"
                                                    alt="strategie" style="margin-top: 25px; width: 106%;">
                                            </p>
                                        @endif

                                    </div>
                                </div>
                                <div class="u-container-style u-layout-cell u-right-cell u-size-26 u-layout-cell-2">
                                    <div class="u-container-layout u-valign-middle u-container-layout-2">
                                        <div alt="" class="u-image u-image-circle u-image-1" data-image-width="800"
                                            data-image-height="737"></div>
                                        {{-- <div style="text-align: center">
                                            <h1>@lang('home.IT / Digital')</h1>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="u-align-center u-clearfix u-white u-section-5 row" id="carousel_3284">
                <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
                    <h1 class="u-text u-text-1"><b>{{ __('traduction.EXPERTISES') }}</b></h1>
                    <div class="u-expanded-width u-list u-list-1">
                        <div class="u-repeater u-repeater-1 row" style="margin-top: 40px; width: 100%">
                            @for ($i = 0; $i < count($expertises); $i++)
                                <div class="anime_experte col-md-4">
                                    <div class="u-align-left u-container-style u-list-item u-repeater-item">
                                        <div class="u-container-layout u-similar-container u-container-layout-1">
                                            <div
                                                class="u-align-center u-container-style u-group u-palette-1-base u-radius-50 u-shape-round u-group-1">
                                                <div class="u-container-layout u-valign-middle u-container-layout-2">
                                                    <p class="u-custom-font u-font-ubuntu u-text u-text-3">
                                                        {{ $i + 1 }}</p>
                                                </div>
                                            </div>
                                            <div class="u-container-style u-group u-group-2">
                                                <div class="u-container-layout u-container-layout-3">
                                                    <h4 class="u-text u-text-4">
                                                        @if ($expertises[$i]->titre_expertise == '')
                                                            <p class="mb-5"></p>
                                                        @else
                                                            <span class="mb-3">
                                                                {{ __('traduction.' . $expertises[$i]->titre_expertise) }}
                                                            </span>
                                                        @endif
                                                    </h4>
                                                    <div id="voir_moins{{ $expertises[$i]->id }}" class="mt-4">
                                                        @if (Config::get('app.locale') == 'fr')
                                                            <p class="u-text u-text-3 text-justify">
                                                                {!! \Illuminate\Support\Str::limit($expertises[$i]->expertise_fr, 199, $end = '...') !!}
                                                            </p>
                                                        @elseif (Config::get('app.locale') == 'en')
                                                            <p class="u-text u-text-3 text-justify">
                                                                {!! \Illuminate\Support\Str::limit($expertises[$i]->expertise_en, 199, $end = '...') !!}
                                                            </p>
                                                        @endif


                                                    </div>
                                                    <div style="display: none" id="voir_plus{{ $expertises[$i]->id }}"
                                                        class="mt-5">
                                                        @if (Config::get('app.locale') == 'fr')
                                                            <p class="u-text u-text-3 text-justify" style="display: none">
                                                                {!! $expertises[$i]->expertise_fr !!}
                                                            </p>
                                                        @elseif (Config::get('app.locale') == 'en')
                                                            <p class="u-text u-text-3 text-justify" style="display: none">
                                                                {!! $expertises[$i]->expertise_en !!}
                                                            </p>
                                                        @endif

                                                    </div>
                                                    <p style="text-align:center;">
                                                        @if (strlen($expertises[$i]->expertise) > 199)
                                                            <a class="button" href="#"
                                                                style="text-align: center; text-transform: none !important;"
                                                                id="btn_metier_plus{{ $expertises[$i]->id }}"><i
                                                                    class="fas fa-chevron-down"></i></a>
                                                        @endif
                                                        {{-- <a class="button" href="#"
                                                            style="text-align: center; text-transform: none !important;"
                                                            id="btn_metier_plus{{ $expertises[$i]->id }}"><i
                                                                class="fas fa-chevron-down"></i></a> --}}

                                                        <a class="button" href="#"
                                                            style="text-transform: none !important;"
                                                            id="btn_metier_moins{{ $expertises[$i]->id }}"><i
                                                                class="fas fa-chevron-up"></i></a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    $(function() {
                                        var btn_voir_plus = $('#btn_metier_plus{{ $expertises[$i]->id }}')
                                        var btn_voir_moins = $('#btn_metier_moins{{ $expertises[$i]->id }}')
                                        var voir_plus = $('#voir_plus{{ $expertises[$i]->id }}')
                                        var voir_moins = $('#voir_moins{{ $expertises[$i]->id }}')
                                        voir_plus.hide()
                                        btn_voir_moins.hide()
                                        // voir_plus.show();

                                        btn_voir_plus.on('click', function() {
                                            btn_voir_plus.hide(500)
                                            btn_voir_moins.show(500)
                                            voir_plus.show(500)
                                            voir_moins.hide(500)
                                        })

                                        btn_voir_moins.on('click', function() {
                                            btn_voir_plus.show(500)
                                            btn_voir_moins.hide(500)
                                            voir_plus.hide(500)
                                            voir_moins.show(500)
                                        })
                                    })
                                </script>
                            @endfor
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection
