<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Documentation for Learning Management System">
    <meta name="description" content="LMSZAI - Learning Management System ">
    <meta name="keywords" content="lms, eEducation, learning, learn, education, course, online courses, e-Learning">
    <meta name="author" content="zainiktheme">

    <meta property="og:type" content="Learning Management System">
    <meta property="og:title" content="Documentation for Learning Management System">
    <meta property="og:description" content="LMSZAI- LMS Learning Management System">
    <meta property="og:image" content="{{ asset('public/images/logo.png') }}">

    <meta name="msapplication-TileImage" content="{{ asset('public/images/logo.png') }}">

    <meta name="msapplication-TileColor" content="rgba(103, 20, 222,.55)">
    <meta name="theme-color" content="#754FFE">

    <title>AROA Partners - Documentation</title>

    <!--=======================================
      All Css Style link
    ===========================================-->

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('public/doc/assets/documentation/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('public/doc/assets/documentation/css/jquery-ui.min.css') }}" rel="stylesheet">

    <!-- Animate Css-->
    <link rel="stylesheet" href="{{ asset('public/doc/assets/documentation/css/animate.min.css') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Fonts -->

    <!-- Custom styles for this template -->
    <link href="{{ asset('public/doc/assets/documentation/css/style.css') }}" rel="stylesheet">

    <!-- Responsive Css-->
    <link rel="stylesheet" href="{{ asset('public/doc/assets/documentation/css/responsive.css') }}">

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="{{ asset('public/front/images/logo.ico') }}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!--Main Menu/Navbar Area Start -->
    <div class="main-menu">
        <nav class="navbar navbar-expand-lg fixed-top" aria-label="Dark offcanvas navbar">
            <div class="container-fluid">
                <a class="navbar-brand col-md-3 col-lg-3 col-xl-3 col-xxl-2 me-0 px-3 fs-6"
                    href="{{ route('admin.dashboard') }}">
                    <img class="img-fluid w-50" src="{{ asset('public/images/logo.png') }}" alt="Uncloud">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbarDark" aria-controls="offcanvasNavbarDark">
                    <span class="iconify" data-icon="heroicons-outline:menu"></span>
                </button>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbarDark"
                    aria-labelledby="offcanvasNavbarDarkLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarDarkLabel">Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><span
                                class="iconify" data-icon="akar-icons:cross"></span></button>
                    </div>
                    <div class="offcanvas-body align-items-center justify-content-between">
                        <h6>AROA Partners - Dynamisez votre cr??ation de valeur</h6>
                        <a class="primary-btn-outline see-video-btn"
                            href="https://www.youtube.com/watch?v=h60dHCuFRXc"target="_blank">
                            En video
                        </a>
                        <div class="sidebarMenuInnerBlock navbar-nav ms-auto mb-2 mb-lg-0">
                            <div class="menu-unit">
                                <small class="menu-title text-black-900 font-bold"><span class="iconify me-2"
                                        data-icon="fa:hand-o-right"></span>GETTING
                                    STARTED</small>
                                <ul>
                                    <li class="nav-item"><a class="nav-link menu-item"
                                            href="#list-item-0">Introduction</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-1">How LMSZAI
                                            works?</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-2">How to
                                            install
                                            LMSZAI?</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-3">Basic
                                            Terms</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="menu-unit">
                                <small class="menu-title text-black-900 font-bold"><span class="iconify me-2"
                                        data-icon="fa:hand-o-right"></span>STUDENT
                                    ACCOUNT ACTIVITIES</small>
                                <ul>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-4"> Browse the
                                            Course</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-5">How to
                                            purchase a
                                            course?</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-6">Course
                                            Resources</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-7">Course
                                            Reviews</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-8">Course
                                            Quiz</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-9">Course
                                            Assignment</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-10">Course
                                            Notice</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-11">Course
                                            Live
                                            Classes</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-12">Course
                                            Discussion</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-13">Course
                                            Certificate</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item"
                                            href="#list-item-71">Geolocation search</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item"
                                            href="#list-item-74">Subscription Module</a></li>
                                </ul>
                            </div>

                            <div class="menu-unit">
                                <small class="menu-title text-black-900 font-bold"><span class="iconify me-2"
                                        data-icon="fa:hand-o-right"></span>INSTRUCTOR
                                    ACCOUNT ACTIVITIES</small>
                                <ul>
                                    <li class="nav-item"><a class="nav-link menu-item"
                                            href="#list-item-14">Instructor
                                            Dashboard</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-15">Upload
                                            Course</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-16">My
                                            Courses</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-152">Scorm
                                            Courses</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item"
                                            href="#list-item-17">Resources</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-18">Quiz</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link menu-item"
                                            href="#list-item-19">Assignment</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-20">All
                                            Students</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-21">Notice
                                            Board</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-22">Live
                                            Class</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link menu-item"
                                            href="#list-item-23">Certificate</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link menu-item"
                                            href="#list-item-24">Discussion</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link menu-item"
                                            href="#list-item-25">Finance</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item"
                                            href="#list-item-26">Profile</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item"
                                            href="#list-item-72">Geolocation search</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-75">Saas
                                            Module</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-27">Payment
                                            Settings</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-64">Bundle
                                            Offer</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item"
                                            href="#list-item-65">Consultation</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-78">Zoom
                                            Setting</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-77">Google
                                            Meet</a></li>
                                </ul>
                            </div>

                            <div class="menu-unit">
                                <small class="menu-title text-black-900 font-bold">
                                    <span class="iconify me-2" data-icon="fa:hand-o-right"></span>
                                    ORGANIZATION ACCOUNT ACTIVITIES
                                </small>
                                <ul>
                                    <li class="nav-item"><a class="nav-link menu-item"
                                            href="#list-item-101">Dashboard</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-102">Manage
                                            Instructor</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-103">Manage
                                            Students</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-104">Upload
                                            Course</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-105">My
                                            Courses</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-151">Scorm
                                            Courses</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item"
                                            href="#list-item-106">Resources</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-107">Quiz</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link menu-item"
                                            href="#list-item-108">Assignment</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item"
                                            href="#list-item-109">Followings</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item"
                                            href="#list-item-110">Followers</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-111">Notice
                                            Board</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-112">Live
                                            Class</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item"
                                            href="#list-item-113">Certificate</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item"
                                            href="#list-item-114">Discussion</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item"
                                            href="#list-item-115">Finance</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item"
                                            href="#list-item-116">Profile</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item"
                                            href="#list-item-117">Geolocation search</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-118">Saas
                                            Module</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-119">Payment
                                            Settings</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-120">Bundle
                                            Offer</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item"
                                            href="#list-item-121">Consultation</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-122">Zoom
                                            Setting</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-123">Google
                                            Meet</a></li>
                                </ul>
                            </div>

                            <div class="menu-unit">
                                <small class="menu-title text-black-900 font-bold"><span class="iconify me-2"
                                        data-icon="fa:hand-o-right"></span>ADMIN
                                    ACCOUNT ACTIVITIES</small>
                                <ul>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-28">Admin
                                            Dashboard</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-29">Manage
                                            Course</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-30">Course
                                            Reference</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-31">Manage
                                            Instructor</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-32">Manage
                                            Coupon</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-33">Manage
                                            Promotion</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-34">Manage
                                            Blog</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-35">Manage
                                            Payout</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item"
                                            href="#list-item-355">Financial Report</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-36">Manage
                                            Certificate</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-37">Ranking
                                            level</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-38">Manage
                                            Language</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-39">Account
                                            Settings</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-40">Support
                                            Ticket</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-41">User
                                            Management</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-42">Email</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-43">Manage
                                            Page</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-44">Manage
                                            Menu</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item"
                                            href="#list-item-45">Application Setting</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-70">Device
                                            Control</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-73">Private
                                            Mode</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-76">Google
                                            Meet</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item"
                                            href="#list-item-501">Geo-Location Map</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-455">Policy
                                            Setting</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-46">Contact
                                            us</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-55">How to
                                            change language?</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-56">How to
                                            change currency?</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-66">How to
                                            change color and text font?</a></li>
                                </ul>
                            </div>
                            <div class="menu-unit">
                                <small class="menu-title text-black-900 font-bold"><span class="iconify me-2"
                                        data-icon="fa:hand-o-right"></span>Manage Affiliate</small>
                                <ul>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-67">Admin
                                            Option</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-68">User
                                            Option</a></li>
                                </ul>
                            </div>
                            <div class="menu-unit">
                                <small class="menu-title text-black-900 font-bold"><span class="iconify me-2"
                                        data-icon="fa:hand-o-right"></span>Installable
                                </small>
                                <ul>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-47">Zoom Live
                                            Class</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-503">Google
                                            Meet Live Class</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-505">Google
                                            Meet instructor</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-48">Social
                                            Login </a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-49">S3
                                            Storage (AWS, Wasabi, Vultr)</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-50">Vimeo</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-51">Payment
                                            Gateway</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-62">Bank
                                            Payment Gateway</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item"
                                            href="#list-item-504">Geo-location</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-52">Mail
                                            Configuration</a></li>
                                </ul>
                            </div>
                            <div class="menu-unit">
                                <small class="menu-title text-black-900 font-bold"><span class="iconify me-2"
                                        data-icon="fa:hand-o-right"></span>FAQ
                                </small>
                                <ul>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-53">FAQ</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="menu-unit">
                                <small class="menu-title text-black-900 font-bold"><span class="iconify me-2"
                                        data-icon="fa:hand-o-right"></span>Others
                                </small>
                                <ul>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-57">Developer
                                            Guidline</a></li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-61">Change
                                            log</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-58">Release
                                            log</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link menu-item" href="#list-item-63">Update
                                            Guideline</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!--Main Menu/Navbar Area Start -->

    <main class="main-area">
        <!-- Main Page Area Start -->
        <div class="container-fluid">
            <div class="row">
                <div id="sidebarMenu"
                    class="list-group col-md-3 col-lg-3 col-xl-3 col-xxl-2 d-md-block bg-white sidebar collapse custom-scrollbar">
                    <div class="sidebarMenuInnerBlock">
                        <div class="menu-unit">
                            <small class="menu-title text-black-900 font-bold">
                                <span class="iconify me-2"data-icon="fa:hand-o-right"></span>ACTIVIT??S DU COMPTE
                                ADMINISTRATEUR</small>
                            <ul>
                                <li class="nav-item"><a class="nav-link menu-item"
                                        href="#list-item-0">Introduction</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-1">Utilisation du
                                        back-office</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-2">Tableau de
                                        bord</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-3">Param??tre</a>
                                </li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-4"> Langues</a>
                                </li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-5">Pages</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-6">Extras</a>
                                </li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-7">M??tiers</a>
                                </li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-8">Blog</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-9">Offre
                                        d'emploi</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-10">Notre
                                        ??quipe</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-11">Nos
                                        r??f??rences</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-12">Nos
                                        Formations</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-13">Se
                                        d??connecter</a></li>
                            </ul>
                        </div>

                        <div class="menu-unit">
                            <small class="menu-title text-black-900 font-bold">
                                <span class="iconify me-2"data-icon="fa:hand-o-right">
                                </span>
                                DOCUMENTATION DU CODE
                            </small>
                            <ul>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-14">dashboard</a>
                                </li> 
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="right-side col-md-12 col-lg-9 col-xl-9 col-xxl-10 ms-sm-auto">
                    <div data-bs-spy="scroll" data-bs-target="#sidebarMenu" data-bs-smooth-scroll="true"
                        class="scrollspy-area" tabindex="0">

                        <section class="unit-block text-center mb-100" id="list-item-0">
                            <h2>AROA Partners - Dynamisez votre cr??ation de valeur </h2><br>
                            <p>
                                Aroa Partners est un cabinet d???Ing??nierie Financi??re, sp??cialis?? dans le Conseil
                                Strat??gique & Op??rationnel.
                                Notre mission est de proposer une offre transverse de services afin d???apporter des
                                r??ponses pratiques et op??rationnelles aux entreprises africaines et leur permettre de
                                transformer les d??fis du modernisme en opportunit??s de croissance.
                                AROA Partners se base sur ses valeurs pour apporter son savoir-faire aux entreprises
                                qu???elle accompagne avec pour objectif la transmission d???une culture d???excellence.
                                Avec des exp??riences et bonnes pratiques acquises au sein de cabinets de conseil
                                internationaux, le cabinet r??uni un p??le d???experts, capable de proposer aux acteurs du
                                march?? des solutions ?? haute valeur ajout??e et en ad??quation avec leurs probl??matiques.
                            </p>
                        </section>
                        <section class="unit-block mb-100" id="">
                            <h4 class="my-2"><span class="iconify me-2"
                                    data-icon="fa:hand-o-right"></span>Qu'est-ce que Aroa Partners ?
                            </h4>
                            <p>Aroa Partners est un cabinet d???Ing??nierie Financi??re, sp??cialis?? dans le Conseil
                                Strat??gique & Op??rationnel.

                                Notre mission est de proposer une offre transverse de services afin d???apporter des
                                r??ponses pratiques et op??rationnelles aux entreprises africaines et leur permettre de
                                transformer les d??fis du modernisme en opportunit??s de croissance.

                                AROA Partners se base sur ses valeurs pour apporter son savoir-faire aux entreprises
                                qu???elle accompagne avec pour objectif la transmission d???une culture d???excellence.

                                traduction.Avec des exp??riences et bonnes pratiques acquises au sein de cabinets de
                                conseil internationaux, le cabinet r??uni un p??le d???experts, capable de proposer aux
                                acteurs du march?? des solutions ?? haute valeur ajout??e et en ad??quation avec leurs
                                probl??matiques.

                                Disposant de solides r??f??rences ?? des niveaux d??cisionnels, nos experts proposent une
                                offre transverse de services r??pondant aux enjeux r??glementaires.

                                La volont?? d???excellence technique de l?????quipe se traduit par une participation active
                                des fondateurs et des consultants aux instances professionnelles qui r??gissent les corps
                                financiers, manag??riaux et technologiques. Une telle implication permet d???anticiper les
                                ??volutions du march?? et du contexte r??glementaire afin d?????tre proactif dans leur mise en
                                ??uvre.
                            </p>

                        </section>
                        <section class="unit-block mb-100" id="list-item-1">
                            <h4 class="my-2"><span class="iconify me-2"
                                    data-icon="fa:hand-o-right"></span>Utilisation du back-office
                            </h4>
                            <p>Le back office comprend 12 parties qui sont les suivantes:</p>
                            <p>Dashboard, Param??tres, Langues, Pages, Extras, M??tiers, Blog, Offre d'emploi, Notre
                                ??quipe, Nos r??f??rences, Nos Formations et D??connection.</p>

                            <p>Chacune de ces parties comprend des sous-parties, ?? l'exception du Dashboard.</p>
                        </section>
                        <h3>Activit??s du compte de l???administrateur </h3>
                        <hr>
                        {{-- debut Tableau de bord --}}
                        <section class="unit-block mb-100" id="list-item-2">
                            <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Tableau
                                de bord</h4>
                            <p>Le tableau de bord est une interface graphique qui permet de visualiser les donn??es
                                importantes
                                d'un syst??me ou d'une activit?? en un coup d'??il.
                                Il peut inclure des indicateurs cl??s de performance (KPIs) tels que le nombre d'articles
                                r??dig??s,
                                les offres d'emploi disponibles, le nombre de membres ayant acc??s au tableau de bord,
                                et le nombre de visiteurs sur le site web.
                                Les boutons de raccourci permettent un acc??s rapide aux diff??rentes parties mentionn??es
                                pr??c??demment,
                                ?? l'exception de la partie Visiteur. </p>
                            <div class="sitemap-img mt-5">
                                <img src="{{ asset('public/images/image_doc/accueil.png') }}" alt="">
                            </div>
                            <br>

                        </section>
                        {{-- fin Tableau de bord --}}
                        {{-- *************************************************************************************************************** --}}
                        {{-- debut Param??tre --}}
                        <section class="unit-block mb-100" id="list-item-3">
                            <h4 class="my-2"><span class="iconify me-2"
                                    data-icon="fa:hand-o-right"></span>Param??tre</h4>
                            <br>
                            <p>Cette partie comporte 4 sections qui sont:</p>
                            <div>
                                <li> <a href="#list-item-3-1">Profile</a></li>
                                <li> <a href="#list-item-3-2">Utilisateurs</a></li>
                                <li> <a href="#list-item-3-3">Roles</a></li>
                                <li> <a href="#list-item-3-4">Permissions</a></li>
                            </div>

                            <p>Vous pouvez aller sur chaque partie en cliquant pour avoir plus de d??tail.</p>
                            <br>
                            <section class="unit-block mb-100" id="list-item-3-1">
                                <p class="my-2"><span class="font-bold"> Le Profile</span></p>
                                <p>La section de profil d'un utilisateur est une fonctionnalit?? qui permet ??
                                    l'utilisateur
                                    de modifier ses informations personnelles. Il y a un bouton "changer d'image" qui
                                    lui
                                    permet d'ajouter une image de profil, par d??faut il y a une image d'avatar mais
                                    l'utilisateur
                                    peut la changer. Une fois l'image de profil modifi??e, l'utilisateur peut changer son
                                    mot de passe en acc??dant ?? l'onglet "changer mot de passe". Il peut ??galement
                                    acc??der ?? l'onglet "info perso" pour modifier ses informations personnelles telles
                                    que :
                                    <span class="font-bold"> son nom, son prenom, son adresse email, son poste, son pole, son numero t??l??phone</span>.
                                </p>
                                <div class="sitemap-img mt-5">
                                    <img src="{{ asset('public/images/image_doc/profile.png') }}" alt="">
                                </div>
                            </section><br>
                            <section class="unit-block mb-100" id="list-item-3-2">
                                <p><span class="font-bold">Les utilisateurs</span></p>
                                <p>
                                    La section des utilisateurs est une fonctionnalit?? qui montre une liste des utilisateurs
                                    enregistr??s sur le syst??me, incluant leur nom, pr??nom, adresse email, d??partement (ou pole),
                                    leur statut, ainsi que la date de cr??ation de leur compte.
                                    Il est possible de mener diff??rentes actions sur les utilisateurs,
                                    comme voir leurs informations, les modifier, ou m??me les supprimer.
                                    Le statut de l'utilisateur permet de contr??ler s'il a acc??s ou non au tableau de bord.
                                    Si le bouton statut est vert, cela signifie que le compte est actif et l'utilisateur
                                    peut se connecter, sinon il est inactif et il n'a pas acc??s au tableau de bord.
                                    C'est dans cette section que les utilisateurs peuvent ??tre cr????s.
                                </p>
                                <div class="sitemap-img mt-5">
                                    <img src="{{ asset('public/images/image_doc/utilisateur.png') }}" alt="">
                                </div>
                            </section><br>
                            <section class="unit-block mb-100" id="list-item-3-3">
                                <p><span class="font-bold">Les roles</span></p>
                                <p>Dans une partie de r??le (??galement appel??e jeu de r??le ou RPG),
                                    une fonctionnalit?? de gestion des r??les permet de cr??er des r??les pour les
                                    joueurs et de leur attribuer des permissions sp??cifiques. Ces permissions peuvent
                                    inclure des autorisations telles que la possibilit?? de lire ou de publier dans des
                                    salons de discussion sp??cifiques, d'utiliser des commandes de jeu sp??cifiques,
                                    ou de b??n??ficier d'avantages particuliers dans le jeu. La fonctionnalit?? de
                                    gestion des r??les permet ??galement de modifier les permissions existantes pour
                                    chaque r??le.
                                </p>
                                <div class="sitemap-img mt-5">
                                    <img src="{{ asset('public/images/image_doc/role.png') }}" alt="">
                                </div>
                            </section>
                            <section class="unit-block mb-100 my-2" id="list-item-3-4">
                                <p class=""><span class="font-bold">Les Permissions</span></p>
                                <p>Dans un syst??me de gestion des permissions, il est possible de cr??er diff??rents niveaux de permission pour les utilisateurs.
                                    Ces permissions peuvent inclure des autorisations telles que la possibilit?? de lire ou de publier sur certains sections d'un
                                    site web, d'acc??der ?? des fonctionnalit??s sp??cifiques, ou de modifier le contenu. Les administrateurs peuvent utiliser
                                    ces permissions pour contr??ler l'acc??s des utilisateurs aux diff??rentes parties d'un site web, en limitant
                                    l'acc??s aux pages et aux fonctionnalit??s qui ne sont pas pertinentes pour certains utilisateurs ou groupes d'utilisateurs.
                                    Ces permissions peuvent ??tre attribu??es de mani??re dynamique en fonction de l'identit?? de l'utilisateur, de
                                    son groupe d'utilisateurs ou d'autres informations d'identification telles que l'adresse IP ou les informations de connexion.
                                </p>
                                <div class="sitemap-img mt-5">
                                    <img src="{{ asset('public/images/image_doc/permissions.png') }}" alt="">
                                </div>
                            </section><br>


                        </section>
                        {{-- fin Param??tre --}}
                        {{-- *************************************************************************************************************** --}}
                        {{-- debut Langues --}}
                        <section class="unit-block mb-100" id="list-item-4">
                            <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Langues
                            </h4>
                            <br>
                            <p>Cette partie comporte 2 sections qui sont:</p>
                            <div>
                                <li> <a href="#list-item-4-1">Cl??</a></li>
                                <li> <a href="#list-item-4-2">Fran??ais-anglais</a></li>
                            </div>
                            <p>Vous pouvez aller sur chaque partie en cliquant pour avoir plus de d??tail.</p>

                            <section class="unit-block mb-100" id="list-item-4-1">
                                <p class="my-2"><span class="font-bold"> La cl??</span></p>
                                <p>Dans un syst??me de gestion de traduction, la cr??ation de cl??s est un ??l??ment important pour organiser et g??rer les traductions.
                                    Une cl?? est un identificateur unique qui est associ?? ?? une cha??ne de caract??res dans une langue source
                                    (par exemple, le fran??ais), et cette m??me cl?? est utilis??e pour associer la traduction de cette cha??ne
                                    de caract??res dans une autre langue (par exemple, l'anglais).
                                    Avant de faire une traduction, l'utilisateur doit d'abord cr??er une cl?? pour la cha??ne de caract??res qu'il souhaite
                                    traduire. Apr??s la cr??ation de la cl??, l'utilisateur peut ajouter
                                    les traductions correspondantes pour chaque langue cible. Il peut ??galement modifier ou supprimer les traductions
                                    existantes associ??es ?? la cl??.
                                    Il y a ??galement une option de recherche qui permet aux utilisateurs de retrouver rapidement une cl?? sp??cifique
                                    en utilisant des termes de recherche. Cela facilite la gestion des traductions en permettant aux utilisateurs de
                                    rapidement retrouver les traductions qu'ils recherchent.
                                </p>
                                <div class="sitemap-img mt-5">
                                    <img src="{{ asset('public/images/image_doc/cle.png') }}" alt="">
                                </div>
                            </section><br>
                            <section class="unit-block mb-100" id="list-item-4-2">
                                <p class="my-2"><span class="font-bold"> Fran??ais-anglais</span></p>
                                <p>Dans un syst??me de gestion de traduction, la section "fran??ais-anglais" est l'endroit o?? les traductions de la langue source (fran??ais) vers la langue cible (anglais) sont effectu??es. Une fois qu'une cl?? a ??t?? cr????e dans la section "cl??", elle peut ??tre utilis??e pour associer la cha??ne de caract??res ?? traduire avec sa traduction en anglais.

                                    Pour effectuer la traduction, il est g??n??ralement utilis?? un outil externe de traduction automatique tels que deepl traduction. Le texte ?? traduire est entr?? dans la section fran??aise et la traduction en anglais est automatiquement g??n??r??e. Il est possible de v??rifier la traduction g??n??r??e et de la corriger manuellement si n??cessaire.

                                    Une fois que la traduction en anglais est consid??r??e comme valide, il est possible de la valider en appuyant sur le bouton "Valider" dans la section "Actions". Cela permet de sauvegarder la traduction et de l'utiliser pour afficher le contenu dans la langue cible (anglais) dans l'application ou sur le site web correspondant.
                                </p>
                                <div class="sitemap-img mt-5">
                                    <img src="{{ asset('public/images/image_doc/fran??ais_anglais.png') }}"
                                        alt="">
                                </div>
                            </section><br>

                        </section>
                        {{-- fin Langues --}}
                        {{-- *************************************************************************************************************** --}}
                        {{-- debut La page --}}
                        <section class="unit-block mb-100" id="list-item-5">
                            <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> La page
                            </h4>
                            <div>
                                <li class="my-2"><span class="font-bold"> La page d'accueil</span></li>
                            </div>

                            <p>
                                La section "Hero" de la page d'accueil est g??n??ralement utilis??e pour pr??senter les ??l??ments les plus importants
                                de votre site Web, tels que la vid??o de pr??sentation, le nom de votre entreprise ou organisation, le slogan ou la devise,
                                ainsi qu'un message cl?? pour les visiteurs. Pour modifier cette section, il suffit de remplacer les informations actuelles
                                par les nouvelles, puis de sauvegarder les modifications. Il est important de s'assurer que la pr??sentation est professionnelle
                                et que les informations sont claires et pr??cises,
                                afin de donner une bonne premi??re impression aux visiteurs de votre site Web.
                            </p>
                            <div class="sitemap-img mt-5">
                                <img src="{{ asset('public/images/image_doc/page_accueil.png') }}" alt="">
                            </div><br><br><br>
                        </section>
                        {{-- fin La page --}}
                        {{-- *************************************************************************************************************** --}}
                        {{-- debut Extras --}}
                        <section class="unit-block mb-100" id="list-item-6">
                            <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Extras
                            </h4>
                            <p>L'extra regroupe la section : <span class="font-bold"> La page de pole</span> et <span class="font-bold">Index metier</span></p>
                            <div>
                                <li class="my-2"><span class="font-bold"> La page de pole</span></li>
                            </div>

                            <p>
                                La section "p??le" d'une page web est g??n??ralement utilis??e pour pr??senter les domaines d'activit?? ou
                                les secteurs d'expertise de votre entreprise ou organisation. Cette section permet aux visiteurs de naviguer
                                et de d??couvrir les diff??rents services ou produits que vous proposez. Pour cr??er un nouveau p??le, il suffit de saisir les informations n??cessaires, telles que le nom du p??le,
                                URL, le logo noir du pole et le logo blanc du pole en cliquant sur le bouton "Ajouter p??le".
                                Il est ??galement possible de modifier ou de supprimer un p??le existant en utilisant
                                les boutons "Modifier" ou "Supprimer" situ??s dans la section "Actions". Il est important de s'assurer que les
                                informations sont pr??cises et ?? jour, et que la pr??sentation est professionnelle pour donner une bonne impression
                                aux visiteurs de votre site web.
                            </p>
                            <div class="sitemap-img mt-5">
                                <img src="{{ asset('public/images/image_doc/page_pole.png') }}" alt="">
                            </div><br><br>
                            <div>
                                <li class="my-2"><span class="font-bold"> Index metier</span></li>
                            </div>

                            <p>Elle a les m??me fonctionnalit?? que le pole.
                            </p>
                            <div class="sitemap-img mt-5">
                                <img src="{{ asset('public/images/image_doc/index_metier.png') }}" alt="">
                            </div><br><br><br>
                        </section>
                        {{-- fin Extras --}}
                        {{-- *************************************************************************************************************** --}}
                        {{-- fin Extras --}}
                        {{-- *************************************************************************************************************** --}}
                        {{-- debut Metier --}}
                        <section class="unit-block mb-100" id="list-item-7">
                            <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> M??tiers
                            </h4>
                            <p>M??tiers regroupe la section : <span class="font-bold"> La page de pole</span> et <span class="font-bold">Index metier</span> </p>
                            <div>
                                <li class="my-2"><span class="font-bold"> La presentation</span></li>
                            </div>

                            <p>
                                La section "Pr??sentation des p??les" est utilis??e pour afficher les d??tails des diff??rents domaines
                                d'activit?? ou secteurs d'expertise de votre entreprise ou organisation. Cette section permet de
                                donner plus d'informations sur chaque p??le, en utilisant des images pour illustrer les diff??rents
                                services ou produits propos??s. Il est possible d'ajouter des images pour chaque p??le.
                                Il est important de s'assurer que les images sont de bonne qualit?? et de taille appropri??e pour une
                                pr??sentation optimale. Il est ??galement important d'utiliser des images qui sont pertinentes et en
                                lien avec le p??le pour donner une bonne id??e aux visiteurs de ce que vous proposez.
                                <span class="font-bold">Pour la traduire en anglais, il faut la modifier car le champs anglais se trouve dans la partie modification.</span>
                            </p>
                            <div class="sitemap-img mt-5">
                                <img src="{{ asset('public/images/image_doc/presentation.png') }}" alt="">
                            </div><br><br>
                            <div>
                                <li class="my-2"><span class="font-bold"> Expertises</span></li>
                            </div>

                            <p>
                                La section "Expertise" est utilis??e pour afficher les comp??tences sp??cifiques ou les connaissances
                                avanc??es de votre entreprise ou organisation, en les associant ?? chaque domaine d'activit?? ou
                                secteur d'expertise pr??sent?? dans la section "Pr??sentation des p??les". Pour ajouter une expertise,
                                il faut d'abord s??lectionner un p??le existant, puis saisir un titre et une description d??taill??e de
                                l'expertise. Cela permet aux visiteurs de comprendre les comp??tences uniques de votre entreprise et
                                les diff??rents domaines dans lesquels vous ??tes comp??tent. Il est important de s'assurer que les
                                informations sont pr??cises et ?? jour, et que la pr??sentation est professionnelle pour donner une
                                bonne impression aux visiteurs de votre site web.
                                <span class="font-bold">Pour la traduire en anglais, il faut la modifier car le champs anglais se trouve dans la partie modification.</span>
                            </p>
                            <div class="sitemap-img mt-5">
                                <img src="{{ asset('public/images/image_doc/expertises.png') }}" alt="">
                            </div><br><br><br>
                        </section>
                        {{-- fin Metier --}}
                        {{-- *************************************************************************************************************** --}}
                        {{-- debut Blog --}}
                        <section class="unit-block mb-100" id="list-item-8">
                            <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Blog
                            </h4>
                            <p>Blog regroupe la section : <span class="font-bold"> La categorie</span> et <span class="font-bold">Article</span> </p>
                            <div>
                                <li class="my-2"><span class="font-bold"> La categorie</span></li>
                            </div>

                            <p>
                                La section "Cat??gories" est utilis??e pour organiser les articles ou les publications sur un site web
                                 en diff??rentes cat??gories. Cela permet aux visiteurs de naviguer et de trouver facilement les
                                 articles qui les int??ressent. Pour ajouter une nouvelle cat??gorie, il suffit de saisir un titre
                                 de cat??gorie,selectionner le pole, ajouter une image, donner description et de cliquer sur le
                                 bouton "Ajouter". Il est ??galement possible de modifier ou desupprimer une cat??gorie existante
                                 en utilisant les boutons "Modifier" ou "Supprimer" situ??s en dessous de chaque cat??gorie.
                                 Il est important de s'assurer que les cat??gories sont bien organis??es
                                 et de les mettre ?? jour r??guli??rement pour faciliter la navigation et l'exp??rience utilisateur
                                 sur le site.
                                 <span class="font-bold">Pour la traduire en anglais, il faut la modifier car le champs anglais se trouve dans la partie modification.</span>

                            </p>
                            <div class="sitemap-img mt-5">
                                <img src="{{ asset('public/images/image_doc/categories.png') }}" alt="">
                            </div><br><br>
                            <div>
                                <li class="my-2"><span class="font-bold"> Article</span></li>
                            </div>

                            <p>La section "Articles" permet de cr??er et de g??rer des publications, comme des articles de blog ou des actualit??s sur un site web.
                                 Cette section permet de r??diger les articles en fran??ais en utilisant un ??diteur de texte int??gr??, puis de les publier en
                                 cliquant sur un bouton "Ajouter article". Il est ??galement possible de modifier ou de mettre ?? jour un article
                                 existant en utilisant le bouton "Modifier". En cliquant sur ce bouton, il permet de passer ?? l'??dition d'un article existant
                                 et vous pourriez traduire l'article en langue anglaise. Il est important de s'assurer que les articles sont bien ??crits et de
                                 qualit??, et qu'ils sont organis??s dans les bonnes cat??gories pour faciliter la navigation et l'exp??rience utilisateur sur le site.
                            </p>
                            <div class="sitemap-img mt-5">
                                <img src="{{ asset('public/images/image_doc/articles.png') }}" alt="">
                            </div><br><br><br>
                        </section>
                        {{-- fin Blog --}}
                        {{-- *************************************************************************************************************** --}}
                        {{-- debut Offre d'emploi --}}
                        <section class="unit-block mb-100" id="list-item-9">
                            <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Offre
                                d'emploi</h4>
                            <div>
                                <li class="my-2"><span class="font-bold"> Liste des offres</span></li>
                            </div>

                            <p>
                                La section "Offres d'emploi" est utilis??e pour afficher les opportunit??s de travail disponibles ?? Aroa Partners.
                                Il permet aux utilisateurs de consulter les offres d'emploi et postuler en ligne. Cette section permet ??galement ??
                                l'administrateur du site de cr??er de nouvelles offres d'emploi en saisissant les d??tails de l'emploi, comme le titre,
                                la description, les exigences et les informations de contact. Il est ??galement possible de modifier ou de supprimer
                                une offre d'emploi existante en utilisant les boutons "Modifier" ou "Supprimer" situ??s en dessous de chaque offre
                                d'emploi. Il est important de s'assurer que les offres d'emploi sont bien organis??es et mises ?? jour r??guli??rement
                                pour attirer les talents les plus qualifi??s.
                                <span class="font-bold">Pour la traduire en anglais, il faut la modifier car le champs anglais se trouve dans la partie modification.</span>
                            </p>
                            <div class="sitemap-img mt-5">
                                <img src="{{ asset('public/images/image_doc/offre_emploi.png') }}" alt="">
                            </div><br><br><br>
                        </section>
                        {{-- fin Offre d'emploi --}}
                        {{-- *************************************************************************************************************** --}}
                        {{-- debut Nos ??quipe --}}
                        <section class="unit-block mb-100" id="list-item-10">
                            <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Nos
                                ??quipe</h4>
                            <div>
                                <li class="my-2"><span class="font-bold"> Voir membres</span></li>
                            </div>

                            <p>
                                La section "Notre ??quipe" permet de g??rer les informations relatives aux membres de l'??quipe de
                                Aroa Partners. Il permet aux utilisateurs de consulter les informations sur les membres de
                                l'??quipe, comme leurs noms, leurs postes, leurs photos et leurs biographies. Cette section permet
                                ??galement ?? l'administrateur du site de cr??er de nouveaux membres de l'??quipe en saisissant les
                                informations n??cessaires, comme le nom, le poste, la photo et la biographie. Il est ??galement
                                possible de modifier ou de supprimer un membre de l'??quipe existant en utilisant les boutons
                                "Modifier" ou "Supprimer" situ??s en dessous de chaque membre de l'??quipe. Il est important de
                                s'assurer que les informations des membres de l'??quipe sont ?? jour et pr??cises pour donner une
                                image professionnelle de l'entreprise.
                            </p>
                            <div class="sitemap-img mt-5">
                                <img src="{{ asset('public/images/image_doc/membre.png') }}" alt="">
                            </div><br><br><br>
                        </section>
                        {{-- fin Nos ??quipe --}}
                        {{-- *************************************************************************************************************** --}}
                        {{-- debut Nos r??f??rences --}}
                        <section class="unit-block mb-100" id="list-item-11">
                            <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Nos
                                r??f??rences</h4>
                            <div>
                                <li class="my-2"><span class="font-bold"> Voir r??f??rences</span></li>
                            </div>

                            <p>
                                La section "R??f??rences" permet de g??rer les informations relatives aux r??f??rences utilis??es par Aroa Partners.
                                Elle comporte des fonctionnalit??s telles que l'ajout de nouvelles r??f??rences, la modification d'informations existantes,
                                la visualisation des r??f??rences existantes et la suppression de r??f??rences inutilis??es.
                                Cela permet de maintenir une base de donn??es organis??e et ?? jour des r??f??rences utilis??es par l'entreprise.
                                <span class="font-bold">Pour la traduire en anglais, il faut la modifier car le champs anglais se trouve dans la partie modification.</span>
                            </p>
                            <div class="sitemap-img mt-5">
                                <img src="{{ asset('public/images/image_doc/reference.png') }}" alt="">
                            </div><br><br><br>
                        </section>
                        {{--  fin Nos r??f??rences --}}
                        {{-- *************************************************************************************************************** --}}
                        {{-- debut Nos formations --}}
                        <section class="unit-block mb-100" id="list-item-12">
                            <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Nos
                                formations</h4>
                            <div>
                                <li class="my-2"><span class="font-bold"> Voir formations</span></li>
                            </div>

                            <p>La section "Formations" permet de g??rer les informations relatives aux formations propos??es ou suivies par Aroa Partners.
                                Elle comporte des fonctionnalit??s telles que l'ajout de nouvelles formations, la modification des informations existantes
                                (comme les dates, les lieux, les intervenants, etc.), la visualisation des formations disponibles ou pass??es et la suppression
                                de formations inutilis??es ou annul??es.
                                Cela permet de maintenir une base de donn??es organis??e et ?? jour des formations propos??es ou suivies par l'entreprise.
                                <span class="font-bold">Pour la traduire en anglais, il faut la modifier car le champs anglais se trouve dans la partie modification.</span>
                            </p>
                            <div class="sitemap-img mt-5">
                                <img src="{{ asset('public/images/image_doc/formation.png') }}" alt="">
                            </div>
                        </section>
                        {{-- fin Nos formations --}}
                        {{-- *************************************************************************************************************** --}}
                        {{-- debut d??connection --}}
                        <section class="unit-block mb-100" id="list-item-13">
                            <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Se
                                d??connecter</h4>
                            <p>Ici, l'utilisateur peut se d??connecter de son compte en cours. Cela signifie que l'utilisateur quittera sa session actuelle et devra s'authentifier ?? nouveau pour acc??der aux fonctionnalit??s prot??g??es par des informations d'identification. La d??connexion peut ??tre effectu??e en cliquant sur un bouton d??di??, en acc??dant ?? un lien de d??connexion ou en utilisant une commande sp??cifique dans l'interface utilisateur.

                                Il est important de se d??connecter lorsque l'on utilise un ordinateur ou un appareil partag?? pour ??viter que d'autres personnes n'acc??dent ?? son compte et aux informations sensibles. Il est ??galement important de se d??connecter lorsque l'on a fini de travailler sur un site ou une application pour prot??ger les informations de l'utilisateur et pour ??viter les actions non autoris??es. </p>
                        </section>
                        {{-- fin d??connection --}}

                        <h3>Documentation du code source </h3>
                        <hr>
                        <section class="unit-block mb-100" id="list-item-14">
                            <h4 class="my-2"><span class="iconify me-2"
                                    data-icon="fa:hand-o-right"></span>AdminController
                            </h4>
                            <p>Les fonctionnalit??s et les methode:</p>
                            <br>
                            <p><strong>1 - dashboard </strong></p>

                            <blockquote class="block-quote">
                                <pre>
                                public function dashboard(Request $request)
                                    {
                                        Session::put('page', '/admin/dashboard');
                                        $user = Auth::user();
                                        $articles = Blog::all();
                                        $offres = OffreEmploi::all();
                                        $equipes = Team::all();
                                        $poles = Pole::all();
                                        $visitors = Visitor::all();

                                        $startOfLastWeek  = Carbon::now()->subDays(7)->startOfWeek();
                                        $endOfLastWeek  = Carbon::now()->subDays(7)->endOfWeek();

                                        $date = \Carbon\Carbon::today()->subDays(7);

                                        $currentDate = \Carbon\Carbon::now();
                                        $agoDate = $currentDate->subDays($currentDate->dayOfWeek)->subWeek();

                                        $visitors_current_week = Visitor::select('date', DB::raw('count(*) as total'))->whereBetween('date', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->groupBy('date')->get();
                                        $visitors_last_week = Visitor::select('date', DB::raw('count(*) as total'))->whereBetween('date', [$startOfLastWeek, $endOfLastWeek])->groupBy('date')->get();

                                        $chart_data_current_week = array();
                                        foreach ($visitors_current_week as $data) {
                                            array_push($chart_data_current_week, array($data->date->format('d.m.Y'), $data->total));
                                        }

                                        $chart_data_last_week = array();
                                        foreach ($visitors_last_week as $data) {
                                            array_push($chart_data_last_week, array($data->date->format('d.m.Y'), $data->total));
                                        }

                                        $visitors_datas = array();
                                        $visitors_datas['visitors_current_week'] = $chart_data_current_week;
                                        $visitors_datas['visitors_last_week'] = $chart_data_last_week;


                                        return view('admin.dashboard', ['user' => $user, 'articles' => $articles, 'offres' => $offres, 'equipes' => $equipes, 'poles' => $poles,'visitors'=>$visitors, 'visitors_datas' => $visitors_datas]);
                                    }
                                </pre>
                            </blockquote>
                            <h4 class="text-bg-secondary p-4 justify-content-center">Explication du code</h4>
                           <p> Cette fonction <strong> dashboard </strong> est d??clar??e comme publique. elle prend un objet <strong> Request </strong> en entr??e, et renvoie une vue appel??e <strong>admin.dashboard</strong> avec des donn??es sp??cifiques. La fonction effectue les t??ches suivantes:</p>
                            <div class="pt-5">
                                <li>
                                    Stocke une valeur dans une session nomm??e <strong>page</strong>
                                </li>
                                <li>
                                    R??cup??re l'utilisateur actuellement authentifi??
                                </li>
                                <li>
                                    R??cup??re tous les articles, offres d'emploi, ??quipes, p??les et visiteurs stock??s dans la base de donn??es
                                </li>
                                <li>
                                    D??finit une p??riode de temps pour la derni??re semaine
                                </li>
                                <li>
                                    R??cup??re les visiteurs pour la semaine en cours et la semaine pr??c??dente ?? partir de la base de donn??es en utilisant la p??riode de temps d??finie
                                </li>
                                <li>
                                    Pr??pare les donn??es pour ??tre utilis??es dans un graphique
                                </li>
                                <li>
                                    Renvoie la vue <strong> admin.dashboard </strong> avec des donn??es sp??cifiques telles que l'utilisateur, les articles, les offres d'emploi, les ??quipes, les p??les, les visiteurs et les donn??es de visiteurs pour les deux derni??res semaines.
                                </li>
                            </div>
                            <br>
                            <p><strong>2 - cr??ation d'utilisateur </strong></p>

                            <blockquote class="block-quote">
                                <pre>
                                    public function create(Request $request)
                                    {
                                        try {
                                            Session::put('page', '/admin/create');
                                            $data = $request->input();
                                            $rules = [
                                                'nom' => 'required',
                                                'prenoms' => 'required',
                                                'email' => 'required|email|max:255',
                                                'password' => 'required',
                                            ];
                                            $customMessage = [
                                                'nom.required' => 'Le nom est requis',
                                                'prenoms.required' => 'Le(s) pr??nom(s) est/sont requis',
                                                'email.required' => 'Email est requis',
                                                'email.email' => 'Veuillez saisir une adresse email valide',
                                                'password.required' => 'Le mot de passe est requis',
                                            ];
                                            $this->validate($request, $rules, $customMessage);
                                            $admin = new Admin();
                                            $admin->nom =  $data['nom'];
                                            $admin->prenoms =  $data['prenoms'];
                                            $admin->email =  $data['email'];
                                            $admin->password =  bcrypt($data['password']);
                                            $admin->save();
                                            Session::flash('success_message', 'Utilisateur ajout?? avec succ??s !');
                                            return redirect()->back();
                                        } catch (\Exception $e) {
                                            $message = $e->getMessage();
                                            return view('errors.404', ['error' => $message]);
                                        }
                                    }
                                </pre>
                            </blockquote>

                        </section>

                    </div>

                    <!-- Footer Start -->
                    <footer class="footer-area">
                        <div class="row">
                            <div class="col-12">
                                <div class="copyright-text text-center">
                                    <p class="text-black-800">2022-2023 ?? Aroa Partners. <a
                                            href="#">AroaPartners.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- Footer End -->

                </div>

            </div>
        </div>
        <!-- Main Page Area End -->
    </main>

    <!--=======================================
    All Jquery Script link
===========================================-->
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('public/doc/assets/documentation/vendor/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('public/doc/assets/documentation/vendor/jquery/popper.min.js') }}"></script>
    <script src="{{ asset('public/doc/assets/documentation/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- ==== Plugin JavaScript ==== -->
    <script src="{{ asset('public/doc/assets/documentation/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <script src="{{ asset('public/doc/assets/documentation/js/jquery-ui.min.js') }}"></script>

    <!--Iconify Icon-->
    <script src="{{ asset('public/doc/assets/documentation/js/iconify.min.js') }}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('public/doc/assets/documentation/js/custom.js') }}"></script>
</body>

</html>
