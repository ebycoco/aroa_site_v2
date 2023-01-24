<html>

<head>
    <link rel="stylesheet" href="https://aroapartners.com/assets/new/test/test_nicepage.css" media="screen">
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


    <style>
        /* Mise en forme ecran telephone*/
        @media (max-width: 575.98px) {
            .menu-area ul {
                list-style: none;

            }

            .menu-area {
                display: inline-block;
                text-align: center;
                position: absolute;
                top: 5%;
                left: 99%;
                transform: translate(-50%, -50%);
            }

            .menu-area li:hover {
                /* background: #029bd5; */
            }

            .menu-area>ul {
                list-style: none;
                margin: 0;
                padding: 0;
                display: inline-block;
                /* background: #313131; */
                color: #fff;
            }

            .menu-area>ul>li {
                position: relative;
                cursor: pointer;
                font-family: poppins;
                font-size: 14px;
                letter-spacing: 1px;
                width: 136px;
                height: 50px;
                line-height: 50px;
                margin-left: -33px;
            }

            .dropdownhome {
                position: absolute;
                top: 100%;
                left: -10%;
                width: 100%;
                padding: 0;
            }

            .dropdownhome li {
                background: transparent;
                display: none;
                border-radius: 50%;
                /* font-family: 'Open Sans', sans-serif; */

            }

            .dropdownhome li a {
                color: #fff;
                text-decoration: none;
            }

            .dropdownhome li a {
                /* background: #029bd5; */
                width: 100%;
                padding: 12px 25px 12px 25px;
            }

            .menu-area>ul>li i {
                font-size: 25px;
            }

            .menu-area>ul>li {
                color: #fff;
            }

            .dropdownhome li:hover {
                background: #002060 !important;
            }

            .menu-area li:hover>.dropdownhome li {
                display: block;

            }

            .menu-area li:hover>.dropdownhome {
                perspective: 1000px;
            }

            .menu-area li:hover>.dropdownhome li {
                transform-origin: top center;
                opacity: 0;
            }

            .menu-area li:hover>.dropdownhome li:nth-child(1) {
                animation: animate 300ms ease-in-out forwards;
                animation-delay: -150ms;
            }

            .menu-area li:hover>.dropdownhome li:nth-child(2) {
                animation: animate 300ms ease-in-out forwards;
                animation-delay: 0;
            }

        }

        /* Mise en forme ecran tablette*/
        @media (min-width: 575.99px) and (max-width: 768px) {
            .menu-area ul {
                list-style: none;

            }

            .menu-area {
                display: inline-block;
                text-align: center;
                position: absolute;
                top: 8%;
                left: 99%;
                transform: translate(-50%, -50%);
            }

            .menu-area li:hover {
                /* background: #029bd5; */
            }

            .menu-area>ul {
                list-style: none;
                margin: 0;
                padding: 0;
                display: inline-block;
                /* background: #313131; */
                color: #fff;
            }

            .menu-area>ul>li {
                position: relative;
                cursor: pointer;
                font-family: poppins;
                font-size: 14px;
                letter-spacing: 1px;
                width: 136px;
                height: 50px;
                line-height: 50px;
                margin-left: -76px;
            }

            .dropdownhome {
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                padding: 0;
            }

            .dropdownhome li {
                background: transparent;
                display: none;
                border-radius: 50%;
                j font-family: 'Open Sans', sans-serif;

            }

            .dropdownhome li a {
                color: #fff;
                text-decoration: none;
            }

            .dropdownhome li a {
                /* background: #029bd5; */
                width: 100%;
                padding: 12px 25px 12px 25px;
            }

            .menu-area>ul>li i {
                font-size: 25px;
            }

            .menu-area>ul>li {
                color: #fff;
            }

            .dropdownhome li:hover {
                background: #002060 !important;
            }

            .menu-area li:hover>.dropdownhome li {
                display: block;

            }

            .menu-area li:hover>.dropdownhome {
                perspective: 1000px;
            }

            .menu-area li:hover>.dropdownhome li {
                transform-origin: top center;
                opacity: 0;
            }

            .menu-area li:hover>.dropdownhome li:nth-child(1) {
                animation: animate 300ms ease-in-out forwards;
                animation-delay: -150ms;
            }

            .menu-area li:hover>.dropdownhome li:nth-child(2) {
                animation: animate 300ms ease-in-out forwards;
                animation-delay: 0;
            }

        }

        /* Mise en forme ecran tablette*/
        @media (min-width: 769px) and (max-width: 991px) {
            .menu-area ul {
                list-style: none;

            }

            .menu-area {
                display: inline-block;
                text-align: center;
                position: absolute;
                top: 8%;
                left: 99%;
                transform: translate(-50%, -50%);
            }

            .menu-area li:hover {
                /* background: #029bd5; */
            }

            .menu-area>ul {
                list-style: none;
                margin: 0;
                padding: 0;
                display: inline-block;
                /* background: #313131; */
                color: #fff;
            }

            .menu-area>ul>li {
                position: relative;
                cursor: pointer;
                font-family: poppins;
                font-size: 14px;
                letter-spacing: 1px;
                width: 136px;
                height: 50px;
                line-height: 50px;
                margin-left: -76px;
            }

            .dropdownhome {
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                padding: 0;
            }

            .dropdownhome li {
                background: transparent;
                display: none;
                border-radius: 50%;
                /* font-family: 'Open Sans', sans-serif; */

            }

            .dropdownhome li a {
                color: #fff;
                text-decoration: none;
            }

            .dropdownhome li a {
                /* background: #029bd5; */
                width: 100%;
                padding: 12px 25px 12px 25px;
            }

            .menu-area>ul>li i {
                font-size: 25px;
            }

            .menu-area>ul>li {
                color: #fff;
            }

            .dropdownhome li:hover {
                background: #002060 !important;
            }

            .menu-area li:hover>.dropdownhome li {
                display: block;

            }

            .menu-area li:hover>.dropdownhome {
                perspective: 1000px;
            }

            .menu-area li:hover>.dropdownhome li {
                transform-origin: top center;
                opacity: 0;
            }

            .menu-area li:hover>.dropdownhome li:nth-child(1) {
                animation: animate 300ms ease-in-out forwards;
                animation-delay: -150ms;
            }

            .menu-area li:hover>.dropdownhome li:nth-child(2) {
                animation: animate 300ms ease-in-out forwards;
                animation-delay: 0;
            }

        }

        /* Mise en forme ecran moyen*/
        @media (min-width: 992px) and (max-width: 1199px) {
            .menu-area ul {
                list-style: none;

            }

            .menu-area {
                display: inline-block;
                text-align: center;
                position: absolute;
                top: 5%;
                left: 99%;
                transform: translate(-50%, -50%);
            }

            .menu-area li:hover {
                /* background: #029bd5; */
            }

            .menu-area>ul {
                list-style: none;
                margin: 0;
                padding: 0;
                display: inline-block;
                /* background: #313131; */
                color: #fff;
            }

            .menu-area>ul>li {
                position: relative;
                cursor: pointer;
                font-family: poppins;
                font-size: 14px;
                letter-spacing: 1px;
                width: 136px;
                height: 50px;
                line-height: 50px;
                margin-left: -76px;
            }

            .dropdownhome {
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                padding: 0;
            }

            .dropdownhome li {
                background: transparent;
                display: none;
                border-radius: 50%;
                /* j font-family: 'Open Sans', sans-serif; */

            }

            .dropdownhome li a {
                color: #fff;
                text-decoration: none;
            }

            .dropdownhome li a {
                /* background: #029bd5; */
                width: 100%;
                padding: 12px 25px 12px 25px;
            }

            .menu-area>ul>li i {
                font-size: 25px;
            }

            .menu-area>ul>li {
                color: #fff;
            }

            .dropdownhome li:hover {
                background: #002060 !important;
            }

            .menu-area li:hover>.dropdownhome li {
                display: block;

            }

            .menu-area li:hover>.dropdownhome {
                perspective: 1000px;
            }

            .menu-area li:hover>.dropdownhome li {
                transform-origin: top center;
                opacity: 0;
            }

            .menu-area li:hover>.dropdownhome li:nth-child(1) {
                animation: animate 300ms ease-in-out forwards;
                animation-delay: -150ms;
            }

            .menu-area li:hover>.dropdownhome li:nth-child(2) {
                animation: animate 300ms ease-in-out forwards;
                animation-delay: 0;
            }

        }


        /* Mise en forme grand ecran*/
        @media (min-width: 1200px) {
            .menu-area ul {
                list-style: none;

            }

            .menu-area {
                display: inline-block;
                text-align: center;
                position: absolute;
                top: 5%;
                left: 99%;
                transform: translate(-50%, -50%);
            }

            .menu-area li:hover {
                /* background: #029bd5; */
            }

            .menu-area>ul {
                list-style: none;
                margin: 0;
                padding: 0;
                display: inline-block;
                /* background: #313131; */
                color: #fff;
            }

            .menu-area>ul>li {
                position: relative;
                cursor: pointer;
                font-family: poppins;
                font-size: 14px;
                letter-spacing: 1px;
                width: 136px;
                height: 50px;
                line-height: 50px;
                margin-left: -76px;
            }

            .dropdownhome {
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                padding: 0;
            }

            .dropdownhome li {
                background: transparent;
                display: none;
                border-radius: 50%;
                /* j font-family: 'Open Sans', sans-serif; */

            }

            .dropdownhome li a {
                color: #fff;
                text-decoration: none;
            }

            .dropdownhome li a {
                /* background: #029bd5; */
                width: 100%;
                padding: 12px 25px 12px 25px;
            }

            .menu-area>ul>li i {
                font-size: 25px;
            }

            .menu-area>ul>li {
                color: #fff;
            }

            .dropdownhome li:hover {
                background: #002060 !important;
            }

            .menu-area li:hover>.dropdownhome li {
                display: block;

            }

            .menu-area li:hover>.dropdownhome {
                perspective: 1000px;
            }

            .menu-area li:hover>.dropdownhome li {
                transform-origin: top center;
                opacity: 0;
            }

            .menu-area li:hover>.dropdownhome li:nth-child(1) {
                animation: animate 300ms ease-in-out forwards;
                animation-delay: -150ms;
            }

            .menu-area li:hover>.dropdownhome li:nth-child(2) {
                animation: animate 300ms ease-in-out forwards;
                animation-delay: 0;
            }

        }


        /* .dropdownhome {
    font-family: 'Open Sans', sans-serif;
} */

        body {
            padding: 0;
            margin: 0;
            -webkit-background-size: cover;
            height: 100vh;
        }



        @keyframes animate {
            0% {
                opacity: 0;
                transform: rotateX(-90deg);
            }

            50% {
                transform: rotateX(20deg);
            }

            100% {
                opacity: 1;
                transform: rotateX(0deg);
            }
        }

    </style>
     <style>
        #tmSideBar {
            /* position: absolute; */
            top: 0;
            /* left: 0; */
            /* overflow: auto; */
            /* border-right: 1px solid #ddd; */
        }

        .sidebar {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: initial;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            /* padding: 60px 50px; */
            cursor: default;
            z-index: 100;
            background: rgba(0, 0, 0, 1);
            color: white;
            z-index: 1000;
        }

        .lienlogo a {
            text-decoration: none;
        }

        .lienlogo a:hover {
            color: #7086B1;
            text-decoration: none;
        }

        .lienlogo {
            /* justify-content: center;
    align-items: center; */
            text-align: center;
        }

        .tm-main-nav ul li a img {
            width: 30%;
            height: auto;
        }

    </style>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="    Aroapartners">
    <link href="https://aroapartners.com/images/logo.ico" rel="icon">
    <meta name="csrf-token" content="bDA8LqwbpeKAB3eiO9RbGdgHQObmN2zGSUC7f2hW">

    <title> Offre d'emploi | IT / Digital
    </title>

    <!--
    
    Template 2102 Constructive
    
    http://www.tooplate.com/view/2102-constructive
    
    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="https://aroapartners.com/assets/new/cssjs/it/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://aroapartners.com/assets/new/cssjs/it/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://aroapartners.com/assets/new/cssjs/it/css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="https://aroapartners.com/assets/new/cssjs/it/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="https://aroapartners.com/assets/new/cssjs/it/slick/slick-theme.css">
    <link rel="stylesheet" href="https://aroapartners.com/assets/new/cssjs/it/css/tooplate-style.css">

    <link rel="stylesheet" href="https://aroapartners.com/assets/new/cssjs/blog/css/icomoon.css">
    <link rel="stylesheet" href="https://aroapartners.com/assets/new/front/metier/emploi.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@100;300&display=swap');

        p,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        ul,
        li,
        a {
            font-family: 'Lato', sans-serif !important;
        }

        .footer-link {
            /* position: initial !important; */
            bottom: 0px !important;
            /* right: 26px; */
            /* margin-left: 20px; */
            color: white;
            /* text-align: right; */
            width: 100%;
            z-index: 999;
        }

        .menu-area {
            z-index: 1;
        }

        .dropdownhome {
            margin-top: 0 !important;
        }

        .logotoggle {
            display: none;
            visibility: hidden;
        }

        .copyaroa {
            color: #fff;
            width: 100%;
            text-align: center;
            display: flex;
            justify-items: center;
            align-items: center;
            justify-content: center;
            height: 40px;
            font-size: 15px;
        }

    </style>

    <script>
        var renderPage = true;

        if (navigator.userAgent.indexOf('MSIE') !== -1 ||
            navigator.appVersion.indexOf('Trident/') > 0) {
            /* Microsoft Internet Explorer detected in. */
            alert("Please view this in a modern browser such as Chrome or Microsoft Edge.");
            renderPage = false;
        }
    </script>
</head>

<body class="loaded">

    <!-- Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- Page Content -->
    <div class="container-fluid tm-main">

        <div class="row tm-main-row">
            <!-- Sidebar -->
           @yield('sidebar')
            {{-- <div id="tmSideBar" class="col-xl-3 col-lg-4 col-md-12 col-sm-12 sidebar">
                <button id="tmMainNavToggle" class="menu-icon">☰<a class="btn"
                        style="color: #fff; margin-top: 2%;"><img src="https://aroapartners.com/images/logo.png"
                            alt="logo" style="width: 65px;
        margin-left: 38px;
        margin-top: -41px;"></a></button>
                <div class="inner" style="margin-top: -55px;">
                    <p class="lienlogo"><a href="https://aroapartners.com/poles" style="margin:2px;"><img
                                src="https://aroapartners.com/images/logo.png" alt="logo" style="width: 40%;"></a></p>
                    <p class="lienlogo"><a href="https://aroapartners.com/it" title="Retour"><i
                                class="fas fa-chevron-left" style="font-size: 30px;"></i></a></p>
                    <nav id="tmMainNav" class="tm-main-nav">

                        <ul>
                            <li>
                                <a href="https://aroapartners.com/it/home" id="tmNavLink1" class="scrolly "
                                    data-bg-img="constructive_bg_01.jpg" data-page="#tm-section-1">
                                    <img class="tm-nav-fa-icon"
                                        src="https://aroapartners.com/assets/new/ressources/images/icones/presentation.png"
                                        alt="icone">
                                    <span>Présentation</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://aroapartners.com/it/reference" id="tmNavLink2" class="scrolly "
                                    data-bg-img="constructive_bg_02.jpg" data-page="#tm-section-2"
                                    data-page-type="carousel">
                                    <img class="tm-nav-fa-icon"
                                        src="https://aroapartners.com/assets/new/ressources/images/icones/reference.png"
                                        alt="icone">
                                    <span>Références</span>
                                </a>
                            </li>

                            <li>
                                <a href="https://aroapartners.com/it/offre-emploi" class="scrolly active"
                                    data-bg-img="constructive_bg_04.jpg" data-page="#tm-section-5">
                                    <img class="tm-nav-fa-icon"
                                        src="https://aroapartners.com/assets/new/ressources/images/icones/offre.png"
                                        alt="icone">
                                    <span>Offres d'emploi</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://aroapartners.com/it/formations" class="scrolly "
                                    data-bg-img="constructive_bg_04.jpg" data-page="#tm-section-5">
                                    <img class="tm-nav-fa-icon"
                                        src="https://aroapartners.com/assets/new/ressources/images/icones/formations.png"
                                        alt="icone">
                                    <span>Formations</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://aroapartners.com/it/equipe" class="scrolly "
                                    data-bg-img="constructive_bg_04.jpg" data-page="#tm-section-6">
                                    <img class="tm-nav-fa-icon"
                                        src="https://aroapartners.com/assets/new/ressources/images/icones/equipe.png"
                                        alt="icone">
                                    <span>Notre équipe</span>
                                </a>
                            </li>


                        </ul>

                    </nav>
                </div>
            </div> --}}
            <script type="text/javascript" src="https://aroapartners.com/assets/new/cssjs/it/js/jquery-3.2.1.min.js"></script>
            @yield('content')

            {{-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 tm-content"
                style="background: transparent; margin-bottom: 0px;">

                <link rel="stylesheet" href="https://aroapartners.com/assets/new/cssjs/blog/css/icomoon.css">
                <section class="container">

                    <div class="row mb-4 mt-4">
                        <header class="col-xl-12">
                            <h2 class="tm-text-shadow">Offres d'emploi</h2>
                        </header>
                    </div>

                    <section class="u-align-center u-clearfix u-grey-5 u-valign-middle-xl u-section-2"
                        id="carousel_60c6">
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
                                            <a href="https://aroapartners.com/it/offre-emploi/detail/4"><img
                                                    class="tm-icon-circled tm-icon-media"
                                                    src="{{ asset('public/images/offres/' . $offre->image_offre) }}"
                                                    alt=""></a>
                                            <div class="media-body" style="width: 100%">
                                                <a href="https://aroapartners.com/it/offre-emploi/detail/4">
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
                                            class="u-clearfix u-form-spacing-18 u-form-vertical u-inner-form"
                                            style="padding: 0px;" source="email" name="postulerform"
                                            enctype="multipart/form-data" novalidate="novalidate">
                                            <input type="hidden" name="_token"
                                                value="bDA8LqwbpeKAB3eiO9RbGdgHQObmN2zGSUC7f2hW"> <input type="hidden"
                                                id="siteId" name="siteId" value="498158" wfd-invisible="true">
                                            <input type="hidden" id="pageId" name="pageId" value="498262"
                                                wfd-invisible="true">
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
                                                <label for="cv-f0d0" class="u-label u-label-3"
                                                    wfd-invisible="true">CV</label>
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
                



            </div> --}}

            <div class="tm-copyright-text copyaroa">Copyright © <span id="annee">2022</span> <a
                    style="text-decoration: none;" rel="nofollow" href="https://www.aroapartners.com"> &nbsp;
                    AroaLab</a>
            </div>
        </div>

    </div>
    <div style="float: right; margin-top:0 !important; left: 100% !important">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
            integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">


        <div class="menu-area">
            <ul>
            </ul>
        </div>
    </div>




    <div id="preload-01"></div>
    <div id="preload-02"></div>
    <div id="preload-03"></div>
    <div id="preload-04"></div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="https://aroapartners.com/assets/new/cssjs/it/js/jquery.magnific-popup.min.js">
    </script>
    <script type="text/javascript" src="https://aroapartners.com/assets/new/cssjs/it/js/jquery.backstretch.min.js"></script>
    <script type="text/javascript" src="https://aroapartners.com/assets/new/cssjs/it/slick/slick.min.js"></script>
    <!-- Slick Carousel -->
    <script src="https://aroapartners.com/assets/new/front/metier/cacher_sidebar.js"></script>
    <script>
        var today = new Date();
        var annee = today.getFullYear()
        document.getElementById('annee').innerHTML = annee
    </script>

<script src="https://aroapartners.com/assets/new/cssjs/it/js/jquery.validate.js" defer=""></script>
<script src="https://aroapartners.com/js/jquery-3.4.1.min.js"></script>
<script src="https://aroapartners.com/assets/new/front/metier/postuleremploi.js"></script>
    <script>
        var sidebarVisible = false;
        var currentPageID = "#tm-section-1";

        // Setup Carousel
        function setupCarousel() {

            // If current page isn't Carousel page, don't do anything.
            if ($('#tm-section-2').css('display') ==
                "none") {} else { // If current page is Carousel page, set up the Carousel.

                var slider = $('.tm-img-slider');
                var windowWidth = $(window).width();

                if (slider.hasClass('slick-initialized')) {
                    slider.slick('destroy');
                }

                if (windowWidth < 640) {
                    slider.slick({
                        dots: true,
                        infinite: false,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    });
                } else if (windowWidth < 992) {
                    slider.slick({
                        dots: true,
                        infinite: false,
                        slidesToShow: 2,
                        slidesToScroll: 1
                    });
                } else {
                    // Slick carousel
                    slider.slick({
                        dots: true,
                        infinite: false,
                        slidesToShow: 3,
                        slidesToScroll: 2
                    });
                }

                // Init Magnific Popup
                $('.tm-img-slider').magnificPopup({
                    delegate: 'a', // child items selector, by clicking on it popup will open
                    type: 'image',
                    gallery: {
                        enabled: true
                    }
                    // other options
                });
            }
        }

        // Setup Nav
        function setupNav() {
            // Add Event Listener to each Nav item
            $(".tm-main-nav ajj").click(function(e) {
                e.preventDefault();

                var currentNavItem = $(this);
                changePage(currentNavItem);

                setupCarousel();
                setupFooter();

                // Hide the nav on mobile
                $("#tmSideBar").removeClass("show");
            });
        }

        function changePage(currentNavItem) {
            // Update Nav items
            $(".tm-main-nav a").removeClass("active");
            currentNavItem.addClass("active");

            $(currentPageID).hide();

            // Show current page
            currentPageID = currentNavItem.data("page");
            $(currentPageID).fadeIn(1000);

            // Change background image
            var bgImg = currentNavItem.data("bgImg");
            $.backstretch("img/" + bgImg);
        }

        // Setup Nav Toggle Button
        function setupNavToggle() {

            $("#tmMainNavToggle").on("click", function() {
                $(".sidebar").toggleClass("show");
            });
        }

        // If there is enough room, stick the footer at the bottom of page content.
        // If not, place it after the page content
        function setupFooter() {

            var padding = 100;
            var footerPadding = 40;
            var mainContent = $("section" + currentPageID);
            var mainContentHeight = mainContent.outerHeight(true);
            var footer = $(".footer-link");
            var footerHeight = footer.outerHeight(true);
            var totalPageHeight = mainContentHeight + footerHeight + footerPadding + padding;
            var windowHeight = $(window).height();

            if (totalPageHeight > windowHeight) {
                $(".tm-content").css("margin-bottom", footerHeight + footerPadding + "px");
                footer.css("bottom", footerHeight + "px");
            } else {
                $(".tm-content").css("margin-bottom", "0");
                footer.css("bottom", "20px");
            }
        }

        // Everything is loaded including images.
        $(window).on("load", function() {

            // Render the page on modern browser only.
            if (renderPage) {
                // Remove loader
                $('body').addClass('loaded');

                // Page transition
                var allPages = $(".tm-section");

                // Handle click of "Continue", which changes to next page
                // The link contains data-nav-link attribute, which holds the nav item ID
                // Nav item ID is then used to access and trigger click on the corresponding nav item
                var linkToAnotherPage = $("a.tm-btn[data-nav-link]");

                if (linkToAnotherPage != null) {

                    linkToAnotherPage.on("click", function() {
                        var navItemToHighlight = linkToAnotherPage.data("navLink");
                        $("a" + navItemToHighlight).click();
                    });
                }

                // Hide all pages
                allPages.hide();

                $("#tm-section-1").fadeIn();

                // Set up background first page
                var bgImg = $("#tmNavLink1").data("bgImg");

                $.backstretch("img/" + bgImg, {
                    fade: 500
                });

                // Setup Carousel, Nav, and Nav Toggle
                setupCarousel();
                setupNav();
                setupNavToggle();
                setupFooter();

                // Resize Carousel upon window resize
                $(window).resize(function() {
                    setupCarousel();
                    setupFooter();
                });
            }
        });
    </script>


    <script>
        /*
                                                            ===============  Changer l'arrière plan des expertise au survol ==================
                                                            */
        $(function() {
            // $('#present').show(1000);
            $('.anime_experte').hover(
                function() {
                    $(this).css({
                        "background": "#807F7F"
                    })
                },
                function() {
                    $(this).css({
                        "background": "transparent"
                    })
                })
            $("#present").animate({
                width: "100%",
                opacity: 0.8,
                transition: '5s',
                marginLeft: "0.8in",
                borderWidth: "10px"
            }, 1500).animate({
                marginLeft: "0in",
            }, 1500);

            $("#present").hover(function() {
                $(this).fadeOut(100);
                $(this).fadeIn(500);
                $(this).css({
                    // "background-color": '#C1F0EA',
                    "border-radius": "10px",
                    "margin": '5px',
                    // 'color': '#000'
                })
            })
        });
        // Wrap every letter in a span
        var textWrapper = document.querySelector('.ml2');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({
                loop: false
            })
            .add({
                targets: '.ml2 .letter',
                scale: [6, 1],
                opacity: [0, 1],
                translateZ: 2,
                easing: "easeOutExpo",
                duration: 1950,
                delay: (el, i) => 700 * i
            }).add({
                targets: '.ml2',
                opacity: 1,
                duration: 10000,
                easing: "easeOutExpo",
                delay: 1000
            });
    </script>




    <div class="backstretch"
        style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; height: 100%; width: 100%; z-index: -999999; position: fixed;">
        <div class="backstretch-item"
            style="position: absolute; display: none; margin: 0px; padding: 0px; border: none; width: 100%; height: 100%; z-index: -999999;">
            <img alt="" src="img/constructive_bg_01.jpg"
                style="position: absolute; margin: 0px; padding: 0px; border: none; width: 100%; height: 100%; max-width: none;">
        </div>
    </div>
</body>

</html>
