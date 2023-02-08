<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Réalisé par:


    1- DIBY Koffi Innocent-Kericson - 07 58 08 41 98 - kericson.diby@gmail.com

    2- AKICHI Jean-Philippe         - 07 58 65 04 87 - jeanphilippeahichi@gmail.com

    -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5H2G2J8');
    </script>
    <!-- End Google Tag Manager -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') &nbsp;| AROA Partners</title>
    <script type="application/ld+json">
        [{
                "@context": "https://schema.org",
                "@type": "BreadcrumbList",
                "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Contactez-nous",
                    "item": "https://www.aroapartners.com/contact"
                }, {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "Indemnités de Fin de Carrière",
                    "item": "https://www.aroapartners.com/nos-metiers"
                }, {
                    "@type": "ListItem",
                    "position": 3,
                    "name": "Transformation digitale",
                    "item": "https://www.aroapartners.com/nos-metiers"
                }, {
                    "@type": "ListItem",
                    "position": 4,
                    "name": "Marketing & Communication digitale"
                    "item": "https://www.aroapartners.com/nos-metiers"
                }, {
                    "@type": "ListItem",
                    "position": 6,
                    "name": "A propos",
                    "item": "https://www.aroapartners.com/apropos"
                }]
            },
            {
                "@context": "https://schema.org",
                "@type": "Organization",
                "address": {
                    "@type": "PostalAddress",
                    "addressLocality": "Abidjan, Côte d'Ivoire",
                    "postalCode": "00225",
                    "streetAddress": "Résidence Climbié Deux-Plateaux Vallon ABIDJAN"
                },
                "email": "contact@aroapartners.com",
                "faxNumber": "+225 27 22 54 30 62",

                "name": "AROAPARTNERS",
                "telephone": "+225 27 22 54 30 62 /  +225 05 75 41 69 57 / +33 (0)1 43 33 20 75"
            }
        ]
    </script>
    <link rel="canonical" href="@yield('url')" />
    <meta name="description" content="@yield('meta_description')">

    <meta property="og:title" content="@yield('meta_title')" />
    <meta property="og:description" content="@yield('meta_description')" />
    <meta property="og:type" content="@yield('type')" />

    <meta property="og:url" content="@yield('url')" />

    <meta property="og:image" content="@yield('image')" />

    <meta property="og:site_name" content="Aroapartners" />
    <meta name="robots" content="index, follow">

    <link href="{{ asset('public/front/images/logo.ico') }}" rel="icon">
    {{-- <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/front/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front/css/tooltipster.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front/css/cubeportfolio.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front/css/revolution/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front/css/revolution/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/flag-icons.css') }}">
    <style>
        @media (max-width: 992px) {
            .transparent-bg:not(.fixedmenu) {
                background: rgba(38, 49, 60, -1.45);
                padding: 0;
            }

            .menu-area {
                top: 100% !important;
            }
        }

        @media (min-width: 993px) {
            .d-inline-block {
                display: none !important;
            }

            .menu-area {
                top: 100% !important;
            }
        }

    </style>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
   

</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5H2G2J8" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>

    <!-- header -->
    <header class="site-header">
        <nav class="navbar navbar-expand-lg transparent-bg padding-nav static-nav">
            @include('front.layouts.langue_bouton')
        </nav>
    </header>
    <!-- header -->

    @yield('content')


    <script src="{{ asset('public/front/js/jquery-3.4.1.min.js') }}"></script>

    <script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <!--Bootstrap Core-->
    <script src="{{ asset('public/front/js/propper.min.js') }}"></script>
    <script src="{{ asset('public/front/js/bootstrap.min.js') }}"></script>
    <!--to view items on reach-->
    <script src="{{ asset('public/front/js/jquery.appear.js') }}"></script>
    <!--Owl Slider-->
    <script src="{{ asset('public/front/js/owl.carousel.min.js') }}"></script>
    <!--number counters-->
    <script src="{{ asset('public/front/js/jquery-countTo.js') }}"></script>
    <!--Parallax Background-->
    <script src="{{ asset('public/front/js/parallaxie.js') }}"></script>
    <!--Cubefolio Gallery-->
    <script src="{{ asset('public/front/js/jquery.cubeportfolio.min.js') }}"></script>
    <!--Fancybox js-->
    <script src="{{ asset('public/front/js/jquery.fancybox.min.js') }}"></script>
    <!--tooltip js-->
    <script src="{{ asset('public/front/js/tooltipster.min.js') }}"></script>
    <!--wow js-->
    <script src="{{ asset('public/front/js/wow.js') }}"></script>
    <!--Revolution SLider-->
    <script src="{{ asset('public/front/js/revolution/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('public/front/js/revolution/jquery.themepunch.revolution.min.js') }}"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
    <script src="{{ asset('public/front/js/revolution/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('public/front/js/revolution/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('public/front/js/revolution/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('public/front/js/revolution/extensions/revolution.extension.layeranimation.min.js') }}">
    </script>
    <script src="{{ asset('public/front/js/revolution/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('public/front/js/revolution/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('public/front/js/revolution/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('public/front/js/revolution/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('public/front/js/revolution/extensions/revolution.extension.video.min.js') }}"></script>
    <!--map js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgIfLQi8KTxTJahilcem6qHusV-V6XXjw"></script>
    <!--custom functions and script-->
    <script src="{{ asset('public/front/js/functions.js') }}"></script>



</body>
<!-- Réalisé par:


    1- DIBY Koffi Innocent-Kericson - 07 58 08 41 98 - kericson.diby@gmail.com

    2- AKICHI Jean-Philippe         - 07 58 65 04 87 - jeanphilippeahichi@gmail.com

    -->

</html>
