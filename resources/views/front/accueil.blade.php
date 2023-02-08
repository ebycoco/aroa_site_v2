@extends('front.layouts.main')
@section('title')
    Aroa Partners - Cabinet conseil bureau d'études - Consultant - Finance
@endsection
@section('meta_description')
    Des solutions sur-mesure par des experts de la finance , Assurance, actuariat , organisations et dans les domaines
    juridiques.
@endsection
@section('image')
@endsection

@section('meta_title')
    Aroa Partners - Cabinet conseil bureau d'études - Consultant - Finance
@endsection

@section('type')
@endsection

@section('url')
    https://www.aroapartners.com/
@endsection
<style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@100;300&display=swap');


    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Lato', sans-serif;
    }

    #bouton_pole {
        color: #fff;
        /* background-color: #002060; */
        position: relative;
        text-transform: uppercase;
        padding: 25px 30px;
        font-weight: 400;
        letter-spacing: 4px;
        transition: .5s all !important;
        overflow: hidden !important;
        width: 100%;
    }

    #bouton_pole:hover {
        background-color: #002060;
        border-radius: 45% 45%;
        color: #fff;
    }

    #bouton_pole span {
        position: absolute;
        overflow: hidden;
    }

    #bouton_pole span:nth-child(1) {
        top: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent, #7086b1);
        animation: animate1 3s linear infinite;
    }

    @keyframes animate1 {
        0% {
            left: -100%;
        }

        100% {
            left: 100%
        }
    }

    #bouton_pole span:nth-child(2) {
        top: -100%;
        right: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(180deg, transparent, #7086B1);
        animation: animate2 3s linear infinite;
        animation-delay: 0.25s;
        overflow: hidden;
    }

    @keyframes animate2 {
        0% {
            top: -100%;
        }

        50%,
        100% {
            top: 100%;
        }
    }

    #bouton_pole span:nth-child(3) {
        bottom: 0;
        right: 0;
        width: 100%;
        height: 2px;
        background: linear-gradient(270deg, transparent, #7086B1);
        animation: animate3 3s linear infinite;
        animation-delay: 0.50s;
    }

    @keyframes animate3 {
        0% {
            right: -100%;
        }

        50%,
        100% {
            right: 100%;
        }
    }

    #bouton_pole span:nth-child(4) {
        bottom: -100%;
        left: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(360deg, transparent, #7086B1);
        animation: animate4 3s linear infinite;
        animation-delay: 0.75s;
    }

    @keyframes animate4 {
        0% {
            bottom: -100%;
        }

        50%,
        100% {
            bottom: 100%;
        }
    }

    .menu-area {
        margin-top: 22px;
    }

</style>
<!--slider-->
@section('content')
    <!-- header -->
    <!--slider-->
    <div class="row container">
        <div class="col-md-12 col-lg-12 col-xl-12 col-xs-12 col-sm-12">
            <section id="home" class="p-0 single-slide light-slider">
                <h2 class="d-none" style="display: none; visibility: hidden">hidden</h2>
                <div id="rev_single_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
                    data-alias="trax_slider_01">
                    <!-- START REVOLUTION SLIDER 5.4.8.1 fullscreen mode -->
                    <div id="rev_single" class="rev_slider fullwidthabanner" data-version="5.4.8.1">
                        <style>
                            @media (max-width: 440px) {
                                #imp {
                                    font-size: 12px !important;
                                }
                            }

                            @media (min-width: 441px) and (max-width: 768px) {
                                #imp {
                                    font-size: 25px !important;
                                }
                            }

                            @media (min-width: 769px) and (max-width: 991px) {
                                #imp {
                                    font-size: 45px !important;
                                }
                            }

                            @media (min-width: 992px) and (max-width: 1199px) {
                                #imp {
                                    font-size: 55px !important;
                                }
                            }

                            @media (min-width: 1200px) {
                                #imp {
                                    font-size: 65px !important;
                                }
                            }

                            /* @media (max-width: 768px) {
                                .video {
                                    display: none !important;
                                    visibility: hidden !important;
                                }
                            } */

                        </style>
                        {{-- <a href="#" style="top: 0; font-size: 25px; bacground:transparent">Langue</a> --}}
                        <ul>

                            <!-- SLIDE  -->
                            <li data-index="rs-3" data-transition="crossfade" data-slotamount="default"
                                data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                data-easeout="default" data-masterspeed="default" data-thumb="images/slide-img2.jpg"
                                data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                                data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                                data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('public/media/images/accueil_1649840756.png') }}" alt="bureau, entreprise"
                                    data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                    data-bgparallax="off" class="rev-slidebg image" data-no-retina>
                                <!-- LAYERS -->
                                <!-- Overlay -->
                                <div class="bg-black bg-overlay opacity-7 z-index-1"></div>

                                <!--<embed class="rs-background-video-layer video" src="https://www.aroapartners.com/video/acceuil.mp4" allowfullscreen="true" width="1366" height="768">-->
                                <!--<iframe class="rs-background-video-layer video" width="1366" height="768" src="https://www.aroapartners.com/video/acceuil.mp4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="allowfullscreen"></iframe>-->

                                <!--<video class="rs-background-video-layer video" width="1366"  height="768" src="https://www.aroapartners.com/video/acceuil.mp4" autoplay loop autobuffer>-->

                                <!--</video>-->
                                <div class="rs-background-video-layer video" data-forcerewind="on" data-volume="mute"
                                    data-videowidth="100%" data-videoheight="100vh"
                                    data-videomp4="https://www.aroapartners.com/video/acceuil.mp4" data-videopreload="auto"
                                    data-videoloop="loopandnoslidestop" data-forceCover="1" data-aspectratio="16:9"
                                    data-autoplay="true" data-autoplayonlyfirsttime="false"></div>

                                <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                                    data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                    data-voffset="['-120','-80','-80','-80']" data-whitespace="nowrap"
                                    data-responsive_offset="on" data-width="['none','none','none','none']" data-type="text"
                                    data-textalign="['center','center','center','center']" data-transform_idle="o:1;"
                                    data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;"
                                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                    data-start="1000" data-splitin="none" data-splitout="none">
                                    <h2 class="font-xlight">AROA Partners</h2>
                                </div>
                                <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                                    data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                    data-voffset="['-30','0','0','0']" data-whitespace="nowrap" data-responsive_offset="on"
                                    data-width="['none','none','none','none']" data-type="text"
                                    data-textalign="['center','center','center','center']"
                                    data-fontsize="['24','24','18','16']" data-transform_idle="o:1;"
                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                    data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                    data-start="900" data-splitin="none" data-splitout="none">
                                    <div class="row">

                                        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                            <h3 id="imp" style="color: white;">{{ __("traduction.".$accueil->slogant) }}</h3>
                                        </div>
                                    </div>


                                </div>
                                <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                                    data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                    data-voffset="['140','160','160','160']" data-width="['500','500','500','500']"
                                    data-textalign="['center','center','center','center']" data-type="text"
                                    data-whitespace="nowrap" data-transform_idle="o:1;"
                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                                    data-transform_out="s:900;e:Power2.easeInOut;s:900;e:Power2.easeInOut;"
                                    data-start="1800" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                    <a href="{{ url('/poles') }}" class="bouton_pole" id="bouton_pole">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        {{ __('traduction.'.$accueil->message) }}
                                    </a>
                                    {{-- <a class="button btn-primary transition-3 button-padding" href="{{ url('/poles') }}" style="text-transform: none !important;" title="Cliquer pour voir les poles">@lang("home.Nous connaitre")</a>
                                    <a class="button btn-primary transition-3 button-padding" href="{{ url('/contact') }}" style="text-transform: none !important;">@lang("home.Nous contacter")</a> --}}
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- END REVOLUTION SLIDER -->
                </div>
                <!--scroll down-->
            </section>
        </div>
    </div>
@endsection
