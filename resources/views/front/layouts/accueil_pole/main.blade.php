<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield('meta_description')">
    <title>@yield('title')</title>
    <link href="{{ asset('images/logo.ico') }}" rel="icon">
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

    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/new/style_rotation_pole.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@100;300&display=swap');

        * {
            font-family: 'Lato', sans-serif;
        }

        .btn-menu .ligne p a {
            text-decoration: none;
            text-align: center;
            color: #fff;
        }

        .btn-menu .ligne p {
            text-align: center;
            margin-left: 10px;
        }

        @media (max-width: 575.98px) {
            .sidebar.side .arriereplan {
                display: none !important;
            }

            .poleicons {
                /* position: absolute; */
                margin: auto;
                /* top: 50%;
                                left: 50%;  */
                height: 100%;
                width: 100%;
                animation: rotation 30s linear infinite;
                animation-direction: alternate-reverse;
                background: none;

            }

            .poleicons:hover {
                /* margin: auto; */
                animation-play-state: paused;
                /* animation: rotation 9000000s linear infinite; */
            }

            @keyframes rotation {
                100% {
                    transform: rotate(360deg);
                }
            }

            .blob a {
                animation: rotation 30s linear infinite;
                animation-direction: alternate;
                color: #fff;
                text-align: center;
                font-size: 13px;
            }

            .blob a:hover {
                animation-play-state: paused;
            }

            .poleicons:hover .blob a {
                text-decoration: none;
                color: #fff;
                animation-play-state: paused;
            }

            #imp {
                font-size: 12px !important;
            }
        }

        @media (min-width: 575.99px) and (max-width: 768px) {
            .poleicons {
                /* position: absolute; */
                margin: auto;
                /* top: 50%;
                                left: 50%;  */
                height: 100%;
                width: 40%;
                animation: rotation 30s linear infinite;
                animation-direction: alternate-reverse;
                background: none;

            }

            .poleicons:hover {
                margin: auto;
                animation-play-state: paused;
                /* animation: rotation 9000000s linear infinite; */
            }

            @keyframes rotation {
                100% {
                    transform: rotate(360deg);
                }
            }

            .blob a {
                animation: rotation 30s linear infinite;
                animation-direction: alternate;
                color: #fff;
                text-align: center;

            }

            .blob a:hover {
                animation-play-state: paused;
            }

            .poleicons:hover .blob a {
                text-decoration: none;
                color: #fff;
                animation-play-state: paused;
            }

            #imp {
                font-size: 25px !important;
            }
        }

        @media (min-width: 769px) and (max-width: 991px) {
            .poleicons {
                position: absolute;
                margin: auto;
                height: 100%;
                width: 60%;
                left: 22%;
                animation: rotation 30s linear infinite;
                animation-direction: alternate-reverse;
                background: none;

            }

            .poleicons:hover {
                margin: auto;
                animation-play-state: paused;
                /* animation: rotation 9000000s linear infinite; */
            }

            @keyframes rotation {
                100% {
                    transform: rotate(360deg);
                }
            }

            .blob a {
                animation: rotation 30s linear infinite;
                animation-direction: alternate;
                color: #fff;
                text-align: center;
            }

            .blob a:hover {
                animation-play-state: paused;
            }

            .poleicons:hover .blob a {
                text-decoration: none;
                color: #fff;
                animation-play-state: paused;
            }

            #imp {
                font-size: 45px !important;
            }
        }

        @media (min-width: 992px) and (max-width: 1199px) {
            .poleicons {
                position: absolute;
                margin: auto;
                /* top: 50%;
                                left: 50%;  */
                height: 100%;
                width: 60%;
                left: 22%;
                animation: rotation 30s linear infinite;
                animation-direction: alternate-reverse;
                background: none;

            }

            .poleicons:hover {
                margin: auto;
                animation-play-state: paused;
                /* animation: rotation 9000000s linear infinite; */
            }

            @keyframes rotation {
                100% {
                    transform: rotate(360deg);
                }
            }

            .blob a {
                animation: rotation 30s linear infinite;
                animation-direction: alternate;
                color: #fff;
                text-align: center;
            }

            .blob a:hover {
                animation-play-state: paused;
            }

            .poleicons:hover .blob a {
                text-decoration: none;
                color: #fff;
                animation-play-state: paused;
            }

            #imp {
                font-size: 55px !important;
            }
        }

        @media (min-width: 1200px) {
            .side {
                width: 450px !important;
                z-index: 1000;
            }

            /* .blob:hover{
                transition: all 1s 0.3s ease-in;
            } */

            @keyframes rotation {
                100% {
                    transform: rotate(360deg);
                }
            }

            .poleicons {
                position: absolute;
                /* height: 100%;
                width: 75%;
                left: 12%; */

                height: 90%;
                width: 60%;
                top: 5%;
                left: 23%;

                animation: rotation 30s linear infinite;
                /* animation-delay: 8s; */
                animation-direction: alternate-reverse;
                /* background: #f00; */

            }

            .poleicons:hover {
                height: 90%;
                width: 60%;
                top: 5%;
                left: 23%;
                position: absolute;


                /* margin: auto; */
                animation-play-state: paused;
                /* animation: rotation 9000000s linear infinite; */
            }

            .poleicons:hover .blob a {
                text-decoration: none;
                color: #fff;
                animation-play-state: paused;
            }



            .blob a {

                animation: rotation 30s linear infinite;
                /* animation-delay: 8s; */
                animation-direction: alternate;
                color: #fff;
                /* text-align: center;
                transition: 1s; */
            }

            .blob {
                text-align: center;
            }

            .blob a img:hover {
                width: 100%;
                height: 100px;
                background: rgba(3, 3, 3, 0.5);
                border-radius: 50%;
            }

            /* .container-menu:hover{ */
            /* background: rgba(3, 3, 3, 0.5); */
            /* transition: 0.5s 0.6s ease-in-out; */
            /* animation: arriere 2s; */
            /* } */

            @keyframes arriere {
                0% {
                    opacity: 0.2;
                }

                20% {
                    opacity: 0.5;
                }

                40%,
                60% {
                    opacity: 0.7;
                }

                100% {
                    opacity: 0.5;
                }


            }

            /* .blob a img:hover{ */
            /* background: rgba(163, 189, 219, 0.5); */
            /* border-radius: 50%; */
            /* } */


            /* .blob a:hover {
                            animation-play-state: paused;
                        } */

            #imp {
                font-size: 65px !important;
            }


        }



        /* Chargement de la page */
        .loader {
            background: rgb(255, 255, 255);
            position: fixed;
            z-index: 99999;
            top: 0;
            left: 0;
            /* transform: translate(-50%, -50%) */
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .loader>img {
            width: 300px;
            height: 200px;
        }


        .loader.hidden {
            animation: fadeOut 1s;
            animation-fill-mode: forwards;
        }

        @keyframes fadeOut {
            100% {
                opacity: 0;
                visibility: hidden;
            }
        }

        .clickAnim {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: linear-gradient(to top, #427ece, #bebebb, #bdbd49);
            position: absolute;
            z-index: 1;
            transform: scale(0);
            transform-origin: center;
            animation: clickAnim 1s ease-in-out;
        }

        /*
------------------------------------ Style de pointage souris et survol -----------------------------------------
*/
        .hoverAnim {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: linear-gradient(#7086B1, #002060)
                /*rgba(13, 14, 14, 0.5)*/
            ;
            position: absolute;
            z-index: -1;
            transform: scale(0);
            /* transition: 0.6s all; */
            transform-origin: center;
            animation: clickAnim 2s ease-in-out;
        }

        @keyframes clickAnim {
            0% {
                transform: scale(0);
            }

            50% {
                transform: scale(1);
                opacity: 1;
            }

            0% {
                transform: scale(0);
                opacity: 0;
            }
        }

        /* .copyaroa {
            position: absolute;
            top: 100%;
            color: #fff;
            width: 100%;
            text-align: center;
            display: flex;
            justify-items: center;
            align-items: center;
            justify-content: center;
            height: 72px;
            font-size: 20px;
        }

        .tm-copyright-text {
            display: inline-block;
            padding: 5px 30px;
            background-color: rgba(0, 0, 0, 0.5);
        } */

    </style>
    <link rel="stylesheet" href="{{ asset('assets/new/style.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/new/style_pole_index.css') }}">
</head>

<body style="width: 100%;">

    {{-- Chargement de la page --}}
    <div class="loader">
        <img src="{{ asset('assets/new/ressources/images/loader.gif') }}" alt="loader">
    </div>

    {{-- Sidebar --}}
    @include('front.sidebar')
    <a class="btn" style="color: #fff; margin-top: 2%;"><i class="fas fa-bars"></i></a>
    <a class="btn" style="color: #fff; margin-top: 2%;"><img src="{{ asset('images/logo.png') }}" alt="logo"
            style="width:55px; margin-left: -8px;"></a>

    <div class="arriereplan" style="background: transparent; height: 100vh;" id="corps">

        {{-- Boutton de langue --}}
        @include('front.layouts.langue_bouton')

        {{-- Contenu de la page | debut --}}
        @yield('content')

        {{-- Contenu de la page | Fin --}}
        {{-- <div class="tm-copyright-text copyaroa" style="">Copyright &copy; <span id="annee">
            </span> <a rel="nofollow" href="https://www.aroapartners.com"> &nbsp AroaLab</a>
        </div> --}}
    </div>


    <script type="text/javascript" src="{{ asset('assets/new/cssjs/it/js/jquery-3.2.1.min.js') }}"></script>
    <script>
        $(function() {

            var container_menu = $('.container-menu')

            container_menu.addClass('active')
        })
    </script>


    {{-- Cacher le bouton de sidebar au click --}}
    <script>
        $(function() {
            var screen = $(window).width()
            var sidebarclass = $('.sidebar')
            var contact_abidjan = $('.contact_abidjan')

            if (screen <= 767.98) {
                // var device = "mobile"
                // $('.container-menu').hide()
                // var sidebarclass = $('.sidebar')
                $('.btn').on('click', function() {
                    $('.btn').toggleClass('btnc')
                    contact_abidjan.addClass('ab_zindex')
                    $('.btn').fadeOut(1000)
                    // $('.btn').css({'display': 'none'})
                    $('.container-menu').hide(1000)
                    $('.sidebar').addClass('side')
                    $('.mainpage').toggleClass('hidemain')

                    $('.arriereplan').on('click', function() {
                        contact_abidjan.removeClass('ab_zindex')
                        $('.sidebar').removeClass('side')
                        $('.btn').fadeIn(1000)
                        // $('.btn').css({'display': 'block'})
                        $('.container-menu').show(1000)
                    })

                    $('#corps').on('click', function() {
                        // $('.btn').toggleClass('hidemain')
                        var class_side = $('.sidebar').attr('class')
                        // alert(class_side)
                    })
                });
            } else {
                $('.btn').on('click', function() {
                    $('.btn').toggleClass('btnc')
                    contact_abidjan.addClass('ab_zindex')
                    $('.btn').fadeOut(1000)
                    // $('.btn').css({
                    //     'display': 'none'
                    // })

                    $('.sidebar').addClass('side')
                    $('.mainpage').toggleClass('hidemain')
                });

                $('.arriereplan').on('click', function() {
                    contact_abidjan.removeClass('ab_zindex')
                    $('.sidebar').removeClass('side')
                    $('.btn').fadeIn(1000)
                    // $('.btn').css({'display': 'block'})
                    $('.container-menu').show(1000)
                })
            }
            // $(window).on('resize', function() {
            //     $('#article').hide()
            //     var screen = $(window).width()
            //     if (screen <= 991.98) {
            //         console.log(screen)
            //     }

            // })
        })
    </script>

    {{-- Chargement de la page --}}
    <script>
        window.addEventListener('load', function() {
            var loader = document.querySelector('.loader');
            loader.className += ' hidden';
            setTimeout(() => {
                // rond.remove();
            }, 500);
        });
    </script>

    {{-- Effet de boule au click --}}
    <script>
        //Pointage de la sourir lorsqu'on click
        window.addEventListener('click', (e) => {
            var rond = document.createElement('div');

            rond.className = 'clickAnim';
            rond.style.top = `${e.pageY - 50}px`;
            rond.style.left = `${e.pageX - 50}px`;
            // rond.style.top = '${e.pageY - 50} px';
            // rond.style.left = '${e.pageX - 50} px';

            document.body.appendChild(rond);

            setTimeout(() => {
                rond.remove();
            }, 1500);
        })


        //Changer arriere plan lorsqu'on survol
        var ico = $('.blob')
        var icone = document.querySelector('.blob')


        for (let index = 0; index < ico.length; index++) {
            // console.log(ico[index])
            ico[index].addEventListener('mouseover', (e) => {


                // console.log(icones)

                // ico[index].style.background = '#f00';
                // ico[index].addclass = 'hoverAnim';
                var rond = document.createElement('div');

                rond.className = 'hoverAnim';
                rond.style.top = `${e.pageY-130}px`;
                rond.style.left = `${e.pageX-100}px`;
                // rond.style.top = '${e.pageY - 50} px';
                // rond.style.left = '${e.pageX - 50} px';

                document.body.appendChild(rond);

                setTimeout(() => {
                    // rond.remove();
                }, 150);
            })
        }

        var contact = document.getElementsByClassName('contacts')
        for (let i = 0; i < contact.length; i++) {
            contact[i].addEventListener('mouseover', (e) => {
                var ronds = document.createElement('div');

                ronds.className = 'hoverAnim';
                ronds.style.top = `${e.pageY-130}px`;
                ronds.style.left = `${e.pageX-100}px`;

                document.body.appendChild(ronds);

                setTimeout(() => {
                    // rond.remove();
                }, 150);
            })
        }

        var blobss = document.getElementsByClassName('blobss')
        for (let i = 0; i < blobss.length; i++) {
            blobss[i].addEventListener('mouseover', (e) => {
                var ronds = document.createElement('div');

                ronds.className = 'hoverAnim';
                ronds.style.top = `${e.pageY-130}px`;
                ronds.style.left = `${e.pageX-100}px`;

                document.body.appendChild(ronds);

                setTimeout(() => {
                    // rond.remove();
                }, 150);
            })
        }
    </script>
</body>

</html>
