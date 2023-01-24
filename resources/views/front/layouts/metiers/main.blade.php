<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta_description')">
    <link href="{{ asset('images/logo.ico') }}" rel="icon">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>@yield('title')</title>

    <!--

Template 2102 Constructive

http://www.tooplate.com/view/2102-constructive

-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="{{ asset('assets/new/cssjs/it/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/new/cssjs/it/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/new/cssjs/it/css/magnific-popup.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/new/cssjs/it/slick/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/new/cssjs/it/slick/slick-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/new/cssjs/it/css/tooplate-style.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/new/cssjs/blog/css/animate.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/new/cssjs/blog/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/new/front/metier/emploi.css') }}">

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

        .copyaroa{
            color: #fff; width:100%; 
            text-align:center; 
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

<body>

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
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 tm-content"
                style="margin-bottom: 0 !important; background: transparent;">
                {{-- <div class="mb-5"> --}}
                    @yield('content')

                {{-- </div> --}}

            </div>
            
            <div class="tm-copyright-text copyaroa" >Copyright &copy; <span id="annee">
                </span> <a style="text-decoration: none;" rel="nofollow" href="https://www.aroapartners.com"> &nbsp AroaLab</a>
            </div>
        </div>

    </div>
    <div style="float: right; margin-top:0 !important; left: 100% !important">
        @include('front.layouts.langue_bouton')
    </div>
    {{-- <div class="pieddepage"> --}}

    {{-- </div> --}}

    <div id="preload-01"></div>
    <div id="preload-02"></div>
    <div id="preload-03"></div>
    <div id="preload-04"></div>

    {{-- <script type="text/javascript" src="{{ asset('assets/new/cssjs/it/js/jquery-3.2.1.min.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="{{ asset('assets/new/cssjs/it/js/jquery.magnific-popup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/new/cssjs/it/js/jquery.backstretch.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/new/cssjs/it/slick/slick.min.js') }}"></script>
    <!-- Slick Carousel -->
    <script src="{{ asset('public/front/metiers/js/cacher_sidebar.js') }}"></script>
    <script>
        var today = new Date();
        var annee = today.getFullYear()
        document.getElementById('annee').innerHTML = annee
    </script>
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

</body>

</html>
