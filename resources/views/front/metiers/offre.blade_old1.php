@extends('front.layouts.metiers.main2')
@section('sidebar')
    @include('front.metiers.sidebar').
@endsection
@section('content')
    <script type="text/javascript" src="https://aroapartners.com/assets/new/cssjs/it/js/jquery-3.2.1.min.js"></script>

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 tm-content" style="background: transparent; margin-bottom: 0px;">

        <link rel="stylesheet" href="https://aroapartners.com/assets/new/cssjs/blog/css/icomoon.css">
        <section class="container">

            <div class="row mb-4 mt-4">
                <header class="col-xl-12">
                    <h2 class="tm-text-shadow">Offres d'emploi</h2>
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
                                        Nos méthodes de travail assurent un accord cohérent entre carrière et
                                        vie personnelle. Ici votre bien-être compte. <br>
                                        Vous êtes créatif (ve) ? Orienté (e) solution ? Vous vous challengez
                                        constamment et pensez « équipe » ?<br>
                                        Vous souhaitez rejoindre une équipe jeune et dynamique au cœur des
                                        mutations économiques et technologiques en Afrique ? <br>
                                        Le cabinet AROA Partners a surement une place pour vous. </p>
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
                                    <a href="{{ url('poles/' . $pole->url . '/offre-emploi/detail/' . $offre->id) }}"><img
                                            class="tm-icon-circled tm-icon-media"
                                            src="{{ asset('public/images/offres/' . $offre->image_offre) }}" alt=""></a>
                                    <div class="media-body" style="width: 100%">
                                        <a href="{{ url('poles/' . $pole->url . '/offre-emploi/detail/' . $offre->id) }}">
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
                                Vous ne trouvez pas l'offre correspondant à votre profil ?
                            </p>
                            <h2 class="u-custom-font u-font-pt-sans u-text u-text-5">Postulez ici</h2>
                            <div class="u-expanded-width u-form u-form-1">
                                <form action="https://aroapartners.com/postuler" method="POST"
                                    class="u-clearfix u-form-spacing-18 u-form-vertical u-inner-form" style="padding: 0px;"
                                    source="email" name="postulerform" enctype="multipart/form-data"
                                    novalidate="novalidate">
                                    <input type="hidden" name="_token" value="bDA8LqwbpeKAB3eiO9RbGdgHQObmN2zGSUC7f2hW">
                                    <input type="hidden" id="siteId" name="siteId" value="498158" wfd-invisible="true">
                                    <input type="hidden" id="pageId" name="pageId" value="498262" wfd-invisible="true">
                                    <div class="u-form-group u-form-name">

                                        <input type="text" placeholder="Nom" id="nom" name="nom"
                                            class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle u-input-1"
                                            required="">
                                    </div>
                                    <div class="u-form-group u-form-name u-form-group-2">

                                        <input type="text" placeholder="Prénom(s) " id="prenoms" name="prenoms"
                                            class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle u-input-2"
                                            required="">
                                    </div>
                                    <div class="u-form-email u-form-group">

                                        <input type="email" placeholder="Email" id="email" name="email"
                                            class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle u-input-3"
                                            required="">
                                    </div>
                                    <div class="u-form-group u-form-phone u-form-group-4">

                                        <input type="tel"
                                            pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})"
                                            placeholder="Téléphone" id="telephone" name="telephone"
                                            class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle u-input-4"
                                            required="">
                                    </div>
                                    <div class="u-form-email u-form-group">
                                        <label for="cv-f0d0" class="u-label u-label-3" wfd-invisible="true">CV</label>
                                        <input type="file" placeholder="CV" id="cv-f0d0" name="cv"
                                            class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle u-input-3"
                                            required=""
                                            accept=".doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document, .pdf">
                                    </div>
                                    <div class="u-align-left u-form-group u-form-submit">
                                        <button
                                            class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-palette-1-base u-radius-7 u-btn-1">Soumettre</button>
                                        <input type="submit" value="submit" class="u-form-control-hidden"
                                            wfd-invisible="true">
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </section>
        <script src="https://aroapartners.com/assets/new/cssjs/it/js/jquery.validate.js" defer=""></script>
        <script src="https://aroapartners.com/js/jquery-3.4.1.min.js"></script>
        <script src="https://aroapartners.com/assets/new/front/metier/postuleremploi.js"></script>



    </div>
@endsection
