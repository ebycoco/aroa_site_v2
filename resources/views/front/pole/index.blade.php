@extends('front.pole.main')
@section('title')
{{ __('traduction.'.$pole->nom_pole) }}
@endsection

@section('meta_description')
    {{  __('traduction.'.$pole->nom_pole) }}
@endsection
<link rel="stylesheet" href="{{ asset('public/front/poles/style_contact_abidjan_paris.css') }}">
<style>
    body {
        background-image: url('{{  asset("public/images/arriere/".Request::path().".jpg") }}');
        background-size: 100%;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        overflow: hidden;

    }

</style>
@section('content')
    @include('front.layouts.contact_abidjan')
    <div class="container-menu">
        <div class="btn-menu">
            <div class="ligne">
                <p class="blobss"><a href="{{ url('/poles') }}"><img
                            src="{{ asset('public/images/logo/poles/blanc/'.$pole->logo_blanc_pole) }}" alt="icone"
                            class="icone"><span style="display: block"><b>{{ __('traduction.'.$pole->nom_pole) }}</b></span></a></p>
            </div>
        </div>
        <div class="poleicons">
            @foreach ($metiers as $metier)
            <div class="blob blob{{ $metier->id }}">
                <a href="{{ url('poles/'.$pole->url.'/'.$metier->url) }}" title="Présentation"><img
                        src="{{ asset('public/images/logo/metiers/blanc/'.$metier->icone_blanche) }}" alt="icone"
                        class="icone" width="50"><span><b>{{ __('traduction.'.$metier->nom_icone) }}</b></span></a>
            </div>
            @endforeach
        </div>
    </div>
    @include('front.layouts.contact_paris')
@endsection
