@extends('front.metiers.main')
@section('title')
    {{ __('traduction.Offres d\'emploi') }} | {{ __('traduction.' . $pole->nom_pole) }}
@endsection
@section('meta_description')
    Aroapartners
@endsection

<link rel="stylesheet" href="{{ asset('public/front/metiers/css/test_nicepage.css') }}" media="screen">
@section('sidebar')
    @include('front.metiers.sidebar')
@endsection

<style>
    .u-black,
    .u-body.u-black,
    .u-container-style.u-black:before,
    .u-container-layout.u-black:before,
    .u-table-alt-black tr:nth-child(even) {
        color: #ffffff;
        background-color: transparent !important;
    }

    .u-grey-5,
    .u-body.u-grey-5,
    .u-container-style.u-grey-5:before,
    .u-container-layout.u-grey-5:before,
    .u-table-alt-grey-5 tr:nth-child(even) {
        color: #111111;
        background-color: transparent !important;
    }

    .u-grey-5,
    .u-body.u-grey-5,
    .u-container-style.u-grey-5:before,
    .u-container-layout.u-grey-5:before,
    .u-table-alt-grey-5 tr:nth-child(even) {
        color: #ffffff;
        background-color: #f2f2f2;
    }

</style>
@section('content')
    <link rel="stylesheet" href="{{ asset('public/front/metiers/css/icomoon.css') }}">
    

    <section class="container">

        <div class="row mb-4 mt-4">
            <header class="col-xl-12">
                <h2 class="tm-text-shadow">{{ __('traduction.Offres d\'emploi') }}</h2>
            </header>
        </div>

        <section class="u-align-center u-clearfix u-grey-5 u-valign-middle-xl u-section-2" id="carousel_60c6">
            <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-rows row">
                        <div
                            class="col-md-12 u-align-left u-black u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-1">
                            <div
                                class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-1">
                                <p class="u-text u-text-1 intro" style="text-align: justify">
                                    <p class="u-text u-text-1 intro" style="text-align: justify">
                                        {{ __('traduction.Nos méthodes de travail assurent un accord cohérent entre carrière et vie personnelle. Ici votre bien-être compte. Vous êtes créatif (ve) ? Orienté (e) solution ? Vous vous challengez constamment et pensez « équipe » ? Vous souhaitez rejoindre une équipe jeune et dynamique au cœur des mutations économiques et technologiques en Afrique ? Le cabinet AROA Partners a surement une place pour vous.') }}
                                    </p> </p>
                                <div class="u-image u-image-circle u-preserve-proportions u-image-1" alt=""
                                    data-image-width="1000" data-image-height="1500"></div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    @foreach ($offres as $offre)
                        <div class="col-sm-12 col-md-6 col-lg-12 col-xl-6 mb-4">
                            <div class="media tm-bg-transparent-black tm-border-white">
                                <a href="{{ url('poles/'.$pole->url.'/offre-emploi/detail/' . $offre->id) }}"><img
                                        class="tm-icon-circled tm-icon-media"
                                        src="{{ asset('public/images/offres/' . $offre->image_offre) }}"
                                        alt=""></a>
                                <div class="media-body" style="width: 100%">
                                    <a href="{{ url('poles/'.$pole->url.'/offre-emploi/detail/' . $offre->id) }}">
                                        <h4>{{ $offre->title_offre }}</h4>
                                    </a>

                                    <p>
                                        {{ \Illuminate\Support\Str::limit(strip_tags($offre->content_fr), 40, $end = '...') }}
                                    </p>

                                </div>


                            </div>
                        </div>
                    @endforeach

                </div>
                <div
                    class="col-md-12 u-align-left u-black u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-2">
                    <div class="u-container-layout u-valign-middle u-container-layout-2">
                        <p class="intro">
                           {{__('traduction.Offres Vous ne trouvez pas l\'offre correspondant à votre profil ?')}}
                        </p>
                        <div>
                            @if (Session::get('success'))
                                <div class="alert alert-success" role="alert">
                                    <strong>
                                        {{ Session::get('success') }}
                                    </strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            @if (Session::get('danger'))
                                <div class="alert alert-danger" role="alert">
                                    <strong>
                                        {{ Session::get('danger') }}
                                    </strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger" role="alert">
                                    <strong>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                        </div>
                        <h2 class="u-custom-font u-font-pt-sans u-text u-text-5">{{__('traduction.Postulez ici')}}</h2>
                        <div class="u-expanded-width u-form u-form-1">
                            <form class="u-clearfix u-form-spacing-18 u-form-vertical u-inner-form" id="postulerform" name="postulerform" enctype="multipart/form-data" action="{{ route('spontane.postuler') }}" method="POST">@csrf

                                <div class="u-form-group u-form-name">
                                    <input type="text" placeholder="{{__('traduction.Nom')}}" id="nom" name="nom"
                                        class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle u-input-1"
                                        required="">
                                </div>
                                <div class="u-form-group u-form-name u-form-group-2">

                                    <input type="text" placeholder="{{__('traduction.Prénom(s)')}} " id="prenoms" name="prenoms"
                                        class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle u-input-2"
                                        required="">
                                </div>
                                <div class="u-form-email u-form-group">

                                    <input type="email" placeholder="{{__('traduction.Email')}}" id="email" name="email"
                                        class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle u-input-3"
                                        required="">
                                </div>

                                <div class="u-form-email u-form-group">
                                    <label for="cv-f0d0" class="u-label u-label-3" wfd-invisible="true">{{__('traduction.CV')}}</label>
                                    <input type="file" placeholder="{{__('traduction.CV')}}" id="cv-f0d0" name="cv"
                                        class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle u-input-3"
                                        required=""
                                        accept=".doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document, .pdf">
                                </div>
                                <div class="u-form-email u-form-group">
                                    <label for="lm-f0d0" class="u-label u-label-3" wfd-invisible="true">{{__('traduction.LM')}}</label>
                                    <input type="file" placeholder="{{__('traduction.LM')}}" id="lm-f0d0" name="lm"
                                        class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle u-input-3"
                                        required=""
                                        accept=".doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document, .pdf">
                                </div>
                                <div class="u-align-left u-form-group u-form-submit">
                                    <button class="btn btn-primary" type="submit">{{__('traduction.Soumettre')}}</button>

                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </section>
    <script src="{{ asset('public/front/elementy/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/front/js/jquery.validate.js') }}" defer></script>
    <script>
        $(function() {
            $("form[name='postulerform']").validate({
                // Specify validation rules
                rules: {
                    // The key name on the left side is the name attribute
                    // of an input field. Validation rules are defined
                    // on the right side
                    nom: "required",
                    prenoms: "required",
                    cv: "required",
                    email: {
                        required: true,
                        // Specify that email should be validated
                        // by the built-in "email" rule
                        email: true
                    },
                },
                // Specify validation error messages
                messages: {
                    nom: "<span style='color: #f00'>veuillez insérer votre nom</span>",
                    prenoms: "<span style='color: #f00'>veuillez insérer votre prénom</span>",
                    email: "<span style='color: #f00'>veuillez insérer une adresse mail valide</span>",
                    cv: "<span style='color: #f00'>veuillez choisir votre CV</span>",
                },
                // Make sure the form is submitted to the destination defined
                // in the "action" attribute of the form when valid
                submitHandler: function(form) {
                    form.submit();
                }
            });

        })
    </script>
@endsection
