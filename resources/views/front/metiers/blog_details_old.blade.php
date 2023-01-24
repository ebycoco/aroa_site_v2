@extends('front.metiers.main')
@section('title')
    {{ __('traduction.Blog') }} | {{ __('traduction.' . $article->title_article) }}
@endsection
@section('meta_description')
    Aroapartners
@endsection
<link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
<style class="u-style">
    .tm-content {
        padding: 0px 4% !important;
    }

    .u-text-palette-1-base svg,
    .u-text-hover-palette-1-base:hover svg,
    .u-button-style:hover>.u-text-hover-palette-1-base svg,
    .u-button-style.u-button-style.active>.u-text-active-palette-1-base svg,
    .u-text-hover-palette-1-base:focus svg {
        fill: #7086B1 !important;
    }

    .u-text-palette-1-base,
    a.u-button-style.u-text-palette-1-base,
    a.u-button-style.u-text-palette-1-base[class*="u-border-"] {
        color: #7086B1 !important;
    }

    .u-palette-1-base,
    .u-body.u-palette-1-base,
    .u-container-style.u-palette-1-base:before,
    .u-container-layout.u-palette-1-base:before,
    .u-table-alt-palette-1-base tr:nth-child(even) {
        color: #ffffff;
        background-color: #7086B1 !important;
    }

    .u-black,
    .u-body.u-black,
    .u-container-style.u-black:before,
    .u-container-layout.u-black:before,
    .u-table-alt-black tr:nth-child(even) {
        color: #ffffff;
        background-color: transparent !important;
    }

    .u-section-2 {
        background-image: none;
        width: 100%;
    }

    .u-section-2 .u-sheet-1 {
        min-height: 1025px;
    }

    .u-section-2 .u-layout-wrap-1 {
        width: 1140px;
        margin: 60px auto;
    }

    .u-section-2 .u-layout-cell-1 {
        min-height: 865px;
    }

    .u-section-2 .u-container-layout-1 {
        padding: 30px 25px 30px 30px;
    }

    .u-section-2 .u-shape-1 {
        width: 105px;
        height: 105px;
        margin: 0 auto 0 0;
    }

    .u-section-2 .u-text-1 {
        font-size: 2.25rem;
        font-weight: 100;
        text-transform: uppercase;
        letter-spacing: 4px;
        margin: 45px 166px 0 0;
    }

    .u-section-2 .u-text-2 {
        font-size: 1.25rem;
        line-height: 2;
        font-weight: 300;
        margin: 30px 0 0;
    }

    .u-section-2 .u-text-3 {
        letter-spacing: 0px;
        font-size: 1.125rem;
        font-weight: 300;
        margin: 30px 263px 0 0;
    }

    .u-section-2 .u-btn-1 {
        background-image: none;
        border-style: none none solid;
        padding: 0;
    }

    .u-section-2 .u-social-icons-1 {
        white-space: nowrap;
        height: 32px;
        min-height: 16px;
        width: 158px;
        min-width: 94px;
        margin: 30px auto 0 0;
    }

    .u-section-2 .u-icon-1 {
        height: 100%;
    }

    .u-section-2 .u-icon-2 {
        height: 100%;
    }

    .u-section-2 .u-icon-3 {
        height: 100%;
    }

    .u-section-2 .u-icon-4 {
        height: 100%;
    }

    .u-section-2 .u-layout-cell-2 {
        min-height: 865px;
        background-image: none;
    }

    .u-section-2 .u-container-layout-2 {
        padding: 30px 0;
    }

    .u-section-2 .u-image-1 {
        height: 494px;
        background-image: url("//images01.nicepage.com/c461c07a441a5d220e8feb1a/b8200ef5876a5436b63934a1/rtrr.jpg");
        background-position: 50% 50%;
        width: 494px;
        margin: 0 auto 0 0;
    }

    .u-section-2 .u-shape-2 {
        width: 125px;
        height: 125px;
        margin: -16px 14px 0 auto;
    }

    @media (max-width: 1199px) {
        .u-section-2 .u-sheet-1 {
            min-height: 873px;
        }

        .u-section-2 .u-layout-wrap-1 {
            width: 940px;
        }

        .u-section-2 .u-layout-cell-1 {
            min-height: 784px;
        }

        .u-section-2 .u-container-layout-1 {
            padding-right: 81px;
        }

        .u-section-2 .u-shape-1 {
            width: 85px;
            height: 86px;
        }

        .u-section-2 .u-text-1 {
            margin-right: 59px;
        }

        .u-section-2 .u-text-3 {
            margin-right: 156px;
        }

        .u-section-2 .u-layout-cell-2 {
            min-height: 784px;
        }

        .u-section-2 .u-image-1 {
            height: 439px;
            width: 439px;
        }

        .u-section-2 .u-shape-2 {
            width: 111px;
            height: 111px;
            margin-top: 39px;
            margin-right: 14px;
            margin-left: 314px;
        }
    }

    @media (max-width: 991px) {
        .u-section-2 .u-sheet-1 {
            min-height: 706px;
        }

        .u-section-2 .u-layout-wrap-1 {
            width: 720px;
        }

        .u-section-2 .u-layout-cell-1 {
            min-height: 100px;
        }

        .u-section-2 .u-container-layout-1 {
            padding-right: 30px;
        }

        .u-section-2 .u-text-1 {
            margin-right: 0;
        }

        .u-section-2 .u-text-2 {
            font-size: 1.125rem;
        }

        .u-section-2 .u-text-3 {
            margin-right: 90px;
        }

        .u-section-2 .u-layout-cell-2 {
            min-height: 601px;
        }

        .u-section-2 .u-container-layout-2 {
            padding-left: 0;
            padding-right: 0;
        }

        .u-section-2 .u-image-1 {
            height: 336px;
            width: 336px;
        }

        .u-section-2 .u-shape-2 {
            margin-right: 0;
            margin-left: 225px;
        }
    }

    @media (max-width: 767px) {
        .u-section-2 .u-sheet-1 {
            min-height: 1550px;
        }

        .u-section-2 .u-layout-wrap-1 {
            margin-top: -103px;
            margin-bottom: -103px;
            margin-right: initial;
            margin-left: initial;
            width: auto;
        }

        .u-section-2 .u-layout-cell-1 {
            min-height: 636px;
        }

        .u-section-2 .u-container-layout-1 {
            padding-right: 10px;
            padding-left: 10px;
        }

        .u-section-2 .u-layout-cell-2 {
            min-height: 795px;
        }

        .u-section-2 .u-image-1 {
            height: 490px;
            width: 490px;
            margin-top: 45px;
            margin-right: 50px;
        }

        .u-section-2 .u-shape-2 {
            width: 148px;
            height: 148px;
            margin-top: 30px;
            margin-right: 30px;
            margin-left: auto;
        }
    }

    @media (max-width: 575px) {
        .u-section-2 .u-sheet-1 {
            min-height: 1410px;
        }

        .u-section-2 .u-layout-wrap-1 {
            margin-top: 32px;
            margin-bottom: 32px;
            width: auto;
            margin-right: initial;
            margin-left: initial;
        }

        .u-section-2 .u-layout-cell-1 {
            min-height: 100px;
        }

        .u-section-2 .u-text-2 {
            font-size: 1.0625rem;
        }

        .u-section-2 .u-text-3 {
            margin-right: 0;
        }

        .u-section-2 .u-layout-cell-2 {
            min-height: 578px;
        }

        .u-section-2 .u-image-1 {
            height: 340px;
            width: 340px;
            margin-right: 0;
        }

        .u-section-2 .u-shape-2 {
            width: 103px;
            height: 103px;
            margin-left: 207px;
        }
    }

</style>
@section('sidebar')
    @include('front.metiers.sidebar')
@endsection
@section('content')
    <section class="u-black u-clearfix u-section-2" id="carousel_2e89">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="u-clearfix u-expanded-width-sm u-expanded-width-xs u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row row">
                        <div class="u-size-32 col-md-8">
                            <div class="u-layout-row">
                                <div class="u-container-style u-layout-cell u-size-60 u-layout-cell-1">
                                    <div class="u-container-layout u-valign-top u-container-layout-1">
                                        <div class="u-palette-1-base u-shape u-shape-circle u-shape-1"></div>
                                        <h5 class="u-align-left u-text u-text-1">{{ __('traduction.'.$article->title_article) }}</h5>
                                        <p class="u-align-justify u-custom-font u-heading-font u-text u-text-2"
                                            id="article_moins">
                                            {{-- {{ \Illuminate\Support\Str::limit(__('home.' . strip_tags($article->article_fr_desktop)), 600, $end = '...') }} --}}
                                            {{ \Illuminate\Support\Str::limit(__('traduction.' . strip_tags($article->article_fr)), 600, $end = '...') }}
                                        </p>
                                        <p class="u-align-justify u-custom-font u-heading-font u-text u-text-2"
                                            id="article_plus" style="display: none;">
                                            {{ __('traduction.' . strip_tags($article->article_fr)) }}
                                        </p>
                                        <p style="text-align:center;">
                                            <a class="button" href="#"
                                                style="text-transform: none !important; text-align:center;"
                                                id="btn_article_plus"><i class="fas fa-chevron-down"></i></a>

                                            <a class="button" href="#"
                                                style="text-transform: none !important; display: none"
                                                id="btn_article_moins" id="btn_article_moins"><i
                                                    class="fas fa-chevron-up"></i></a>
                                        </p>
                                        <div class="u-social-icons u-spacing-10 u-text-grey-50 u-social-icons-1">
                                            <a class="u-social-url" target="_blank" href="#">
                                                <span class="u-icon u-icon-circle u-social-twitter u-social-type-logo u-icon-1">
                                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        viewBox="0 0 112.197 112.197"
                                                        style="enable-background:new 0 0 112.197 112.197;" xml:space="preserve">
                                                        <g>
                                                            <circle style="fill:#55ACEE;" cx="56.099" cy="56.098" r="56.098" />
                                                            <g>
                                                                <path style="fill:#F1F2F2;" d="M90.461,40.316c-2.404,1.066-4.99,1.787-7.702,2.109c2.769-1.659,4.894-4.284,5.897-7.417
                                                               c-2.591,1.537-5.462,2.652-8.515,3.253c-2.446-2.605-5.931-4.233-9.79-4.233c-7.404,0-13.409,6.005-13.409,13.409
                                                               c0,1.051,0.119,2.074,0.349,3.056c-11.144-0.559-21.025-5.897-27.639-14.012c-1.154,1.98-1.816,4.285-1.816,6.742
                                                               c0,4.651,2.369,8.757,5.965,11.161c-2.197-0.069-4.266-0.672-6.073-1.679c-0.001,0.057-0.001,0.114-0.001,0.17
                                                               c0,6.497,4.624,11.916,10.757,13.147c-1.124,0.308-2.311,0.471-3.532,0.471c-0.866,0-1.705-0.083-2.523-0.239
                                                               c1.706,5.326,6.657,9.203,12.526,9.312c-4.59,3.597-10.371,5.74-16.655,5.74c-1.08,0-2.15-0.063-3.197-0.188
                                                               c5.931,3.806,12.981,6.025,20.553,6.025c24.664,0,38.152-20.432,38.152-38.153c0-0.581-0.013-1.16-0.039-1.734
                                                               C86.391,45.366,88.664,43.005,90.461,40.316L90.461,40.316z" />
                                                            </g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                    </svg>
        
                                                </span>
                                            </a>
                                            <a class="u-social-url" target="_blank" href="https://www.facebook.com/aroapartners">
                                                <span class="u-icon u-icon-circle u-social-facebook u-social-type-logo u-icon-2">
                                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        viewBox="0 0 112.196 112.196"
                                                        style="enable-background:new 0 0 112.196 112.196;" xml:space="preserve">
                                                        <g>
                                                            <circle style="fill:#3B5998;" cx="56.098" cy="56.098" r="56.098" />
                                                            <path style="fill:#FFFFFF;"
                                                                d="M70.201,58.294h-10.01v36.672H45.025V58.294h-7.213V45.406h7.213v-8.34
                                                              c0-5.964,2.833-15.303,15.301-15.303L71.56,21.81v12.51h-8.151c-1.337,0-3.217,0.668-3.217,3.513v7.585h11.334L70.201,58.294z" />
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                    </svg>
        
                                                </span>
                                            </a>
                                            <a class="u-social-url" target="_blank"
                                                href="https://www.linkedin.com/company/aroa-partners/">
                                                <span class="u-icon u-icon-circle u-social-linkedin u-social-type-logo u-icon-3">
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        viewBox="0 0 291.319 291.319"
                                                        style="enable-background:new 0 0 291.319 291.319;" xml:space="preserve">
                                                        <g>
                                                            <path style="fill:#0E76A8;" d="M145.659,0c80.45,0,145.66,65.219,145.66,145.66s-65.21,145.659-145.66,145.659S0,226.1,0,145.66
                                                                  S65.21,0,145.659,0z" />
                                                            <path style="fill:#FFFFFF;"
                                                                d="M82.079,200.136h27.275v-90.91H82.079V200.136z M188.338,106.077
                                                                  c-13.237,0-25.081,4.834-33.483,15.504v-12.654H127.48v91.21h27.375v-49.324c0-10.424,9.55-20.593,21.512-20.593
                                                                  s14.912,10.169,14.912,20.338v49.57h27.275v-51.6C218.553,112.686,201.584,106.077,188.338,106.077z M95.589,100.141
                                                                  c7.538,0,13.656-6.118,13.656-13.656S103.127,72.83,95.589,72.83s-13.656,6.118-13.656,13.656S88.051,100.141,95.589,100.141z" />
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                    </svg>
        
                                                    
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="u-size-28 col-md-4" id="article_image">
                            <div class="u-layout-col">
                                <div
                                    class="u-align-center u-black u-container-style u-layout-cell u-size-60 u-layout-cell-2">
                                    <div
                                        class="u-container-layout u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-xl u-container-layout-2">
                                        <div class="u-image u-image-circle u-image-1" data-image-width="1055"
                                            data-image-height="704"
                                            style="background-image: url('{{ asset('public/images/articles/' . $article->image_article) }}');">
                                        </div>
                                        <div class="u-palette-1-base u-shape u-shape-circle u-shape-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript" src="{{ asset('assets/new/cssjs/it/js/jquery-3.2.1.min.js') }}"></script>
    <script>
        $(function() {
            var btn_article_moins = $('#btn_article_moins')
            var btn_article_plus = $('#btn_article_plus')

            var article_plus = $('#article_plus')
            var article_moins = $('#article_moins')


            var article_image = $('#article_image')

            btn_article_moins.hide()

            btn_article_plus.on('click', function() {
                article_moins.hide()
                article_plus.show()
                btn_article_moins.show()
                btn_article_plus.hide()
                article_image.css({
                    'display': 'none'
                })
            })
        })
    </script>
@endsection
