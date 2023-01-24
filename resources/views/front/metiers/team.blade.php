@extends('front.metiers.main')
@section('title')
    {{ __('traduction.Notre équipe') }} | {{ __('traduction.'.$pole->nom_pole) }}
@endsection
@section('meta_description')
    Aroapartners
@endsection
<link rel="stylesheet" href="{{ asset('public/front/metiers/css/main/test_nicepage.css') }}" media="screen">

<!-- JavaScript Bundle with Popper -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script class="u-script" type="text/javascript"
src="//capp.nicepage.com/dc53e30ffbe26efd8026faf56aaabb5266dfbe8b/nicepage.js" defer=""></script>
<meta name="generator" content="Nicepage 2.28.2, nicepage.com">
<link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">


<link rel="stylesheet" href="{{ asset('public/front/metiers/css/team.css') }}">

<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "",
        "url": "https://www.aroapartners.com"
    }
</script>

@section('sidebar')
    @include('front.metiers.sidebar')
@endsection
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="width: 100%;">
        <div class="carousel-indicators">
            @for ($i = 0; $i <= count($teams) - 1; $i++)
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $i }}"
                    class="@if ($i == 0) active @endif" aria-current="true"
                    aria-label="Slide 1"></button>
            @endfor
        </div>
        <div class="carousel-inner">
            @foreach ($teams as $team)
                <div class="carousel-item">
                    <section class="u-black u-clearfix u-section-2" id="carousel_f246" style="background: none !important;">

                        <div class="u-clearfix u-sheet u-sheet-1">
                            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                                <div class="u-layout">
                                    <div class="u-layout-row">
                                        <div
                                            class="u-align-center-sm u-align-center-xs u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-1">
                                            <div class="u-container-layout u-valign-top-xl u-container-layout-1">
                                                <div
                                                    class="u-align-center u-container-style u-expanded-width-lg u-expanded-width-md u-group u-shape-circle u-white u-group-1 cerclenom">
                                                    <div class="u-container-layout u-valign-middle u-container-layout-2"
                                                        style="margin: 0 auto;">
                                                        <h3 class="u-text u-text-default u-text-1">{{ $team->nom }}
                                                            {{ $team->prenom }}
                                                        </h3>
                                                        <h6 class="u-text u-text-default u-text-2">{{ $team->poste }}
                                                        </h6>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-2">
                                            <div
                                                class="u-container-layout u-valign-top-sm u-valign-top-xs u-container-layout-3">
                                                <img class="u-expand-resize u-expanded-width u-image u-image-1"
                                                    src="{{ asset('public/images/team/large/' . $team->photo) }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            @endforeach


        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    {{-- <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script> --}}
    <script src="{{ asset('public/front/elementy/js/jquery.min.js') }}"></script>

    <script>
        $(function() {
            var carou = $('.carousel-inner div:nth-child(1)')
            carou.addClass('active')

            var cerclenom = $('.cerclenom')

            // cerclenom.css({
            //     "background": "#f00"
            // })

            cerclenom.addClass('animecercle')
            // cerclenom.animate({
            //     width: "100%",
            //     opacity: 0.8,
            //     transition: '5s',
            //     marginLeft: "0.8in",
            //     borderWidth: "10px",

            // }, 1500)
            // .animate({

            //     opacity: 0.2,
            // }, 2500).animate({
            //     marginLeft: "0in",
            //     opacity: 0.8,
            // }, 3500);
        })
    </script>
@endsection
