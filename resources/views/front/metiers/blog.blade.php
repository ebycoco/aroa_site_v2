@extends('front.metiers.main')
@section('title')
    {{ __('traduction.Blog') }} | {{ __('traduction.' . $pole->nom_pole) }}
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
    /* .copyaroa {
        position: fixed;
        top: 95% !important;
    } */

    .anime_experte ul ul {
        margin-top: 10px !important;
        margin-left: 5%;
    }

</style>

<style class="u-style">
    .u-palette-3-base,
    .u-body.u-palette-3-base,
    .u-container-style.u-palette-3-base:before,
    .u-container-layout.u-palette-3-base:before,
    .u-table-alt-palette-3-base tr:nth-child(even) {
        color: #ffffff;
        background-color: transparent !important;
    }

    .u-white,
    .u-body.u-white,
    .u-container-style.u-white:before,
    .u-container-layout.u-white:before,
    .u-table-alt-white tr:nth-child(even) {
        color: #ffffff !important;
        background-color: transparent !important;
    }

    .u-section-2 {
        min-height: 1074px;
        width: 100%;
    }

    .u-section-2 .u-text-1 {
        font-size: 3.75rem;
        background-image: none;
        letter-spacing: 2px;
        text-transform: uppercase;
        font-weight: 900;
        margin: 88px 200px 0
    }

    .u-section-2 .u-shape-1 {
        height: 200px;
        margin: 168px auto 0 0
    }

    .u-section-2 .u-list-1 {
        min-height: 661px;
        grid-template-columns: repeat(2, 50%);
        grid-template-rows: repeat(2, auto);
        height: auto;
        width: 1140px;
        grid-gap: 0;
        margin: -324px auto 0
    }

    .u-section-2 .u-list-item-1 {
        background-image: none
    }

    .u-section-2 .u-container-layout-1 {
        padding: 30px 40px
    }

    .u-section-2 .u-image-1 {
        width: 229px;
        height: 229px;
        background-image: url("//images02.nicepage.com/c461c07a441a5d220e8feb1a/59dcf6a4957250909977cbcc/5.jpg");
        background-position: 50% 50%;
        margin: 0 auto 0 0
    }

    .u-section-2 .u-group-1 {
        width: 257px;
        min-height: 246px;
        height: auto;
        margin: -229px 0 0 auto
    }

    .u-section-2 .u-container-layout-2 {
        padding: 0 0 20px 25px
    }

    .u-section-2 .u-text-2 {
        font-size: 1.875rem;
        margin: 0
    }

    .u-section-2 .u-text-3 {
        font-weight: 700;
        font-size: 1rem;
        margin: 20px 0 0
    }

    .u-section-2 .u-text-4 {
        font-size: 0.875rem;
        font-style: italic;
        margin: 20px 0 0
    }

    .u-section-2 .u-social-icons-1 {
        white-space: nowrap;
        height: 32px;
        min-height: 16px;
        width: 116px;
        min-width: 68px;
        margin: 13px auto 0 2px
    }

    .u-section-2 .u-icon-1 {
        height: 100%
    }

    .u-section-2 .u-icon-2 {
        height: 100%
    }

    .u-section-2 .u-icon-3 {
        height: 100%
    }

    .u-section-2 .u-list-item-2 {
        background-image: none
    }

    .u-section-2 .u-container-layout-3 {
        padding: 30px 40px
    }

    .u-section-2 .u-image-2 {
        width: 229px;
        height: 229px;
        background-image: url("//images02.nicepage.com/c461c07a441a5d220e8feb1a/6332c300cc035cb793f6339e/7.jpg");
        background-position: 50% 50%;
        margin: 0 auto 0 0
    }

    .u-section-2 .u-group-2 {
        width: 257px;
        min-height: 246px;
        height: auto;
        margin: -229px 0 0 auto
    }

    .u-section-2 .u-container-layout-4 {
        padding: 0 0 20px 25px
    }

    .u-section-2 .u-text-5 {
        font-size: 1.875rem;
        margin: 0
    }

    .u-section-2 .u-text-6 {
        font-weight: 700;
        font-size: 1rem;
        margin: 20px 0 0
    }

    .u-section-2 .u-text-7 {
        font-size: 0.875rem;
        font-style: italic;
        margin: 20px 0 0
    }

    .u-section-2 .u-social-icons-2 {
        white-space: nowrap;
        height: 32px;
        min-height: 16px;
        width: 116px;
        min-width: 68px;
        margin: 13px auto 0 2px
    }

    .u-section-2 .u-icon-4 {
        height: 100%
    }

    .u-section-2 .u-icon-5 {
        height: 100%
    }

    .u-section-2 .u-icon-6 {
        height: 100%
    }

    .u-section-2 .u-list-item-3 {
        background-image: none
    }

    .u-section-2 .u-container-layout-5 {
        padding: 30px 40px
    }

    .u-section-2 .u-image-3 {
        width: 229px;
        height: 229px;
        background-image: url("//images02.nicepage.com/c461c07a441a5d220e8feb1a/a6e04cd1015f574cb38cc7d4/4.jpg");
        background-position: 50% 50%;
        margin: 0 auto 0 0
    }

    .u-section-2 .u-group-3 {
        width: 257px;
        min-height: 246px;
        height: auto;
        margin: -229px 0 0 auto
    }

    .u-section-2 .u-container-layout-6 {
        padding: 0 0 20px 25px
    }

    .u-section-2 .u-text-8 {
        font-size: 1.875rem;
        margin: 0
    }

    .u-section-2 .u-text-9 {
        font-weight: 700;
        font-size: 1rem;
        margin: 20px 0 0
    }

    .u-section-2 .u-text-10 {
        font-size: 0.875rem;
        font-style: italic;
        margin: 20px 0 0
    }

    .u-section-2 .u-social-icons-3 {
        white-space: nowrap;
        height: 32px;
        min-height: 16px;
        width: 116px;
        min-width: 68px;
        margin: 13px auto 0 2px
    }

    .u-section-2 .u-icon-7 {
        height: 100%
    }

    .u-section-2 .u-icon-8 {
        height: 100%
    }

    .u-section-2 .u-icon-9 {
        height: 100%
    }

    .u-section-2 .u-list-item-4 {
        background-image: none
    }

    .u-section-2 .u-container-layout-7 {
        padding: 30px 40px
    }

    .u-section-2 .u-image-4 {
        width: 229px;
        height: 229px;
        background-image: url("//images02.nicepage.com/c461c07a441a5d220e8feb1a/d57be81579335a85bee38a63/zzz.jpg");
        background-position: 50% 50%;
        margin: 0 auto 0 0
    }

    .u-section-2 .u-group-4 {
        width: 257px;
        min-height: 246px;
        height: auto;
        margin: -229px 0 0 auto
    }

    .u-section-2 .u-container-layout-8 {
        padding: 0 0 20px 25px
    }

    .u-section-2 .u-text-11 {
        font-size: 1.875rem;
        margin: 0
    }

    .u-section-2 .u-text-12 {
        font-weight: 700;
        font-size: 1rem;
        margin: 20px 0 0
    }

    .u-section-2 .u-text-13 {
        font-size: 0.875rem;
        font-style: italic;
        margin: 20px 0 0
    }

    .u-section-2 .u-social-icons-4 {
        white-space: nowrap;
        height: 32px;
        min-height: 16px;
        width: 116px;
        min-width: 68px;
        margin: 13px auto 0 2px
    }

    .u-section-2 .u-icon-10 {
        height: 100%
    }

    .u-section-2 .u-icon-11 {
        height: 100%
    }

    .u-section-2 .u-icon-12 {
        height: 100%
    }

    .u-section-2 .u-text-14 {
        width: 256px;
        margin: 35px auto 0
    }

    .u-section-2 .u-btn-1 {
        border-style: none none solid;
        padding: 0
    }

    .u-section-2 .u-btn-2 {
        border-style: solid;
        font-weight: 700;
        text-transform: uppercase;
        margin: 35px auto 60px
    }

    @media (max-width: 1199px) {
        .u-section-2 {
            min-height: 958px
        }

        .u-section-2 .u-shape-1 {
            margin-right: initial;
            margin-left: initial
        }

        .u-section-2 .u-list-1 {
            min-height: 545px;
            width: 940px;
            margin-top: -324px
        }

        .u-section-2 .u-container-layout-1 {
            padding-left: 35px;
            padding-right: 35px
        }

        .u-section-2 .u-image-1 {
            width: 183px;
            height: 183px
        }

        .u-section-2 .u-group-1 {
            width: 200px;
            min-height: 248px;
            margin-top: -183px
        }

        .u-section-2 .u-container-layout-3 {
            padding-left: 35px;
            padding-right: 35px
        }

        .u-section-2 .u-image-2 {
            width: 183px;
            height: 183px
        }

        .u-section-2 .u-group-2 {
            width: 200px;
            min-height: 248px;
            margin-top: -183px
        }

        .u-section-2 .u-container-layout-5 {
            padding-left: 35px;
            padding-right: 35px
        }

        .u-section-2 .u-image-3 {
            width: 183px;
            height: 183px
        }

        .u-section-2 .u-group-3 {
            width: 200px;
            min-height: 248px;
            margin-top: -183px
        }

        .u-section-2 .u-container-layout-7 {
            padding-left: 35px;
            padding-right: 35px
        }

        .u-section-2 .u-image-4 {
            width: 183px;
            height: 183px
        }

        .u-section-2 .u-group-4 {
            width: 200px;
            min-height: 248px;
            margin-top: -183px
        }

        .u-section-2 .u-text-14 {
            width: 256px
        }
    }

    @media (max-width: 991px) {
        .u-section-2 .u-text-1 {
            margin-left: 79px;
            margin-right: 79px
        }

        .u-section-2 .u-shape-1 {
            height: 800px;
            margin-right: initial;
            margin-left: initial
        }

        .u-section-2 .u-list-1 {
            grid-template-columns: 100%;
            width: 720px;
            margin-top: -924px
        }

        .u-section-2 .u-container-layout-1 {
            padding-left: 30px;
            padding-right: 30px
        }

        .u-section-2 .u-image-1 {
            width: 243px;
            height: 243px
        }

        .u-section-2 .u-group-1 {
            width: 397px;
            margin-top: -243px
        }

        .u-section-2 .u-container-layout-2 {
            padding-top: 0;
            padding-right: 0
        }

        .u-section-2 .u-container-layout-3 {
            padding-left: 30px;
            padding-right: 30px
        }

        .u-section-2 .u-image-2 {
            width: 243px;
            height: 243px
        }

        .u-section-2 .u-group-2 {
            width: 397px;
            margin-top: -243px
        }

        .u-section-2 .u-container-layout-4 {
            padding-top: 0;
            padding-right: 0
        }

        .u-section-2 .u-container-layout-5 {
            padding-left: 30px;
            padding-right: 30px
        }

        .u-section-2 .u-image-3 {
            width: 243px;
            height: 243px
        }

        .u-section-2 .u-group-3 {
            width: 397px;
            margin-top: -243px
        }

        .u-section-2 .u-container-layout-6 {
            padding-top: 0;
            padding-right: 0
        }

        .u-section-2 .u-container-layout-7 {
            padding-left: 30px;
            padding-right: 30px
        }

        .u-section-2 .u-image-4 {
            width: 243px;
            height: 243px
        }

        .u-section-2 .u-group-4 {
            width: 397px;
            margin-top: -243px
        }

        .u-section-2 .u-container-layout-8 {
            padding-top: 0;
            padding-right: 0
        }
    }

    @media (max-width: 767px) {
        .u-section-2 .u-text-1 {
            margin-left: 79px;
            margin-right: 79px
        }

        .u-section-2 .u-list-1 {
            width: 540px
        }

        .u-section-2 .u-image-1 {
            width: 214px;
            height: 214px
        }

        .u-section-2 .u-group-1 {
            width: 257px;
            margin-top: -214px
        }

        .u-section-2 .u-container-layout-2 {
            padding-left: 10px
        }

        .u-section-2 .u-text-2 {
            font-size: 2.25rem
        }

        .u-section-2 .u-text-3 {
            font-size: 1.125rem
        }

        .u-section-2 .u-image-2 {
            width: 214px;
            height: 214px
        }

        .u-section-2 .u-group-2 {
            width: 257px;
            margin-top: -214px
        }

        .u-section-2 .u-container-layout-4 {
            padding-left: 10px
        }

        .u-section-2 .u-text-5 {
            font-size: 2.25rem
        }

        .u-section-2 .u-text-6 {
            font-size: 1.125rem
        }

        .u-section-2 .u-image-3 {
            width: 214px;
            height: 214px
        }

        .u-section-2 .u-group-3 {
            width: 257px;
            margin-top: -214px
        }

        .u-section-2 .u-container-layout-6 {
            padding-left: 10px
        }

        .u-section-2 .u-text-8 {
            font-size: 2.25rem
        }

        .u-section-2 .u-text-9 {
            font-size: 1.125rem
        }

        .u-section-2 .u-image-4 {
            width: 214px;
            height: 214px
        }

        .u-section-2 .u-group-4 {
            width: 257px;
            margin-top: -214px
        }

        .u-section-2 .u-container-layout-8 {
            padding-left: 10px
        }

        .u-section-2 .u-text-11 {
            font-size: 2.25rem
        }

        .u-section-2 .u-text-12 {
            font-size: 1.125rem
        }
    }

    @media (max-width: 575px) {
        .u-section-2 .u-text-1 {
            font-size: 1.5rem
        }

        .u-section-2 .u-list-1 {
            width: 340px
        }

        .u-section-2 .u-image-1 {
            width: 255px;
            height: 255px
        }

        .u-section-2 .u-group-1 {
            min-height: 230px;
            margin-top: 34px;
            margin-right: initial;
            margin-left: initial;
            width: auto
        }

        .u-section-2 .u-text-3 {
            margin-left: auto;
            margin-right: auto;
            font-size: 1.25rem
        }

        .u-section-2 .u-social-icons-1 {
            margin-left: auto
        }

        .u-section-2 .u-image-2 {
            width: 255px;
            height: 255px
        }

        .u-section-2 .u-group-2 {
            min-height: 230px;
            margin-top: 34px;
            margin-right: initial;
            margin-left: initial;
            width: auto
        }

        .u-section-2 .u-text-5 {
            margin-left: auto;
            margin-right: auto
        }

        .u-section-2 .u-text-6 {
            margin-left: auto;
            margin-right: auto;
            font-size: 1.25rem
        }

        .u-section-2 .u-social-icons-2 {
            margin-left: auto
        }

        .u-section-2 .u-image-3 {
            width: 255px;
            height: 255px
        }

        .u-section-2 .u-group-3 {
            min-height: 230px;
            margin-top: 34px;
            margin-right: initial;
            margin-left: initial;
            width: auto
        }

        .u-section-2 .u-text-8 {
            margin-left: auto;
            margin-right: auto
        }

        .u-section-2 .u-text-9 {
            margin-left: auto;
            margin-right: auto;
            font-size: 1.25rem
        }

        .u-section-2 .u-social-icons-3 {
            margin-left: auto
        }

        .u-section-2 .u-image-4 {
            width: 255px;
            height: 255px
        }

        .u-section-2 .u-group-4 {
            min-height: 230px;
            margin-top: 34px;
            margin-right: initial;
            margin-left: initial;
            width: auto
        }

        .u-section-2 .u-text-11 {
            margin-left: auto;
            margin-right: auto
        }

        .u-section-2 .u-text-12 {
            margin-left: auto;
            margin-right: auto;
            font-size: 1.25rem
        }

        .u-section-2 .u-social-icons-4 {
            margin-left: auto
        }
    }

</style>
@section('sidebar')
    @include('front.metiers.sidebar')
@endsection
@section('content') 
    <section class="u-align-center u-clearfix u-section-2" id="sec-5989">
        <h2 class="u-align-center u-text u-text-1">{{ __('traduction.Nos articles') }}
        </h2>
        <div class="u-expanded-width u-palette-3-base u-shape u-shape-rectangle u-shape-1"></div>
        <div class="u-list u-repeater u-list-1">
            @foreach ($articles as $article)
                <div class="u-container-style u-list-item u-repeater-item u-white u-list-item-1">
                    <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                        <a href="{{ route('blog.details', ["url"=> $pole->url, "id" => $article->id]) }}" style="text-decoration: none;">
                            <div alt="" class="u-image u-image-circle u-image-1"
                            style="background-image: url('{{ asset("public/images/articles/" . $article->image_article) }}');"></div>
                        </a>
                        <div class="u-align-center-xs u-container-style u-expanded-width-xs u-group u-group-1">
                            <div class="u-container-layout u-container-layout-2">
                                <a href="{{ route('blog.details', ["url"=> $pole->url, "id" => $article->id]) }}" style="text-decoration: none;">
                                    <h4 class="u-custom-font u-font-oswald u-text u-text-2">{{ $article->title_article }}</h4>
                                </a>
                                <h5 class="u-custom-font u-text u-text-default u-text-font u-text-palette-2-base u-text-3">
                                    {{-- {{ \App\ArticlesSerie::where('id', $article->serie_id)->where('status_serie', 1)->get()->first()->nom_serie }} --}}
                                </h5>
                                <p class="u-text u-text-grey-50 u-text-4">
                                    {{ \Illuminate\Support\Str::limit(__('traduction.' . strip_tags($article->title_article)), 80, $end = '...') }}
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
            @endforeach
        </div>
    </section>
@endsection
