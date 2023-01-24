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
            <a class="navbar-brand col-md-3 col-lg-3 col-xl-3 col-xxl-2 me-0 px-3 fs-6" href="{{ route('admin.dashboard') }}">
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
                    <h6>AROA Partners - Dynamisez votre création de valeur</h6>
                    <a class="primary-btn-outline see-video-btn" href="https://www.youtube.com/watch?v=h60dHCuFRXc"target="_blank">
                       En video
                    </a>
                    <div class="sidebarMenuInnerBlock navbar-nav ms-auto mb-2 mb-lg-0">
                        <div class="menu-unit">
                            <small class="menu-title text-black-900 font-bold"><span class="iconify me-2"
                                                                                     data-icon="fa:hand-o-right"></span>GETTING
                                STARTED</small>
                            <ul>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-0">Introduction</a>
                                </li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-1">How LMSZAI
                                    works?</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-2">How to install
                                    LMSZAI?</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-3">Basic Terms</a>
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
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-5">How to purchase a
                                    course?</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-6">Course
                                    Resources</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-7">Course
                                    Reviews</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-8">Course Quiz</a>
                                </li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-9">Course
                                    Assignment</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-10">Course
                                    Notice</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-11">Course Live
                                    Classes</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-12">Course
                                    Discussion</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-13">Course
                                    Certificate</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-71">Geolocation search</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-74">Subscription Module</a></li>
                            </ul>
                        </div>

                        <div class="menu-unit">
                            <small class="menu-title text-black-900 font-bold"><span class="iconify me-2"
                                                                                     data-icon="fa:hand-o-right"></span>INSTRUCTOR
                                ACCOUNT ACTIVITIES</small>
                            <ul>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-14">Instructor
                                    Dashboard</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-15">Upload
                                    Course</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-16">My Courses</a>
                                </li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-152">Scorm Courses</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-17">Resources</a>
                                </li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-18">Quiz</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-19">Assignment</a>
                                </li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-20">All Students</a>
                                </li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-21">Notice Board</a>
                                </li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-22">Live Class</a>
                                </li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-23">Certificate</a>
                                </li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-24">Discussion</a>
                                </li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-25">Finance</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-26">Profile</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-72">Geolocation search</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-75">Saas Module</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-27">Payment Settings</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-64">Bundle Offer</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-65">Consultation</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-78">Zoom Setting</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-77">Google Meet</a></li>
                            </ul>
                        </div>

                        <div class="menu-unit">
                            <small class="menu-title text-black-900 font-bold">
                                <span class="iconify me-2" data-icon="fa:hand-o-right"></span>
                                ORGANIZATION ACCOUNT ACTIVITIES
                            </small>
                            <ul>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-101">Dashboard</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-102">Manage Instructor</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-103">Manage Students</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-104">Upload Course</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-105">My Courses</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-151">Scorm Courses</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-106">Resources</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-107">Quiz</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-108">Assignment</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-109">Followings</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-110">Followers</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-111">Notice Board</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-112">Live Class</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-113">Certificate</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-114">Discussion</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-115">Finance</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-116">Profile</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-117">Geolocation search</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-118">Saas Module</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-119">Payment Settings</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-120">Bundle Offer</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-121">Consultation</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-122">Zoom Setting</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-123">Google Meet</a></li>
                            </ul>
                        </div>

                        <div class="menu-unit">
                            <small class="menu-title text-black-900 font-bold"><span class="iconify me-2"
                                                                                     data-icon="fa:hand-o-right"></span>ADMIN
                                ACCOUNT ACTIVITIES</small>
                            <ul>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-28">Admin Dashboard</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-29">Manage Course</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-30">Course Reference</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-31">Manage Instructor</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-32">Manage Coupon</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-33">Manage Promotion</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-34">Manage Blog</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-35">Manage Payout</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-355">Financial Report</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-36">Manage Certificate</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-37">Ranking level</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-38">Manage Language</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-39">Account Settings</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-40">Support Ticket</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-41">User Management</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-42">Email</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-43">Manage Page</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-44">Manage Menu</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-45">Application Setting</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-70">Device Control</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-73">Private Mode</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-76">Google Meet</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-501">Geo-Location Map</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-455">Policy Setting</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-46">Contact us</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-55">How to change language?</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-56">How to change currency?</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-66">How to change color and text font?</a></li>
                            </ul>
                        </div>
                        <div class="menu-unit">
                            <small class="menu-title text-black-900 font-bold"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Manage Affiliate</small>
                            <ul>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-67">Admin Option</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-68">User Option</a></li>
                            </ul>
                        </div>
                        <div class="menu-unit">
                            <small class="menu-title text-black-900 font-bold"><span class="iconify me-2"
                                                                                     data-icon="fa:hand-o-right"></span>Installable
                            </small>
                            <ul>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-47">Zoom Live Class</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-503">Google Meet Live Class</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-505">Google Meet instructor</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-48">Social Login </a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-49">S3 Storage (AWS, Wasabi, Vultr)</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-50">Vimeo</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-51">Payment Gateway</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-62">Bank Payment Gateway</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-504">Geo-location</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-52">Mail Configuration</a></li>
                            </ul>
                        </div>
                        <div class="menu-unit">
                            <small class="menu-title text-black-900 font-bold"><span class="iconify me-2"
                                                                                     data-icon="fa:hand-o-right"></span>FAQ
                            </small>
                            <ul>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-53">FAQ</a></li>
                            </ul>
                        </div>
                        <div class="menu-unit">
                            <small class="menu-title text-black-900 font-bold"><span class="iconify me-2"
                                                                                     data-icon="fa:hand-o-right"></span>Others
                            </small>
                            <ul>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-57">Developer
                                    Guidline</a></li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-61">Change log</a>
                                </li>
                                <li class="nav-item"><a class="nav-link menu-item" href="#list-item-58">Release log</a>
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
                            <span class="iconify me-2"data-icon="fa:hand-o-right"></span>ACTIVITÉS DU COMPTE ADMINISTRATEUR</small>
                        <ul>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-0">Introduction</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-1">Utilisation du back-office</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-2">Tableau de bord</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-3">Paramètre</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-4"> Langues</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-5">Pages</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-6">Extras</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-7">Métiers</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-8">Blog</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-9">Offre d'emploi</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-10">Notre équipe</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-11">Nos références</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-12">Nos Formations</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-13">Se déconnecter</a></li>
                        </ul>
                    </div>

                    <div class="menu-unit">
                        <small class="menu-title text-black-900 font-bold">
                            <span class="iconify me-2"data-icon="fa:hand-o-right">
                                </span>
                                DOCUMENTATION DU CODE
                        </small>
                        <ul>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-14">Login</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-15">Upload Course</a>
                            </li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-16">My Courses</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-152">Scorm Courses</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-17">Resources</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-18">Quiz</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-19">Assignment</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-20">All Students</a>
                            </li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-21">Notice Board</a>
                            </li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-22">Live Class</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-23">Certificate</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-24">Discussion</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-25">Finance</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-26">Profile</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-72">Geolocation Search</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-75">Saas Module</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-27">Payment Settings</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-64">Bundle Offer</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-65">Consultation</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-78">Zoom Setting</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-77">Google Meet</a></li>
                        </ul>
                    </div>

                    <div class="menu-unit">
                        <small class="menu-title text-black-900 font-bold">
                            <span class="iconify me-2" data-icon="fa:hand-o-right"></span>
                            ORGANIZATION ACCOUNT ACTIVITIES
                        </small>
                        <ul>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-101">Dashboard</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-102">Manage Instructor</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-103">Manage Students</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-104">Upload Course</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-105">My Courses</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-151">Scorm Courses</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-106">Resources</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-107">Quiz</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-108">Assignment</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-109">Followings</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-110">Followers</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-111">Notice Board</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-112">Live Class</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-113">Certificate</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-114">Discussion</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-115">Finance</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-116">Profile</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-117">Geolocation search</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-118">Saas Module</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-119">Payment Settings</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-120">Bundle Offer</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-121">Consultation</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-122">Zoom Setting</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-123">Google Meet</a></li>
                        </ul>
                    </div>

                    <div class="menu-unit">
                        <small class="menu-title text-black-900 font-bold">
                            <span class="iconify me-2" data-icon="fa:hand-o-right"></span>ADMIN ACCOUNT ACTIVITIES</small>
                        <ul>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-28">Admin Dashboard</a>
                            </li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-29">Manage Course</a>
                            </li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-30">Course Reference</a>
                            </li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-31">Manage
                                Instructor</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-32">Manage Coupon</a>
                            </li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-33">Manage Promotion</a>
                            </li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-34">Manage Blog</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-35">Manage Payout</a>
                            </li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-355">Financial
                                Report</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-36">Manage
                                Certificate</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-37">Ranking level</a>
                            </li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-38">Manage Language</a>
                            </li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-39">Account Settings</a>
                            </li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-40">Support Ticket</a>
                            </li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-41">User Management</a>
                            </li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-42">Email</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-43">Manage Page</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-44">Manage Menu</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-45">Application
                                Setting</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-70">Device Control</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-73">Private Mode</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-76">Google Meet</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-501">Geo-Location Map</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-455">Policy Setting</a>
                            </li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-46">Contact us</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-55">How to change
                                language?</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-56">How to change
                                currency?</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-66">How to change
                                color and text font?</a></li>
                        </ul>
                    </div>
                    <div class="menu-unit">
                        <small class="menu-title text-black-900 font-bold"><span class="iconify me-2" data-icon="fa:hand-o-right">
                            </span>Manage Affiliate</small>
                        <ul>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-67">Admin Affiliate</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-68">User Affiliate</a></li>
                        </ul>
                    </div>
                    <div class="menu-unit">
                        <small class="menu-title text-black-900 font-bold"><span class="iconify me-2"
                                                                                 data-icon="fa:hand-o-right"></span>Installable
                        </small>
                        <ul>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-47">Zoom Live Class</a>
                            </li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-503">Google Meet Live Class</a>
                            </li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-505">Google Meet instructor</a>
                            </li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-59">BigBlueButton Live
                                Class</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-60">Jitsi Live Class</a>
                            </li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-48">Social Login </a>
                            </li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-49">S3 Storage (AWS, Wasabi, Vultr)</a>
                            </li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-50">Vimeo</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-51">Payment Gateway</a>
                            </li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-504">Geo-location</a></li>

                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-62">Bank Payment
                                Gateway</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-52">Mail
                                Configuration</a></li>
                        </ul>
                    </div>
                    <div class="menu-unit">
                        <small class="menu-title text-black-900 font-bold"><span class="iconify me-2"
                                                                                 data-icon="fa:hand-o-right"></span>FAQ
                        </small>
                        <ul>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-53">FAQ</a></li>
                        </ul>
                    </div>
                    <div class="menu-unit">
                        <small class="menu-title text-black-900 font-bold"><span class="iconify me-2"
                                                                                 data-icon="fa:hand-o-right"></span>Others
                        </small>
                        <ul>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-57">Developer
                                Guideline</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-61">Change Log</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-58">Release Log</a></li>
                            <li class="nav-item"><a class="nav-link menu-item" href="#list-item-63">Update Guideline</a>
                            </li>
                        </ul>
                    </div>


                </div>
            </div>

            <div class="right-side col-md-12 col-lg-9 col-xl-9 col-xxl-10 ms-sm-auto">
                <div data-bs-spy="scroll" data-bs-target="#sidebarMenu" data-bs-smooth-scroll="true"
                     class="scrollspy-area" tabindex="0">

                    <section class="unit-block text-center mb-100" id="list-item-0">
                        <h2>AROA Partners - Dynamisez votre création de valeur </h2><br>
                        <p>
                            Aroa Partners est un cabinet d’Ingénierie Financière, spécialisé dans le Conseil Stratégique & Opérationnel.
                            Notre mission est de proposer une offre transverse de services afin d’apporter des réponses pratiques et opérationnelles aux entreprises africaines et leur permettre de transformer les défis du modernisme en opportunités de croissance.
                            AROA Partners se base sur ses valeurs pour apporter son savoir-faire aux entreprises qu’elle accompagne avec pour objectif la transmission d’une culture d’excellence.
                            Avec des expériences et bonnes pratiques acquises au sein de cabinets de conseil internationaux, le cabinet réuni un pôle d’experts, capable de proposer aux acteurs du marché des solutions à haute valeur ajoutée et en adéquation avec leurs problématiques.
                        </p>
                    </section>
                    <section class="unit-block mb-100" id="">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Qu'est-ce que Aroa Partners ?
                        </h4>
                        <p>Aroa Partners est un cabinet d’Ingénierie Financière, spécialisé dans le Conseil Stratégique & Opérationnel.

                            Notre mission est de proposer une offre transverse de services afin d’apporter des réponses pratiques et opérationnelles aux entreprises africaines et leur permettre de transformer les défis du modernisme en opportunités de croissance.

                            AROA Partners se base sur ses valeurs pour apporter son savoir-faire aux entreprises qu’elle accompagne avec pour objectif la transmission d’une culture d’excellence.

                            traduction.Avec des expériences et bonnes pratiques acquises au sein de cabinets de conseil internationaux, le cabinet réuni un pôle d’experts, capable de proposer aux acteurs du marché des solutions à haute valeur ajoutée et en adéquation avec leurs problématiques.

                            Disposant de solides références à des niveaux décisionnels, nos experts proposent une offre transverse de services répondant aux enjeux réglementaires.

                            La volonté d’excellence technique de l’équipe se traduit par une participation active des fondateurs et des consultants aux instances professionnelles qui régissent les corps financiers, managériaux et technologiques. Une telle implication permet d’anticiper les évolutions du marché et du contexte réglementaire afin d’être proactif dans leur mise en œuvre.
                        </p>

                    </section>
                    <section class="unit-block mb-100" id="list-item-1">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Utilisation du back-office
                        </h4>
                        <p>Le back office comprend 12 parties qui sont les suivantes:</p>
                        <p>Dashboard, Paramètres, Langues, Pages, Extras, Métiers, Blog, Offre d'emploi, Notre équipe, Nos références, Nos Formations et Déconnection.</p>

                        <p>Chacune de ces parties comprend des sous-parties, à l'exception du Dashboard.</p>
                    </section>
                    <h3>Activités du compte de l’administrateur </h3>
                    <hr>
                    {{-- debut Tableau de bord --}}
                    <section class="unit-block mb-100" id="list-item-2">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Tableau de bord</h4>
                        <p>In LMSZAI, an admin is a user with the most access, permissions, and responsibilities. To run
                            the program, the admin must handle the entire system. </p>
                            <div class="sitemap-img mt-5">
                                <img src="{{ asset('public/images/image_doc/accueil.png')}}" alt="">
                            </div>
                        <br>

                    </section>
                    {{-- fin Tableau de bord --}}
                {{-- *************************************************************************************************************** --}}
                    {{--debut Paramètre --}}
                    <section class="unit-block mb-100" id="list-item-3">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Paramètre</h4>
                        <br>
                        <p>Cette partie comporte 4 sous-partie qui sont:</p>
                        <div>
                            <li> <a href="#list-item-3-1">Profile</a></li>
                            <li> <a href="#list-item-3-2">Utilisateurs</a></li>
                            <li> <a href="#list-item-3-3">Roles</a></li>
                            <li> <a href="#list-item-3-4">Permissions</a></li>
                        </div>

                        <p>Vous pouvez aller sur chaque partie en cliquant pour avoir plus de détail.</p>
                        <br>
                        <section class="unit-block mb-100" id="list-item-3-1">
                            <p class="my-2"><span class="font-bold"> Le Profile</span></p>
                        <p>In LMSZAI student can learn and upgrade their knowledge and skills through
                            this platform. Students can purchase any course for enrollment. After enrolling in a course,
                            they can start to learn. They can give assignments, quizzes
                            and see the results. If there is any problem while doing the course, you can discuss it with
                            the course instructor. Students can browse any courses,
                            make a wish list, see blogs, share courses and blogs. A student can apply to become an
                            instructor.
                        </p>
                        <div class="sitemap-img mt-5">
                            <img src="{{ asset('public/images/image_doc/profile.png')}}" alt="">
                        </div>
                        </section><br>
                        <section class="unit-block mb-100" id="list-item-3-2">
                            <p><span class="font-bold">Les utilisateurs</span></p>
                        <p>In LMSZAI student can learn and upgrade their knowledge and skills through
                            this platform. Students can purchase any course for enrollment. After enrolling in a course,
                            they can start to learn. They can give assignments, quizzes
                            and see the results. If there is any problem while doing the course, you can discuss it with
                            the course instructor. Students can browse any courses,
                            make a wish list, see blogs, share courses and blogs. A student can apply to become an
                            instructor.
                        </p>
                        <div class="sitemap-img mt-5">
                            <img src="{{ asset('public/images/image_doc/utilisateur.png')}}" alt="">
                        </div>
                        </section><br>
                        <section class="unit-block mb-100" id="list-item-3-3">
                            <p><span class="font-bold">Les roles</span></p>
                        <p>In LMSZAI student can learn and upgrade their knowledge and skills through
                            this platform. Students can purchase any course for enrollment. After enrolling in a course,
                            they can start to learn. They can give assignments, quizzes
                            and see the results. If there is any problem while doing the course, you can discuss it with
                            the course instructor. Students can browse any courses,
                            make a wish list, see blogs, share courses and blogs. A student can apply to become an
                            instructor.
                        </p>
                        <div class="sitemap-img mt-5">
                            <img src="{{ asset('public/images/image_doc/role.png')}}" alt="">
                        </div>
                        </section>
                        <section class="unit-block mb-100 my-2" id="list-item-3-4">
                            <p class=""><span class="font-bold">Les Permissions</span></p>
                        <p>In LMSZAI student can learn and upgrade their knowledge and skills through
                            this platform. Students can purchase any course for enrollment. After enrolling in a course,
                            they can start to learn. They can give assignments, quizzes
                            and see the results. If there is any problem while doing the course, you can discuss it with
                            the course instructor. Students can browse any courses,
                            make a wish list, see blogs, share courses and blogs. A student can apply to become an
                            instructor.
                        </p>
                        <div class="sitemap-img mt-5">
                            <img src="{{ asset('public/images/image_doc/permissions.png')}}" alt="">
                        </div>
                        </section><br>


                    </section>
                    {{--fin Paramètre --}}
                {{-- *************************************************************************************************************** --}}
                    {{--debut Langues --}}
                    <section class="unit-block mb-100" id="list-item-4">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Langues</h4>
                        <br>
                        <p>Cette partie comporte 2 sous-partie qui sont:</p>
                        <div>
                            <li> <a href="#list-item-4-1">Clé</a></li>
                            <li> <a href="#list-item-4-2">Français-anglais</a></li>
                        </div>
                        <p>Vous pouvez aller sur chaque partie en cliquant pour avoir plus de détail.</p>

                        <section class="unit-block mb-100" id="list-item-4-1">
                            <p class="my-2"><span class="font-bold"> La clé</span></p>
                        <p>In LMSZAI student can learn and upgrade their knowledge and skills through
                            this platform. Students can purchase any course for enrollment. After enrolling in a course,
                            they can start to learn. They can give assignments, quizzes
                            and see the results. If there is any problem while doing the course, you can discuss it with
                            the course instructor. Students can browse any courses,
                            make a wish list, see blogs, share courses and blogs. A student can apply to become an
                            instructor.
                        </p>
                        <div class="sitemap-img mt-5">
                            <img src="{{ asset('public/images/image_doc/cle.png')}}" alt="">
                        </div>
                        </section><br>
                        <section class="unit-block mb-100" id="list-item-4-2">
                            <p class="my-2"><span class="font-bold"> Français-anglais</span></p>
                        <p>In LMSZAI student can learn and upgrade their knowledge and skills through
                            this platform. Students can purchase any course for enrollment. After enrolling in a course,
                            they can start to learn. They can give assignments, quizzes
                            and see the results. If there is any problem while doing the course, you can discuss it with
                            the course instructor. Students can browse any courses,
                            make a wish list, see blogs, share courses and blogs. A student can apply to become an
                            instructor.
                        </p>
                        <div class="sitemap-img mt-5">
                            <img src="{{ asset('public/images/image_doc/français_anglais.png')}}" alt="">
                        </div>
                        </section><br>

                    </section>
                    {{--fin Langues --}}
                {{-- *************************************************************************************************************** --}}
                    {{--debut La page --}}
                    <section class="unit-block mb-100" id="list-item-5">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> La page</h4>
                        <p>To purchase a course a user follow some criteria: </p>
                        <div>
                            <li class="my-2"><span class="font-bold"> La page d'accueil</span></li>
                        </div>

                        <p>In LMSZAI student can learn and upgrade their knowledge and skills through
                            this platform. Students can purchase any course for enrollment. After enrolling in a course,
                            they can start to learn. They can give assignments, quizzes
                            and see the results. If there is any problem while doing the course, you can discuss it with
                            the course instructor. Students can browse any courses,
                            make a wish list, see blogs, share courses and blogs. A student can apply to become an
                            instructor.
                        </p>
                        <div class="sitemap-img mt-5">
                            <img src="{{ asset('public/images/image_doc/page_accueil.png')}}" alt="">
                        </div><br><br><br>
                    </section>
                     {{--fin La page --}}
                {{-- *************************************************************************************************************** --}}
                    {{--debut Extras --}}
                    <section class="unit-block mb-100" id="list-item-6">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Extras</h4>
                        <p>To purchase a course a user follow some criteria: </p>
                        <div>
                            <li class="my-2"><span class="font-bold"> La page de pole</span></li>
                        </div>

                        <p>In LMSZAI student can learn and upgrade their knowledge and skills through
                            this platform. Students can purchase any course for enrollment. After enrolling in a course,
                            they can start to learn. They can give assignments, quizzes
                            and see the results. If there is any problem while doing the course, you can discuss it with
                            the course instructor. Students can browse any courses,
                            make a wish list, see blogs, share courses and blogs. A student can apply to become an
                            instructor.
                        </p>
                        <div class="sitemap-img mt-5">
                            <img src="{{ asset('public/images/image_doc/page_pole.png')}}" alt="">
                        </div><br><br>
                        <div>
                            <li class="my-2"><span class="font-bold"> Index metier</span></li>
                        </div>

                        <p>In LMSZAI student can learn and upgrade their knowledge and skills through
                            this platform. Students can purchase any course for enrollment. After enrolling in a course,
                            they can start to learn. They can give assignments, quizzes
                            and see the results. If there is any problem while doing the course, you can discuss it with
                            the course instructor. Students can browse any courses,
                            make a wish list, see blogs, share courses and blogs. A student can apply to become an
                            instructor.
                        </p>
                        <div class="sitemap-img mt-5">
                            <img src="{{ asset('public/images/image_doc/index_metier.png')}}" alt="">
                        </div><br><br><br>
                    </section>
                    {{--fin Extras --}}
                {{-- *************************************************************************************************************** --}}
                    {{--debut Metier --}}
                    <section class="unit-block mb-100" id="list-item-7">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Métiers</h4>
                        <p>To purchase a course a user follow some criteria: </p>
                        <div>
                            <li class="my-2"><span class="font-bold"> La presentation</span></li>
                        </div>

                        <p>In LMSZAI student can learn and upgrade their knowledge and skills through
                            this platform. Students can purchase any course for enrollment. After enrolling in a course,
                            they can start to learn. They can give assignments, quizzes
                            and see the results. If there is any problem while doing the course, you can discuss it with
                            the course instructor. Students can browse any courses,
                            make a wish list, see blogs, share courses and blogs. A student can apply to become an
                            instructor.
                        </p>
                        <div class="sitemap-img mt-5">
                            <img src="{{ asset('public/images/image_doc/presentation.png')}}" alt="">
                        </div><br><br>
                        <div>
                            <li class="my-2"><span class="font-bold"> Expertises</span></li>
                        </div>

                        <p>In LMSZAI student can learn and upgrade their knowledge and skills through
                            this platform. Students can purchase any course for enrollment. After enrolling in a course,
                            they can start to learn. They can give assignments, quizzes
                            and see the results. If there is any problem while doing the course, you can discuss it with
                            the course instructor. Students can browse any courses,
                            make a wish list, see blogs, share courses and blogs. A student can apply to become an
                            instructor.
                        </p>
                        <div class="sitemap-img mt-5">
                            <img src="{{ asset('public/images/image_doc/expertises.png')}}" alt="">
                        </div><br><br><br>
                    </section>
                    {{--fin Metier --}}
                {{-- *************************************************************************************************************** --}}
                    {{--debut Blog --}}
                    <section class="unit-block mb-100" id="list-item-8">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Blog</h4>
                        <p>To purchase a course a user follow some criteria: </p>
                        <div>
                            <li class="my-2"><span class="font-bold"> La categorie</span></li>
                        </div>

                        <p>In LMSZAI student can learn and upgrade their knowledge and skills through
                            this platform. Students can purchase any course for enrollment. After enrolling in a course,
                            they can start to learn. They can give assignments, quizzes
                            and see the results. If there is any problem while doing the course, you can discuss it with
                            the course instructor. Students can browse any courses,
                            make a wish list, see blogs, share courses and blogs. A student can apply to become an
                            instructor.
                        </p>
                        <div class="sitemap-img mt-5">
                            <img src="{{ asset('public/images/image_doc/categories.png')}}" alt="">
                        </div><br><br>
                        <div>
                            <li class="my-2"><span class="font-bold"> Articles</span></li>
                        </div>

                        <p>In LMSZAI student can learn and upgrade their knowledge and skills through
                            this platform. Students can purchase any course for enrollment. After enrolling in a course,
                            they can start to learn. They can give assignments, quizzes
                            and see the results. If there is any problem while doing the course, you can discuss it with
                            the course instructor. Students can browse any courses,
                            make a wish list, see blogs, share courses and blogs. A student can apply to become an
                            instructor.
                        </p>
                        <div class="sitemap-img mt-5">
                            <img src="{{ asset('public/images/image_doc/articles.png')}}" alt="">
                        </div><br><br><br>
                    </section>
                    {{--fin Blog --}}
                {{-- *************************************************************************************************************** --}}
                    {{--debut Offre d'emploi --}}
                    <section class="unit-block mb-100" id="list-item-9">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Offre d'emploi</h4>
                        <p>To purchase a course a user follow some criteria: </p>
                        <div>
                            <li class="my-2"><span class="font-bold"> Liste des offres</span></li>
                        </div>

                        <p>In LMSZAI student can learn and upgrade their knowledge and skills through
                            this platform. Students can purchase any course for enrollment. After enrolling in a course,
                            they can start to learn. They can give assignments, quizzes
                            and see the results. If there is any problem while doing the course, you can discuss it with
                            the course instructor. Students can browse any courses,
                            make a wish list, see blogs, share courses and blogs. A student can apply to become an
                            instructor.
                        </p>
                        <div class="sitemap-img mt-5">
                            <img src="{{ asset('public/images/image_doc/offre_emploi.png')}}" alt="">
                        </div><br><br><br>
                    </section>
                    {{--fin Offre d'emploi --}}
                {{-- *************************************************************************************************************** --}}
                    {{--debut Nos équipe --}}
                    <section class="unit-block mb-100" id="list-item-10">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Nos équipe</h4>
                        <p>To purchase a course a user follow some criteria: </p>
                        <div>
                            <li class="my-2"><span class="font-bold"> Voir membres</span></li>
                        </div>

                        <p>In LMSZAI student can learn and upgrade their knowledge and skills through
                            this platform. Students can purchase any course for enrollment. After enrolling in a course,
                            they can start to learn. They can give assignments, quizzes
                            and see the results. If there is any problem while doing the course, you can discuss it with
                            the course instructor. Students can browse any courses,
                            make a wish list, see blogs, share courses and blogs. A student can apply to become an
                            instructor.
                        </p>
                        <div class="sitemap-img mt-5">
                            <img src="{{ asset('public/images/image_doc/membre.png')}}" alt="">
                        </div><br><br><br>
                    </section>
                    {{--fin Nos équipe --}}
                {{-- *************************************************************************************************************** --}}
                    {{-- debut Nos références --}}
                    <section class="unit-block mb-100" id="list-item-11">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Nos références</h4>
                        <p>To purchase a course a user follow some criteria: </p>
                        <div>
                            <li class="my-2"><span class="font-bold"> Voir références</span></li>
                        </div>

                        <p>In LMSZAI student can learn and upgrade their knowledge and skills through
                            this platform. Students can purchase any course for enrollment. After enrolling in a course,
                            they can start to learn. They can give assignments, quizzes
                            and see the results. If there is any problem while doing the course, you can discuss it with
                            the course instructor. Students can browse any courses,
                            make a wish list, see blogs, share courses and blogs. A student can apply to become an
                            instructor.
                        </p>
                        <div class="sitemap-img mt-5">
                            <img src="{{ asset('public/images/image_doc/reference.png')}}" alt="">
                        </div><br><br><br>
                    </section>
                    {{--  fin Nos références --}}
                {{-- *************************************************************************************************************** --}}
                    {{-- debut Nos formations --}}
                    <section class="unit-block mb-100" id="list-item-12">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Nos formations</h4>
                        <p>To purchase a course a user follow some criteria: </p>
                        <div>
                            <li class="my-2"><span class="font-bold"> Voir formations</span></li>
                        </div>

                        <p>In LMSZAI student can learn and upgrade their knowledge and skills through
                            this platform. Students can purchase any course for enrollment. After enrolling in a course,
                            they can start to learn. They can give assignments, quizzes
                            and see the results. If there is any problem while doing the course, you can discuss it with
                            the course instructor. Students can browse any courses,
                            make a wish list, see blogs, share courses and blogs. A student can apply to become an
                            instructor.
                        </p>
                        <div class="sitemap-img mt-5">
                            <img src="{{ asset('public/images/image_doc/formation.png')}}" alt="">
                        </div>
                    </section>
                    {{-- fin Nos formations --}}
                {{-- *************************************************************************************************************** --}}
                    {{--debut déconnection --}}
                    <section class="unit-block mb-100" id="list-item-13">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Se déconnecter</h4>
                        <p>C'est ici vous vous déconnecter </p>
                    </section>
                    {{--fin déconnection --}}

                    <h3>Documentation du code source </h3>
                    <hr>
                    <section class="unit-block mb-100" id="list-item-14">
                            <section class="unit-block mb-100" id="list-item-63">
                                <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Update Guideline
                                </h4>
                                <p>LMSZAI is the best Learning Management System(LMS) application right now. Day by day we
                                    update LMSZAI and add new features. Any customer update our
                                    application from any lowest version to upper version. We provide all the
                                    necessary documentation required for you. It is fully documented and simple to modify.</p>
                                <br>
                                <p>If you have <b>old version</b>, and you want to update it <b>new version. You follow some
                                    necessary steps.</b></p>

                                <blockquote class="block-quote">
                                    <h5 class="mb-3"><span class="iconify" data-icon="emojione:warning"></span>Warning</h5>
                                    <p>If you change anything in the script files, you will lose all change after update the
                                        script.</p>
                                </blockquote>
                                <h4 class="text-bg-secondary p-4 justify-content-center">LMSZAI Learning Management System update v1.0 to 1.3</h4>

                                <div class="pt-5">
                                    <li><b>Step 1.</b> Please follow <b>LMSZAI Learning Management System update v1.1/v1.2 to 1.3</b>.
                                        After successfully follow <b>Step 1 to 14</b> of <b>update v1.1/v1.2 to 1.3</b> all the steps.
                                        You just add few things your <b>.env</b> file. See here
                                    </li>
                                </div>
                                <div class="sitemap-img mt-5 mb-5">
                                    <img src="assets/documentation/lmszai/update/6.png" alt="">
                                </div>

                                <h4 class="text-bg-secondary p-4 justify-content-center">LMSZAI Learning Management System update v1.1/v1.2 to
                                    1.3</h4>
                                <br>
                                <span class="font-bold">Steps: </span>
                                <p>At first, login to your control panel (cpanel, or anywhere you upload LMSZAI script).
                                    Download some folder that is connected to your database.</p>
                                <blockquote class="block-quote">
                                    <h5 class="mb-3"><span class="iconify"
                                                           data-icon="ant-design:safety-certificate-outlined"></span>Backup Plan
                                    </h5>
                                    <p>I hope your updating will be done successfully. Download your <b>database and present
                                        script</b> to avoid any errors. (Safety first)</p>
                                </blockquote>
                                <div>

                                    <li><b>Step 1.</b><br> Now go to your folder location <b>public</b>
                                        <span class="iconify" data-icon="arcticons:url-forwarder"></span>You see 2 folders<b>(uploads</b>
                                        and <b>uploads_demo)</b>.
                                        <b>Zip</b> 2 folders and <b>download</b> in your computer. This zip folder need in <b>Step
                                            8.</b>
                                    </li>
                                    <div class="sitemap-img mt-5 mb-5">
                                        <img src="assets/documentation/lmszai/update/1.jpg" alt="">
                                    </div>
                                    <li><b>Step 2.</b><br>Then back in main file location and go to your folder location <b>resources</b><span
                                            class="iconify" data-icon="arcticons:url-forwarder"></span>You
                                        see 1 folder <b>lang</b>. Now, <b>Zip</b> the folder and <b>download</b> in your
                                        computer. This zip folder need in <b>Step 9.</b>
                                    </li>
                                    .
                                    <div class="sitemap-img mt-5 mb-5">
                                        <img src="assets/documentation/lmszai/update/2.jpg" alt="">
                                    </div>
                                    <li><b>Step 3.</b><br>Then back in main file and go to your folder location
                                        <b>storage</b><span class="iconify" data-icon="arcticons:url-forwarder"></span>You see 1
                                        file
                                        <b>installed</b>. Now <b>download</b> the file in your computer. This file need in <b>Step
                                            10.</b>
                                    </li>
                                    <div class="sitemap-img mt-5 mb-5">
                                        <img src="assets/documentation/lmszai/update/3.jpg" alt="">
                                    </div>
                                    <li><b>Step 4.</b><br>Then back in main file and go to your main file location <span
                                            class="iconify" data-icon="arcticons:url-forwarder"></span><b>.env</b> You see the
                                        file <b>(.env)</b>. Now <b>download</b> the file in your computer. This file need in <b>Step
                                            11.</b>
                                    </li>
                                    <div class="sitemap-img mt-5 mb-5">
                                        <img src="assets/documentation/lmszai/update/4.jpg" alt="">
                                    </div>
                                    <li><b>Step 5.</b><br>Now if you changed by yourself <span class="iconify"
                                                                                               data-icon="arcticons:url-forwarder"></span>
                                        <b>.htaccess</b> file for your hosting need to host
                                        this project. You <b>download</b> the file <span class="iconify"
                                                                                         data-icon="arcticons:url-forwarder"></span>
                                        <b>.htaccess</b> in your computer. This file need in <b>Step 12.</b>
                                    </li>
                                    <div class="sitemap-img mt-5 mb-5">
                                        <img src="assets/documentation/lmszai/update/5.jpg" alt="">
                                    </div>
                                    <li>Now please ensure every important file download in your computer.</li>
                                    <br>
                                    <li><b>Step 6.</b><br> Now <b>Delete</b> all the file your control panel and upload our new
                                        <b>Main Files (Script)</b> this current location.
                                    </li>
                                    <br>
                                    <blockquote class="block-quote">
                                        <h5 class="mb-3"><span class="iconify" data-icon="emojione:warning"></span>Warning</h5>
                                        <p>This time you don't need to install again. <b>Strictly Prohibited</b></p>
                                    </blockquote>
                                    <br>
                                    <li><b>Step 7.</b><br> After successfully upload new file. You need to give 777 permission
                                        this folders(<b>public, resources, route, storage, .env</b>) same as before.
                                    </li>
                                    <br>
                                    <li>Now your downloaded zip and file updated with new files</li>
                                    <br>
                                    <li><b>Step 8.</b><br>Now go to your folder location <b>public</b>
                                        <span class="iconify" data-icon="arcticons:url-forwarder"></span>You see 2 folders<b>(uploads</b>
                                        and <b>uploads_demo)</b>.
                                        Delete this 2 folders, and upload your zip folder from your computer and extract in <b>public</b>
                                        folder. You already have zip folder which was download in <b>Step 1</b>.
                                    </li>
                                    <br>
                                    <li><b>Step 9.</b><br>Then back in main file location and go to your folder location <b>resources</b><span
                                            class="iconify" data-icon="arcticons:url-forwarder"></span>You
                                        see 1 folder <b>lang</b>. Delete this <b>lang</b> folder, and upload your zip folder
                                        from your computer and extract in <b>resources</b> folder. You already have zip folder
                                        which was download in <b>Step 2</b>.
                                    </li>
                                    <br>
                                    <li><b>Step 10.</b><br>Then back in main file and go to your folder location
                                        <b>storage</b><span class="iconify" data-icon="arcticons:url-forwarder"></span>. Upload
                                        <b>installed</b> file in <b>storage</b> folder from your computer. You already have <b>installed</b>
                                        file which was download in <b>Step 3</b>.
                                    </li>
                                    <br>
                                    <li><b>Step 11.</b><br>Then back in main file and go to your main file location <span
                                            class="iconify" data-icon="arcticons:url-forwarder"></span><b>.env</b> You see the
                                        file <b>(.env)</b>. Delete this <b>.env</b> file and Upload <b>.env</b> file in <b>main
                                            file</b> from your computer. You already have <b>.env</b> file which was download in
                                        <b>Step 4</b>.
                                    </li>
                                    <br>
                                    <li><b>Step 12.</b><br> If you changed by yourself <span class="iconify"
                                                                                             data-icon="arcticons:url-forwarder"></span>
                                        <b>.htaccess</b> file for your hosting need to host
                                        this project. So you already followed <b>Step 5</b>. If you download <b>.htaccess</b>
                                        file, you can delete <b>.htaccess</b> file from main file location and upload your
                                        download <b>.htaccess</b> file. Otherwise, if you didn't change <b>.htaccess</b> file,
                                        you don't need to <b>.htaccess</b> file.
                                    </li>
                                    <br>
                                    <li><b>Step 13.</b><br>
                                        If you successfully complete <b>Step 1 - Step 12</b>, Go to your admin panel location
                                        <span class="iconify" data-icon="arcticons:url-forwarder"></span> <b>Application
                                            Settings</b>
                                        <span class="iconify" data-icon="arcticons:url-forwarder"></span> <b>Migrate
                                            Settings</b>
                                        Then click
                                        <span class="iconify" data-icon="arcticons:url-forwarder"></span> <b>Migrate</b> <b>Click
                                            Here</b>
                                    </li>
                                    <br>
                                    <div class="sitemap-img mt-5 mb-5">
                                        <img src="assets/documentation/lmszai/update/8.png" alt="">
                                    </div>
                                    <p><b>N.B -></b> If you will not access to get in migrate or cache clear. Then Please Open browser and hit this url <b>(yourDomainName)/migrate</b>.
                                        After then,
                                        you will access any kind of feature.</p>
                                    <br>
                                    <li><b>Step 14.</b><br>
                                        If you successfully complete <b>Step 1 - Step 13</b>, Go to your admin panel location
                                        <span class="iconify" data-icon="arcticons:url-forwarder"></span> <b>Application
                                            Settings</b>
                                        <span class="iconify" data-icon="arcticons:url-forwarder"></span> <b>Cache Settings</b>
                                        Then click
                                        <span class="iconify" data-icon="arcticons:url-forwarder"></span> <b>Application Clear Cache</b> <b>Click
                                            Here</b>
                                    </li>
                                    <div class="sitemap-img mt-5 mb-5">
                                        <img src="assets/documentation/lmszai/update/7.png" alt="">
                                    </div>
                                    <br>

                                </div>
                                <p>After successfully done step 1 to 14. You see the all new update in your application. Thank you</p>
                                <br>
                                <h4 class="text-bg-secondary p-4 justify-content-center">LMSZAI Learning Management System update v1.3 to 1.4</h4>
                                <br>
                                <div class="pt-5">
                                    <li><b>Step 1.</b> Please follow <b>LMSZAI Learning Management System update v1.1/v1.2 to 1.3</b>.
                                        After successfully follow <b>Step 1 to 14</b> of <b>update v1.1/v1.2 to 1.3</b> all the steps.
                                        You just add few things your <b></b> file. Go to your main file location then
                                        <span class="iconify" data-icon="arcticons:url-forwarder"></span>resources
                                        <span class="iconify" data-icon="arcticons:url-forwarder"></span>lang. (Without <b>vendor</b> folder and <b>en.json</b> file), you can see <b>en,
                                            sa</b> etc folder. Go to every folder and see <b>app.php</b> file. and go down of the page and write few things which is not there in your list.
                                    </li>
                                </div>
                                <div class="sitemap-img mt-5 mb-5">
                                    <img src="assets/documentation/lmszai/update/8.jpg" alt="">
                                </div>
                                <div class="sitemap-img mt-5 mb-5">
                                    <img src="assets/documentation/lmszai/update/6.jpg" alt="">
                                </div>
                                <p>Write here from above image. Make sure, write here which is not in your list. Go to every folder and see <b>app.php</b> file. and go down of the page and
                                    write few things from above image, which is not there in your list.</p>
                                <div class="sitemap-img mt-5 mb-5">
                                    <img src="assets/documentation/lmszai/update/7.jpg" alt="">
                                </div>
                                <br>
                                <h4 class="text-bg-secondary p-4 justify-content-center">LMSZAI Learning Management System update v1.3/1.4 to 1.5</h4>
                                <div class="pt-5">
                                    <li><b>Step 1.</b> Please follow <b>LMSZAI Learning Management System update v1.1/v1.2 to 1.3</b>.
                                        After successfully follow <b>Step 1 to 14</b> <span class="text-danger">(except step 2 & step 9)</span> of <b>update v1.1/v1.2 to 1.3</b> all the
                                        steps.
                                        This steps your language manage will change. Our old language manage can change only static content. But after upgrade v1.5 you will change every
                                        possible static and dynamic content. Your last languages data will be lost.
                                    </li>
                                </div>
                                <br>
                                <h4 class="text-bg-secondary p-4 justify-content-center">LMSZAI Learning Management System update v1.5 to v2.0</h4>
                                <div class="pt-5">
                                    <li><b>Step 1.</b> Please follow <b>LMSZAI Learning Management System update v1.1/v1.2 to 1.3</b>. <span
                                            class="text-danger">(You can skip step 13)</span>.
                                        After successfully follow <b>Step 1 to 14</b> of <b>update v1.1/v1.2 to 1.3</b> . Now you can follow next step.
                                    </li>
                                    <li><b>Step 2.</b> Your <b>.env</b> file add some data exactly same, otherwise it's not working. Given here</li>
                                    <div class="sitemap-img mt-5 mb-5">
                                        <img src="assets/documentation/lmszai/update/9.jpg" alt="">
                                    </div>
                                    <li><b>Step 3.</b> Now you can browse your url. After browse your website url , you can see this. Image given here</li>
                                    <div class="sitemap-img mt-5 mb-5">
                                        <img src="assets/documentation/lmszai/update/10.jpg" alt="">
                                    </div>
                                    <br>
                                    <li><b>Step 3.</b> Please click update now. After successfully updated. You can see all the changes.</li>
                                    <br>
                                </div>
                                <h4 class="text-bg-secondary p-4 justify-content-center">LMSZAI Learning Management System update v2.0 to v2.1/v2.2</h4>
                                <div class="pt-5 pb-5">
                                    <li><b>Step 1.</b> Please follow <b>LMSZAI Learning Management System update v1.1/v1.2 to 1.3</b>. <span
                                            class="text-danger">(You can skip step 13)</span>.
                                        After successfully follow <b>Step 1 to 14</b> of <b>update v1.1/v1.2 to 1.3</b> . Thank you.
                                    </li>
                                </div>
                                <h4 class="text-bg-secondary p-4 justify-content-center">LMSZAI Learning Management System update older to v3.0 or more latest</h4>
                                <p>At first, login to your control panel (cpanel, or anywhere you upload LMSZAI script).
                                    Download some folder that is connected to your database.</p>
                                <blockquote class="block-quote">
                                    <h5 class="mb-3"><span class="iconify"
                                                           data-icon="ant-design:safety-certificate-outlined"></span>Backup Plan
                                    </h5>
                                    <p>I hope your updating will be done successfully. Download your <b>database and present
                                        script</b> to avoid any errors. (Safety first)</p>
                                </blockquote>
                                <div class="pt-5">
                                    <li><b>Step 1.</b>
                                        <blockquote class="block-quote">
                                            <h5 class="mb-3"><span class="iconify"
                                                                   data-icon="ant-design:safety-certificate-outlined"></span>Backup those below file and folders. You can see this in your domain root folder.
                                            </h5>
                                            <p>public\uploads</p>
                                            <p>public\uploads_demo</p>
                                            <p>resources\lang</p>
                                            <p>storage</p>
                                            <p>.env</p>
                                            <p>.htaccess</p>
                                        </blockquote>
                                    </li>
                                    <li><b>Step 2.</b> Delete all the files inside your domain root.</li>
                                    <li><b>Step 3.</b> Upload our latest code into that folder.</li>
                                    <li><b>Step 4.</b> Replace below files and folders in respected directory. <br>
                                        <blockquote class="block-quote">
                                            <p>public\uploads</p>
                                            <p>public\uploads_demo</p>
                                            <p>resources\lang</p>
                                            <p>storage</p>
                                            <p>.env</p>
                                            <p>.htaccess</p>
                                        </blockquote>
                                    </li>
                                    <b>Note:</b> Please ensure all the key is exist in the .env file. If not then add the keys.
                                    <div class="sitemap-img mt-5 mb-5">
                                        <img src="assets\documentation\lmszai\update\env.png" alt="">
                                    </div>
                                    <br>
                                    <li><b>Step 5.</b>Browse your domain.</li>
                                    <li><b>Step 6.</b>You can see the updater page as below. and click the update button.</li>
                                    <div class="sitemap-img mt-5 mb-5">
                                        <img src="assets\documentation\lmszai\update\update.png" alt="">
                                    </div>
                                    <br>
                                    <p>You have finished the version update process. Thank You</p>
                                </div>
                            </section>
                    </section>

                    <section class="unit-block mb-100" id="list-item-15">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Upload Courses
                        </h4>
                        <div>
                            <li>For upload any course instructor need to follow some steps:</li>
                        </div>
                        <div>
                            <li class="font-bold">First steps:</li>
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/scorm-course.png" alt="">
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/28.png" alt="">
                        </div>
                        <div>
                            <li class="font-bold">Second steps (Add category, price, thumbnail image, video etc):</li>
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/29.png" alt="">
                        </div>
                        <div>
                            <p class="font-bold">Course drip content, access period and old price</p>
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/accessperiod.png" alt="">
                        </div>
                        <div>
                            <li class="font-bold">Third steps (Add section and Lessons):</li>
                            <p><span class="font-bold">Note:</span>If instructor do not upload any lesson, he/she can't
                                go to next process.</p>
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/84.jpg" alt="">
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/85.jpg" alt="">
                        </div>
                        <div>
                            <p>Instructor can upload 8 different types lesson.</p>
                            <li>Upload Direct Video</li>
                            <li>YouTube Video ID</li>
                            <li>Upload Video in Vimeo Server</li>
                            <li>Text</li>
                            <li>Image</li>
                            <li>PDF</li>
                            <li>Slide Document</li>
                            <li>Audio</li>
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/86.jpg" alt="">
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/30.png" alt="">
                        </div>
                        <div>
                            <li class="font-bold">Instructor can add multiple instructors:</li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/multi-instructor.png" alt="">
                        </div>
                        <div>
                            <li class="font-bold">Final steps (Submit and review):</li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/31.jpg" alt="">
                        </div>
                    </section>
                    <section class="unit-block mb-100" id="list-item-152">
                        <div>
                            <li class="font-bold">SCORM Course:</li>
                            <p>Instructor can iSpring, SCORM all version, xAPI (The Experience API), cmi5 (a companion to xAPI), AICC Course</p>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/scorm-course-file.png" alt="">
                        </div>
                    </section>
                    <section class="unit-block mb-100" id="list-item-16">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> My Courses</h4>
                        <div>
                            <li>After successfully course upload, now instructor can edit, delete course and add
                                resources, quiz, assignments, live class, notice, certificate,
                                discussion.
                            </li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/32.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-17">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Courses
                            Resources </h4>
                        <div>
                            <li>Resources add, delete</li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/33.jpg" alt="">
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/34.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-18">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Courses Quiz
                        </h4>
                        <div>
                            <li>Quiz add, view, edit, delete, publish, unpublish</li>
                            <p>Quiz has 2 types</p>
                            <ul>1. Multiple Choice</ul>
                            <ul>2. True-False</ul>
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/35.jpg" alt="">
                        </div>
                        <div>
                            <li class="font-bold">Quiz add first step:</li>
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/36.jpg" alt="">
                        </div>
                        <div>
                            <li class="font-bold">After successfully Quiz add you can see add question option</li>
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/37.jpg" alt="">
                        </div>
                        <div>
                            <li>Add question page you create one by one question & ans Or you can upload bulk upload
                            </li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/38.jpg" alt="">
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/39.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-19">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Courses
                            Assignment </h4>
                        <div>
                            <li>Assignment list and instructor can create assignment</li>
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/40.jpg" alt="">
                        </div>
                        <div>
                            <li>Assignment list and instructor can create assignment</li>
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/41.jpg" alt="">
                        </div>
                        <div>
                            <li>Instructor can give assignment marks</li>
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/42.jpg" alt="">
                        </div>
                        <div>
                            <li>Assignment result</li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/43.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-20">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> All Student
                        </h4>
                        <div>
                            <li>Instructor see his/her all students</li>
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/44.jpg" alt="">
                        </div>
                        <div>
                            <li>Instructor can filter students using filter</li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/45.jpg" alt="">
                        </div>

                    </section>

                    <section class="unit-block mb-100" id="list-item-21">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Notice Board
                        </h4>
                        <div>
                            <li>Instructor can add, edit, delete & view course notice</li>
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/46.jpg" alt="">
                        </div>
                        <div>
                            <li>Notice add form</li>
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/47.jpg" alt="">
                        </div>
                        <div>
                            <li>Course Notice List</li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/48.jpg" alt="">
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/49.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-22">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Live Class </h4>
                        <div>
                            <li>Instructor can add, edit, delete & view course live class</li>
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/50.jpg" alt="">
                        </div>
                        <div>
                            <li>Course live class add form</li>
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/51.jpg" alt="">
                        </div>
                        <div>
                            <li>Course live class list</li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/52.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-23">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Certificate
                        </h4>
                        <div>
                            <li>Instructor can add, edit, delete & view course certificates</li>
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/53.jpg" alt="">
                        </div>
                        <div>
                            <li>Admin give many template and instructor can add certificates from his/her panel and can
                                edit
                            </li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/54.jpg" alt="">
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/55.jpg" alt="">
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/56.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-24">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Discussion </h4>
                        <div>
                            <li>If any student wants to discuss with instructor through his enrolled course. Student can
                                comment his enrolled course discussion and instructor reply
                                form here
                            </li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/57.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-25">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Finance </h4>
                        <div>
                            <p>Instructor can see how mane student enrolled his/her course, total courses, total
                                earning, total available balance, withdraw money, request withdraw
                                amount, can withdraw from here and sales per month sales statistics.</p>
                            <p>Finance has 2 options </p>
                            <li>Analysis</li>
                            <li>Withdraw History</li>
                        </div>
                        <br>
                        <h6>Analysis</h6>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/58.jpg" alt="">
                        </div>
                        <h6>Withdraw History</h6>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/59.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-26">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Profile </h4>
                        <div>
                            <p>Instructor can update his profile from here</p>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/60.png" alt="">
                        </div>
                    </section>
                    <section class="unit-block mb-100" id="list-item-72">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Geolocation Search</h4>
                        <div>
                            <p>Instructor can update his geolocation</p>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/geolocationset.png" alt="">
                        </div>
                    </section>
                    <section class="unit-block mb-100" id="list-item-75">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Saas Module</h4>
                        <div>
                            <p>Instructor can purchase Saas plan</p>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/saas-panel.png" alt="">
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/saas-plan.png" alt="">
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/saas-plan-details.png" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-27">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Payment Settings
                        </h4>
                        <div>
                            <p>Instructor can withdraw his income by his/her account. His/her account info add, update
                                form here.</p>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/61.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-64">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Bundle Offer
                        </h4>
                        <div>
                            <p>Instructor can create, edit, delete bundle from his/her courses. and your created bundle course you can change active/disable. Some create bundle and
                                course add/remove images given here.</p>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/74.jpg" alt="">
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/75.jpg" alt="">
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/76.jpg" alt="">
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/77.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-65">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Consultation
                        </h4>
                        <div>
                            <p>In consultation instructor see 3 options. Options are: </p>
                            <li>Dashboard</li>
                            <li>Booking Request</li>
                            <li>Booking History</li>
                        </div>
                        <br>
                        <p>In dashboard instructor set available status for consultation, set available type, set hourly rate, set which day his/her off day/on day, set every day
                            time slot. </p>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/78.jpg" alt="">
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/79.jpg" alt="">
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/80.jpg" alt="">
                        </div>
                        <br>
                        <br>
                        <p>In Booking Request instructor can can approve and cancel consultation request.</p>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/81.jpg" alt="">
                        </div>
                        <br>
                        <br>
                        <p>In Booking History instructor can can see consultation approved, completed and cancel request history.</p>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/82.jpg" alt="">
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/83.jpg" alt="">
                        </div>
                    </section>
                    <section class="unit-block mb-100" id="list-item-78">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Zoom Setting</h4>
                        <div>
                            <p>Instructor can manage his Zoom Setting</p>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/organization-zoom.png" alt="">
                        </div>
                    </section>
                    <section class="unit-block mb-100" id="list-item-77">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Google Meet</h4>
                        <div>
                            <p>Instructor can manage his Google Meet</p>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/googlemeet.png" alt="">
                        </div>
                    </section>

                    <h3 id="list-item-101">Organization Account Activities</h3>
                    <hr>

                    <section class="unit-block mb-100" id="">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Dashboard</h4>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/organization-dashboard.png" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-102">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Manage Instructor</h4>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/organization-instructor.png" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-103">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Manage Student</h4>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/organization-student.png" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-104">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Upload Courses</h4>
                        <div>
                            <li>For upload any course organization need to follow some steps:</li>
                        </div>
                        <div>
                            <li class="font-bold">First steps:</li>
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/scorm-course.png" alt="">
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/28.png" alt="">
                        </div>
                        <div>
                            <li class="font-bold">Second steps (Add category, price, thumbnail image, video etc):</li>
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/29.png" alt="">
                        </div>
                        <div>
                            <p class="font-bold">Course drip content, access period and old price</p>
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/accessperiod.png" alt="">
                        </div>
                        <div>
                            <li class="font-bold">Third steps (Add section and Lessons):</li>
                            <p><span class="font-bold">Note:</span>If organization do not upload any lesson, he/she can't go to next process.</p>
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/84.jpg" alt="">
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/85.jpg" alt="">
                        </div>
                        <div>
                            <p>Organization can upload 8 different types lesson.</p>
                            <li>Upload Direct Video</li>
                            <li>YouTube Video ID</li>
                            <li>Upload Video in Vimeo Server</li>
                            <li>Text</li>
                            <li>Image</li>
                            <li>PDF</li>
                            <li>Slide Document</li>
                            <li>Audio</li>
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/86.jpg" alt="">
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/30.png" alt="">
                        </div>
                        <div>
                            <li class="font-bold">Organization can add multiple instructors:</li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/multi-instructor.png" alt="">
                        </div>
                        <div>
                            <li class="font-bold">Final steps (Submit and review):</li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/31.jpg" alt="">
                        </div>
                    </section>
                    <section class="unit-block mb-100" id="list-item-151">
                        <div>
                            <li class="font-bold">SCORM Course:</li>
                            <p>Organization can iSpring, SCORM all version, xAPI (The Experience API), cmi5 (a companion to xAPI), AICC Course</p>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/scorm-course-file.png" alt="">
                        </div>
                    </section>
                    <section class="unit-block mb-100" id="list-item-105">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> My Courses</h4>
                        <div>
                            <li>After successfully course upload, now organization can edit, delete course and add
                                resources, quiz, assignments, live class, notice, certificate,
                                discussion.
                            </li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/32.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-106">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Courses Resources </h4>
                        <div>
                            <li>Resources add, delete</li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/33.jpg" alt="">
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/34.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-107">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Courses Quiz</h4>
                        <div>
                            <li>Quiz add, view, edit, delete, publish, unpublish</li>
                            <p>Quiz has 2 types</p>
                            <ul>1. Multiple Choice</ul>
                            <ul>2. True-False</ul>
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/35.jpg" alt="">
                        </div>
                        <div>
                            <li class="font-bold">Quiz add first step:</li>
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/36.jpg" alt="">
                        </div>
                        <div>
                            <li class="font-bold">After successfully Quiz add you can see add question option</li>
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/37.jpg" alt="">
                        </div>
                        <div>
                            <li>Add question page you create one by one question & ans Or you can upload bulk upload</li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/38.jpg" alt="">
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/39.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-108">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Courses Assignment </h4>
                        <div>
                            <li>Assignment list and organization can create assignment</li>
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/40.jpg" alt="">
                        </div>
                        <div>
                            <li>Assignment list and organization can create assignment</li>
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/41.jpg" alt="">
                        </div>
                        <div>
                            <li>Organization can give assignment marks</li>
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/42.jpg" alt="">
                        </div>
                        <div>
                            <li>Assignment result</li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/43.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-109">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Followings</h4>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/organization-following.png" alt="">
                        </div>
                    </section>
                    <section class="unit-block mb-100" id="list-item-110">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Followers</h4>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/organization-follower.png" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-111">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Notice Board</h4>
                        <div>
                            <li>Organization can add, edit, delete & view course notice</li>
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/46.jpg" alt="">
                        </div>
                        <div>
                            <li>Notice add form</li>
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/47.jpg" alt="">
                        </div>
                        <div>
                            <li>Course Notice List</li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/48.jpg" alt="">
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/49.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-112">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Live Class </h4>
                        <div>
                            <li>Organization can add, edit, delete & view course live class</li>
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/50.jpg" alt="">
                        </div>
                        <div>
                            <li>Course live class add form</li>
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/51.jpg" alt="">
                        </div>
                        <div>
                            <li>Course live class list</li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/52.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-113">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Certificate</h4>
                        <div>
                            <li>Organization can add, edit, delete & view course certificates</li>
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/53.jpg" alt="">
                        </div>
                        <div>
                            <li>Admin give many template and organization can add certificates from his/her panel and can edit
                            </li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/54.jpg" alt="">
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/55.jpg" alt="">
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/56.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-114">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Discussion </h4>
                        <div>
                            <li>If any student wants to discuss with organization through his enrolled course. Student can
                                comment his enrolled course discussion and organization reply
                                form here
                            </li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/57.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-115">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Finance </h4>
                        <div>
                            <p>Organization can see how mane student enrolled his/her course, total courses, total
                                earning, total available balance, withdraw money, request withdraw
                                amount, can withdraw from here and sales per month sales statistics.</p>
                            <p>Finance has 2 options </p>
                            <li>Analysis</li>
                            <li>Withdraw History</li>
                        </div>
                        <br>
                        <h6>Analysis</h6>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/front/58.jpg" alt="">
                        </div>
                        <h6>Withdraw History</h6>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/59.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-116">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Profile </h4>
                        <div>
                            <p>Organization can update his profile from here</p>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/60.png" alt="">
                        </div>
                    </section>
                    <section class="unit-block mb-100" id="list-item-117">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Geolocation Search</h4>
                        <div>
                            <p>Organization can update his geolocation</p>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/geolocationset.png" alt="">
                        </div>
                    </section>
                    <section class="unit-block mb-100" id="list-item-118">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Saas Module</h4>
                        <div>
                            <p>Organization can purchase Saas plan</p>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/saas-panel.png" alt="">
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/saas-plan.png" alt="">
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/saas-plan-details.png" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-119">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Payment Settings</h4>
                        <div>
                            <p>Organization can withdraw his income by his/her account. His/her account info add, update form here.</p>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/61.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-120">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Bundle Offer</h4>
                        <div>
                            <p>Organization can create, edit, delete bundle from his/her courses. and your created bundle course you can change active/disable. Some create bundle and
                                course add/remove images given here.</p>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/74.jpg" alt="">
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/75.jpg" alt="">
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/76.jpg" alt="">
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/77.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-121">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Consultation</h4>
                        <div>
                            <p>In consultation organization see 3 options. Options are: </p>
                            <li>Dashboard</li>
                            <li>Booking Request</li>
                            <li>Booking History</li>
                        </div>
                        <br>
                        <p>In dashboard organization set available status for consultation, set available type, set hourly rate, set which day his/her off day/on day, set every day
                            time slot. </p>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/78.jpg" alt="">
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/79.jpg" alt="">
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/80.jpg" alt="">
                        </div>
                        <br>
                        <br>
                        <p>In Booking Request organization can can approve and cancel consultation request.</p>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/81.jpg" alt="">
                        </div>
                        <br>
                        <br>
                        <p>In Booking History organization can can see consultation approved, completed and cancel request history.</p>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/82.jpg" alt="">
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/83.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-122">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Zoom Setting</h4>
                        <div>
                            <p>Organization can manage his Google Meet</p>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/organization-zoom.png" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-123">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Google Meet</h4>
                        <div>
                            <p>Organization can manage his Google Meet</p>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/front/googlemeet.png" alt="">
                        </div>
                    </section>

                    <h3>Admin Account Activities</h3>
                    <hr>
                    <section class="unit-block mb-100" id="list-item-28">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Admin Dashboard
                        </h4>
                        <div>
                            <p>Admin can see all the key points/information from the dashboard. And also from the
                                dashboard admin can see all the graph and chart information. </p>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/admin/1.png" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-29">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Manage Course
                        </h4>
                        <p>Admin can manage all activity for course management from here.</p>
                        <br>
                        <div>
                            <span class="font-bold">Review Pending:</span>
                            <li>When an instructor uploads any course it will come here for admin approval.
                            </li>
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/admin/2.jpg" alt="">
                        </div>
                        <div>
                            <span class="font-bold">Approved:</span>
                            <li>All approved courses from the admin will be listed here.
                            </li>
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/admin/3.jpg" alt="">
                        </div>
                        <span class="font-bold">All Courses:</span>
                        <div class="sitemap-img">
                            <img src="assets/documentation/lmszai/admin/4.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-30">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Course Reference
                        </h4>
                        <div>
                            <p>For course upload purpose admin can create all the course related important field from
                                here.</p><br>
                            <span>Course reference has many functions. Given here- </span>
                            <div>
                                <li>Categories (Create, edit, delete)</li>
                                <li>Sub Categories (Create, edit, delete)</li>
                                <li>Tags (Create, edit, delete)</li>
                                <li>Language (Create, edit, delete)</li>
                                <li>Difficulty Levels (Create, edit, delete)</li>
                                <li>Promotional Tags (Create, edit, delete)</li>
                                <li>Rules & Benefits (Create, edit, delete)</li>
                                <br>
                            </div>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/admin/5.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-31">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Manage
                            Instructor</h4>
                        <div>
                            <p>Admin can manage all the instuctors (Pending application to approved, instructor details,
                                delete)</p><br>
                            <span>Manage Instrutor has many functions. Given here</span>
                            <div>
                                <li>Pending Instructors</li>
                                <li>Approved Instructor</li>
                                <li>All Instructors</li>
                            </div>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/admin/6.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-32">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Manage Coupon
                        </h4>
                        <div>
                            <p>Admin can create 3 types coupon </p><br>
                            <li>Global (Apply for all courses)</li>
                            <li>Instructror (Apply for selected instructor courses)</li>
                            <li>Course (Apply for selected courses</li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/admin/7.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-33">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Manage Promotion
                        </h4>
                        <div>
                            <li>Admin can add any kind of promotion with a discount. And he can manage it. He can select
                                any course to this specific promotion.
                            </li>
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/admin/8.jpg" alt="">
                        </div>
                        <div>
                            <li>Course add/remove for different promotion.</li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/admin/9.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-34">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Manage Blog</h4>
                        <div>
                            <p>Blog has many functions. Given here- </p><br>
                            <li>All Blog (List, create, update, delete)</li>
                            <li>Blog Comment List (Student comment can status change (active, deactivated))</li>
                            <li>Blog Category (List, Create, Update, delete)</li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/admin/10.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-35">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Manage Finance
                        </h4>
                        <div>
                            <p>Manage Payout has many functions. Given here- </p><br>
                            <li>Revenue List</li>
                            <li>Request withdrawal (From instructor). Instructor request withdraw for his profit, admin
                                can approve or reject.
                            </li>
                            <li>Complete Withdrawal</li>
                            <li>Rejected Withdrawal</li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/admin/11.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-355">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Financial Report
                        </h4>
                        <div>
                            <p>Finance report has 5 functions. Given here- </p><br>
                            <li>Revenue Report</li>
                            <li>Order Report</li>
                            <li>Order Pending</li>
                            <li>Order Cancelled</li>
                            <li>Consultation Cancel</li>
                        </div>
                        <br>
                        <div>
                            <span class="font-bold">Revenue Report</span>
                            <li>Here you can see your lifetime revenue report with 3 types. <b>Course report</b>, <b>bundle report</b> and <b>consultation revenue report</b>.</li>
                        </div>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/admin/26.jpg" alt="">
                        </div>
                        <div>
                            <span class="font-bold">Order Report</span>
                            <li>Here you can see your lifetime order report</li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/admin/32.jpg" alt="">
                        </div>
                        <br>
                        <div>
                            <span class="font-bold">Consultation Cancelled</span>
                            <li>Here you can see your all consultation cancel order. Cancel order payment back to customer from this section. Admin manually back money and status
                                change from this section.
                            </li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/admin/31.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-36">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Certificate</h4>
                        <p>Admin dynamically can create, update delete sample template for course certificate and
                            instructor can add from instructor panel.</p>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/admin/12.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-37">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Ranking</h4>
                        <p>Admin can create ranking for instructors and define specific criteria for defining the
                            ranking . For example: Level 1, Level 2, Level 3. If any
                            instructor achieves level 1 and then upgrades to level 2. </p>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/admin/13.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-38">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Manage Language
                        </h4>
                        <p>Admin can create, update, delete any language from here</p>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/admin/14.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-39">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Account Settings
                        </h4>
                        <p>Admin can update his profile, change password</p>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/admin/15.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-40">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Support Ticket
                        </h4>

                        <p>If any user needs any help/support form the admin or administration he can create a ticket
                            from support in the front end. And the admin will get all this
                            ticket here. He will manage, answer, delete it from here.</p>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/admin/16.jpg" alt="">
                        </div>
                        <div>
                            <li> Admin reply to user from here</li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/admin/17.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-41">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> User Management
                        </h4>

                        <p>Admin can see admin list</p>
                        <div class="sitemap-img my-5">
                            <img src="assets/documentation/lmszai/admin/18.jpg" alt="">
                        </div>
                        <div>
                            <li> Admin can create any role from here and give access admin user</li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/admin/19.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-42">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Email</h4>
                        <p>Admin can create email template ad send email instructor and student.</p>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/admin/20.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-43">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Manage page</h4>
                        <p>Admin can create dynamic pages and show front pages</p>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/admin/21.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-44">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Manage menu</h4>
                        <p>Admin can create, update, delete dynamic menu, static menu rename and show front pages</p>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/admin/22.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-45">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Application
                            Settings</h4>
                        <p>Admin can manage LMSZAI platform form here. You can see all the changes</p>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/admin/23.jpg" alt="">
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/admin/24.jpg" alt="">
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/admin/33.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-70">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Device Control</h4>
                        <p>Admin can control student login device</p>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/admin/device-control.png" alt="">
                    </section>
                    <section class="unit-block mb-100" id="list-item-73">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Private Mode</h4>
                        <p>Admin can manage website mode</p>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/admin/private-mode.png" alt="">
                    </section>
                    <section class="unit-block mb-100" id="list-item-76">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Google Meet</h4>
                        <p>Admin can manage google meet. You need to give the google oAuth Credentials here. To generate the key you can follow the link <a class="btn btn-info" target="_blank" href="https://developers.google.com/calendar/api/quickstart/js">Link</a></p>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/admin/gmeet.png" alt="">
                    </section>
                    <section class="unit-block mb-100" id="list-item-501">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Geo-Location </h4>
                        <p>Admin can manage geo-location map. Admin need to setup the credentials here. You can collect the credentials from the link or official website of <a class="btn btn-info" target="_blank" href="https://www.mapbox.com">Link</a></p>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/admin/map_api_setting.png" alt="">
                    </section>

                    <section class="unit-block mb-100" id="list-item-455">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Policy Settings
                        </h4>
                        <p>Admin can manage privacy policy and cookie policy</p>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/admin/28.jpg" alt="">
                        </div>
                    </section>

                    <section class="unit-block mb-100" id="list-item-46">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Contact Us</h4>
                        <p>If any user wants to contact with admin. User send email from frontend contact us page. admin
                            can see from here</p>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/admin/25.jpg" alt="">
                        </div>
                    </section>
                    <section class="unit-block mb-100" id="list-item-55">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> How to change
                            language?</h4>
                        <p>If admin wants to change application default language. Admin can change from here.</p>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/admin/29.jpg" alt="">
                        </div>
                    </section>
                    <section class="unit-block mb-100" id="list-item-56">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> How to change
                            currency?</h4>
                        <p>If admin wants to change application default currency. Admin can change from here.</p>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/admin/30.jpg" alt="">
                        </div>
                    </section>
                    <section class="unit-block mb-100" id="list-item-66">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> How to change
                            color and font?</h4>
                        <p>If admin wants to change application default color and font. Admin can change from here.</p>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/admin/34.jpg" alt="">
                        </div>

                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/admin/35.jpg" alt="">
                        </div>
                    </section>
                    <h3>Manage Affiliate </h3>
                    <p class="font-bold">Admin Panel Affiliate</p>
                    <hr>
                    <section class="unit-block mb-100" id="list-item-67">
                        <p><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Admin can start affiliate. If Admin allow affiliate, admin can set affiliator percentage
                            any user can affiliate courses and user get percentage. Admin
                            can set up from admin panel. Location given here.</p>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/admin/36.jpg" alt="">
                        </div>
                        <br>
                        <p><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Admin can see the all affiliator list & when any user applies to become an affilator, admin
                            can see all the list. And admin can change apply request
                            status <b>pending</b>, <b>suspend</b> and <b>approved</b> . Location given here.</p>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/admin/37.jpg" alt="">
                        </div>
                    </section>
                    <h3>Manage Affiliate </h3>
                    <p class="font-bold">User Panel Affiliate</p>
                    <hr>
                    <section class="unit-block mb-100" id="list-item-68">
                        <p><span class="iconify me-2" data-icon="fa:hand-o-right"></span>At first any user need apply to become an affiliator. After affilaitor request approve.
                            then an affiliator earn from any course using referral URL. Location given here.</p>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/admin/38.jpg" alt="">
                        </div>
                        <br>
                        <p><span class="iconify me-2" data-icon="fa:hand-o-right"></span> When user click <b>Become an Affiliator</b> . Then user can see this form. and fill up the
                            form and apply button. Picture given here </p>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/admin/2.png" alt="">
                        </div>
                        <br>
                        <p><span class="iconify me-2" data-icon="fa:hand-o-right"></span>After applying, then admin can see in admin panel pending affiliator list. After admin
                            approve user affiliator request. User can see affilator panel for any affiliator</p>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/admin/39.jpg" alt="">
                        </div>
                        <br>
                        <p><span class="iconify me-2" data-icon="fa:hand-o-right"></span>User can withdraw his/her balance using 2 payment method and see the withdrawal request and
                            history my wallet dashboard</p>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/admin/40.jpg" alt="">
                        </div>
                        <br>
                        <p><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Affiliator can share his/her course affiliator url from course details. Every course has
                            different affiliator url. Location image given here. After browse this url, who is purchase this course. Automatically add money in affiliator wallet.
                        </p>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/admin/41.jpg" alt="">
                        </div>
                    </section>
                    <h3>Installable </h3>
                    <p class="font-bold">Instructor Panel & Organization Panel</p>
                    <hr>
                    <section class="unit-block mb-100" id="list-item-47">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Zoom Live Class
                        </h4>
                        <p>In LMSZAI, you can add <span class="font-bold">Zoom Live Class</span> to enhance different
                            features after configuring this, the
                            Instructors/Organizations can take live video classes on the zoom live-streaming service. </p><br>
                        <p class="fw-bolder">Every Instructor/Organization need to add different zoom credentials.</p><br>
                        <p>To enhance this feature, you have to set many field
                            on your application. Now, you have
                            to follow the easy steps to set up zoom:</p>
                        <div>
                            <li>Login to the Instructor/Organization Panel</li>
                            <li>From <span class="font-bold">instructor/Organization panel sidebar</span> you need to select <span
                                    class="font-bold">Zoom Settings</span>
                            </li>
                            <li>For zoom integration instructor need to set up credentials of Zoom</li>
                            <li>Provide the <span class="font-bold">Zoom API Key, Zoom API Secret, status etc .</span>
                            </li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/instructor/zoom.jpg" alt="">
                        </div>
                    </section>
                    <h3>Installable </h3>
                    <p class="font-bold">Admin Panel</p>
                    <hr>
                    <section class="unit-block mb-100" id="list-item-503">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Google Meet
                        </h4>
                        <p>In LMSZAI, you can add <span class="font-bold">Google Meet</span> to enhance different
                            features after configuring this, the
                            Instructors/Organizations can take live video classes on the google Meet live-streaming service. </p><br>
                        <p class="fw-bolder">Admin need to add the google calender oAuth credentials </p><br>
                        <p>To enhance this feature, you have to set many field
                            on your application. Now, you have
                            to follow the easy steps to set up google Meet:</p>
                        <div>
                            <li>Login to the admin Panel</li>
                            <li>From <span class="font-bold">admin panel sidebar</span> you need to select <span
                                    class="font-bold">Application Settings->Global Settings->Google Meet Setting</span>
                            </li>
                            <li>For Google Meet integration instructor need to set up credentials of Google Meet</li>
                            <li>Provide the <span class="font-bold"> Google Calender oAuth client ID & Client Secret</span>
                            </li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/admin/gmeet.png" alt="">
                        </div>
                    </section>
                    <h3>Installable </h3>
                    <p class="font-bold">Instructor Panel & Organization Panel</p>
                    <hr>
                    <section class="unit-block mb-100" id="list-item-505">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Google Meet
                        </h4>
                        <p>In LMSZAI, you can add <span class="font-bold">Google Meet</span> to enhance different
                            features after configuring this, the
                            Instructors/Organizations can take live video classes on the google Meet live-streaming service. </p><br>
                        <p class="fw-bolder">Every Instructor/Organization need to add different google Meet credentials.</p><br>
                        <p>To enhance this feature, you have to set many field
                            on your application. Now, you have
                            to follow the easy steps to set up google Meet:</p>
                        <div>
                            <li>Login to the Instructor/Organization Panel</li>
                            <li>From <span class="font-bold">instructor/Organization panel sidebar</span> you need to select <span
                                    class="font-bold">Gmeet Settings</span>
                            </li>
                            <li>For Google Meet integration instructor need to set up credentials of Google Meet</li>
                            <li>Provide the <span class="font-bold"> Calender ID/ Gmail id which you need to authorize, Time-zone</span>
                            </li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/admin/map_api_setting.png" alt="">
                        </div>
                    </section>
                    <h3>Installable </h3>
                    <p class="font-bold">Admin Panel</p>
                    <hr>
                    <section class="unit-block mb-100" id="list-item-59">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> BigBlueButton
                            Live Class</h4>
                        <p>In LMSZAI, you can add <span class="font-bold">BigBlueButton Live Class</span> to enhance
                            different features after configuring this, the
                            Instructors can take live video classes on the BigBlueButton live-streaming service. </p>
                        <br>
                        <p>To enhance this feature, you have to set <span class="font-bold">BBB Status, BBB SECURITY SALT, BBB SERVER BASE URL</span>
                            on your application. Now, you
                            have
                            to follow the easy steps to setup BigBlueButton:</p>
                        <div>
                            <li>Login to the Admin Panel</li>
                            <li>From <span class="font-bold">admin panel sidebar</span> you need to select <span
                                    class="font-bold">Application Settings->Global Settings->BigBlueButton Meeting Settings</span>
                            </li>
                            <li>For BigBlueButton integration admin need to set up credentials of BigBlueButton</li>
                            <li>Provide the <span
                                    class="font-bold">BBB Status, BBB SECURITY SALT, BBB SERVER BASE URL.</span></li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/addons/8.jpg" alt="">
                        </div>
                    </section>
                    <h3>Installable </h3>
                    <p class="font-bold">Admin Panel</p>
                    <hr>
                    <section class="unit-block mb-100" id="list-item-504">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Geo-location</h4>
                        <p>In LMSZAI, you can add <span class="font-bold">Geo-location</span> in every user to filter the data in instructors page.</p>
                        <br>
                        <p>To enhance this feature, you have to set <span class="font-bold">the geolocalize mapbox api from admin</p>
                        <div>
                            <li>Login to the Admin Panel</li>
                            <li>From <span class="font-bold">admin panel sidebar</span> you need to select <span
                                    class="font-bold">Application Settings->Global Settings-> Geo Location Api Key</span>
                            </li>
                            <li>Provide the <span
                                    class="font-bold">MapBox api key here</span></li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/addons/8.jpg" alt="">
                        </div>
                    </section>
                    <section class="unit-block mb-100" id="list-item-60">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Jitsi Live Class
                        </h4>
                        <p>In LMSZAI, you can add <span class="font-bold">Jitsi Live Class</span> to enhance different
                            features after configuring this, the
                            Instructors can take live video classes on the Jitsi live-streaming service. </p><br>
                        <p>To enhance this feature, you have to set <span class="font-bold">Jitsi Status, Jitsi Server Base URL</span>
                            on your application. Now, you have
                            to follow the easy steps to setup Jitsi:</p>
                        <div>
                            <li>Login to the Admin Panel</li>
                            <li>From <span class="font-bold">admin panel sidebar</span> you need to select <span
                                    class="font-bold">Application Settings->Global Settings->Jitsi Meeting Settings</span>
                            </li>
                            <li>For BigBlueButton integration admin need to set up credentials of Jitsi</li>
                            <li>Provide the <span
                                    class="font-bold">BBB Status, BBB SECURITY SALT, BBB SERVER BASE URL.</span></li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/addons/9.jpg" alt="">
                        </div>
                    </section>
                    <section class="unit-block mb-100" id="list-item-48">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Social Login
                        </h4>
                        <p>In LMSZAI, you can add <span
                                class="font-bold">social login (google, facebook, twitter)</span> to enhance different
                            features after configuring this, Any
                            user can login with social login. </p><br>
                        <p>To enhance this feature, you have to set some credentials on your application. Admin can
                            active/deactivated option for social login. Now, you have
                            to follow the easy steps to setup social login:</p>
                        <div>
                            <li>Login to the Admin Panel</li>
                            <li>From <span class="font-bold">admin panel sidebar</span> you need to select <span
                                    class="font-bold">Application Settings->Global Settings->Social Login Settings</span>
                            </li>
                            <li>For social login admin need to set up credentials of google, twitter, facebook</li>
                            <li>Example given here</li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/addons/2.jpg" alt="">
                        </div>
                    </section>
                    <section class="unit-block mb-100" id="list-item-49">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> S3 Storage Setting (AWS, Wasabi, Vultr)
                        </h4>
                        <p>In LMSZAI, you can add <span class="font-bold">s3 server </span> to enhance different
                            features after configuring this. This only work for video
                            and file upload. If you want to video and file upload in s3 server. You need to add
                            credentials</p><br>
                        <p>To enhance this feature, you have to set some credentials on your application. Admin can
                            <b>activate/deactivated</b> option for <b>AWS S3/Wasabi S3/Vultr S3</b>. If you deactivate,
                            please select <span class="font-bold">Video Storage Driver = public</span>. Now, you have
                            to follow the easy steps to set up :</p>
                        <div>
                            <li>Login to the Admin Panel</li>
                            <li>From <span class="font-bold">admin panel sidebar</span> you need to select <span
                                    class="font-bold">Application Settings->Global Settings->S3 Storage Settings</span>
                            </li>
                            <li>For aws setup admin need to set up credentials.
                            </li>
                            <li>Example given here</li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/addons/3.jpg" alt="">
                        </div>
                    </section>
                    <section class="unit-block mb-100" id="list-item-50">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Vimeo Settings
                        </h4>
                        <p>In LMSZAI, you can add <span class="font-bold">vimeo server </span> to enhance different
                            features after configuring this. This only work for video. If
                            you want to video upload in vimeo server. You need to add credentials</p><br>
                        <p>To enhance this feature, you have to set some credentials on your application. Admin can
                            activate/deactivated option for vimeo. if you deactivate, please
                            select <span class="font-bold">Vimeo Status = Deactivated</span> Now, you have
                            to follow the easy steps to set up :</p>
                        <div>
                            <li>Login to the Admin Panel</li>
                            <li>From <span class="font-bold">admin panel sidebar</span> you need to select <span
                                    class="font-bold">Application Settings->Global Settings->Vimeo Settings</span>
                            </li>
                            <li>For vimeo setup admin need to set up credentials of Vimeo Client ID, Vimeo Secret, Vimeo
                                Token Access, Vimeo Status
                            </li>
                            <li>Example given here</li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/addons/4.jpg" alt="">
                        </div>
                    </section>
                    <section class="unit-block mb-100" id="list-item-51">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Payment Gateway
                        </h4>
                        <p>In LMSZAI, you can add <span class="font-bold">payment gateway  </span> to enhance different
                            features after configuring this. After purchase any course ,
                            student need to payment for paid courses. You need to add credentials for different payment
                            gateway, like <span class="font-bold">Paypal, Stripe, Razorpay, SSLCOMMERZ, Mollie, Instamojo, Paystack</span>
                        </p><br>
                        <p>To enhance this feature, you have to set some credentials on your application. Admin can
                            activate/deactivated option for any type of payment gateway.
                            Now, you have
                            to follow the easy steps to set up :</p>
                        <div>
                            <li>Login to the Admin Panel</li>
                            <li>From <span class="font-bold">admin panel sidebar</span> you need to select <span
                                    class="font-bold">Application Settings->Payment Options->Payment Method</span>
                            </li>
                            <li>Example given here</li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/addons/5.jpg" alt="">
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/addons/7.jpg" alt="">
                        </div>
                    </section>
                    <section class="unit-block mb-100" id="list-item-62">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span> Bank Payment
                            Gateway</h4>
                        <p>In LMSZAI, you can add <span class="font-bold">payment gateway  </span> to enhance different
                            features after configuring this. After purchase any course ,
                            student need to payment for paid courses. You need to add credentials for different payment
                            gateway, like <span class="font-bold">Paypal, Stripe, Razorpay, SSLCOMMERZ, Instamojo, Mollie, Paystack</span>
                        </p><br>
                        <p>We also add bank payment method. Admin can add multiple bank information and user can
                            purchase through those added banks.</p>
                        <p>To enhance this feature, you have to set some credentials on your application. Admin can
                            activate/deactivated option for any type of payment gateway.
                            Now, you have
                            to follow the easy steps to set up :</p>
                        <div>
                            <li>Login to the Admin Panel</li>
                            <li>From <span class="font-bold">admin panel sidebar</span> you need to select <span
                                    class="font-bold">Application Settings->Payment Options->Bank</span>
                            </li>
                            <li>Example given here</li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/addons/10.jpg" alt="">
                        </div>
                    </section>
                    <section class="unit-block mb-100" id="list-item-52">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Mail
                            Configuration</h4>
                        <p>In LMSZAI, you can add <span class="font-bold">mail configuration  </span> to enhance
                            different features after configuring this. Many times need to mail
                            student or instructor.</span>
                        </p><br>
                        <p>To enhance this feature, you have to set some credentials on your application. Now, you have
                            to follow the easy steps to set up :</p>
                        <div>
                            <li>Login to the Admin Panel</li>
                            <li>From <span class="font-bold">admin panel sidebar</span> you need to select <span
                                    class="font-bold">Application Settings->Mail Configuration->Mail Configuration</span>
                            </li>
                            <li>Example given here</li>
                        </div>
                        <div class="sitemap-img mt-5">
                            <img src="assets/documentation/lmszai/addons/6.jpg" alt="">
                        </div>
                    </section>
                    <h6>FAQ</h6>
                    <hr>
                    <section class="unit-block mb-100" id="list-item-53">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>FAQ</h4>
                        <div>
                            <li class="font-bold">In which technology do you use to develop the LMSZAI?</li>
                            <br>
                            <p>For the LMSZAI development we used HTML, CSS, Bootstrap, Jquery for the front end & back
                                end developed in Laravel (PHP), And for the database we use
                                Mysql. </p>
                            <br>
                            <li class="font-bold">Is this LMSZAI Script Plag & Play?</li>
                            <br>
                            <p>Yes, its completely ready to use. Just instal it to your server and start to use it.</p>
                            <br>
                            <li class="font-bold">Can I customize any code or feature?</li>
                            <br>
                            <p>Yes sure, if you are developer or if you have developer you can customize our code and
                                any kinds of feature.</p>
                            <br>
                            <li class="font-bold">Do you offer installtion support?
                            </li>
                            <br>
                            <p>Yes, we offer paid installation support.</p>
                            <br>
                            <li class="font-bold">If I face any bug or error, can I get help from you?</li>
                            <br>
                            <p>Yes, 100%. If you face any bug or error (Mistake from our side) we will fix this update
                                this without any cost.
                            </p>
                            <br>
                            <li class="font-bold"> Do I get lifetime free update once we will buy it?</li>
                            <br>
                            <p>Yes, 100%. You will get lifetime free update.
                            </p>
                            <br>
                            <li class="font-bold"> Do I get lifetime free support once we will buy it?</li>
                            <br>
                            <p> Unfortunately! No. You don't offer any free support.
                            </p>
                            <br>
                            <li class="font-bold"> Can I run the product on shared hosting?</li>
                            <br>
                            <p> Yes, there are no limitations with shared hosting plans.
                            </p>
                            <br>
                            <li class="font-bold"> Can I use YouTube and Vimeo as video storage?</li>
                            <br>
                            <p> Yes. You can use them as free and safe video storage.</p>
                            <br>
                            <li class="font-bold"> Does the product support RTL languages?</li>
                            <br>
                            <p> Yes, the product supports the RTL direction perfectly in the front end.
                            </p>
                        </div>
                    </section>
                    <h6>Others</h6>
                    <hr>
                    <section class="unit-block mb-100" id="list-item-57">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Developer
                            Guideline</h4>
                        <p>If any developer wants to run the project his/her development platform. They can follow the
                            instructions</p><br>

                        <p>At first, create your database. Then open <span class="font-bold">.env</span> from project
                            folder, and write <span class="font-bold">database name, database host name, database password</span>.
                            After then open your project terminal and run the below command</p>
                        <div>
                            <ol>
                                <li>composer install</li>
                                <li>php artisan key:generate</li>
                                <li>php artisan serve</li>

                            </ol>
                        </div>
                        <p>Now open your browser and browse (<a href="http://localhost:8000" target="_blank"
                                                                style="color: blue">http://localhost:8000</a>)</p>
                        <p>After then you can see the installation page. Complete the installation wizard as directed.
                            After successfully install process, then you can see project
                            home page.</p>
                    </section>
                    <section class="unit-block mb-100" id="list-item-61">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Change Log
                            (version 1.1)</h4>
                        <div>
                            <li>Add 4 payment gateway.</li>
                            <ol>
                                <li>Mollie</li>
                                <li>Instamojo</li>
                                <li>Paystack</li>
                                <li>Bank Payment</li>
                            </ol>
                            <li>Integrate new meeting software.</li>
                            <ol>
                                <li>BligBlueButton</li>
                                <li>Jitsi</li>
                            </ol>
                            <li>Summernote add for text field.</li>
                            <li>Preloader change option add.</li>
                            <li>Email verification on/off option add.</li>
                            <li>Some minor issues fixed.</li>
                        </div>

                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Change Log
                            (version 1.2)</h4>
                        <div>
                            <li>Maintenance mode settings On/Live option in admin panel.</li>
                        </div>
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Change Log
                            (version 1.3)</h4>
                        <div>
                            <li>Image/Video upload update.</li>
                            <li>Cache settings in admin panel.</li>
                            <li>Migrate settings in admin panel.</li>
                        </div>
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Change Log
                            (version 1.4)</h4>
                        <div>
                            <li>Instructor edit, update, delete, onclick change status option add in admin panel.</li>
                            <li>Student view, edit, update, delete, onclick change status option add in admin panel.</li>
                            <li>SSLcommerz payment gateway issue fixed.</li>
                            <li>Any status hide issue fixed.</li>
                            <li>Preloader, logo, fav icon, signup svg image support accepted.</li>
                            <li>Course delete issue fixed</li>
                            <li>Instructor profile select country, state, city issues fixed</li>
                        </div>
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Change Log (version 1.5)</h4>
                        <div>
                            <b>New Feature</b>
                            <li>Course Bundle Offer.</li>
                            <li>Instructor Consultation.</li>
                            <li>Language Change Settings Every Possible Static & Dynamic Content.</li>
                            <li>Course Forum.</li>
                            <li>Theme Color & Font Manage Setting.</li>
                            <li>Home Page Section Manage Settings</li>
                            <li>Course Material Lesson Upload Option ( text + image + pdf + slide + audio).</li>
                            <li>New Video Frame</li>
                            <br>
                            <b>Issues</b>
                            <li>Course delete issue fixed.</li>
                            <li>SSLCommerz payment gateway issue fixed.</li>
                            <li>Zoom Setting update and issue fixed.</li>
                        </div>
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Change Log (version 2.0)</h4>
                        <div>
                            <b>New Feature</b>
                            <li>Affiliate.</li>
                            <li>My wallet.</li>
                            <li>Add Wasabi S3, Vultr S3 Storage</li>
                            <li>Some minor issus fixed</li>
                        </div>
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Change Log (version 2.1)</h4>
                        <div>
                            <b>Issue Fixed</b>
                            <li>Payment gateway issue fixed.</li>
                            <li>Some security issue fixed.</li>
                        </div>
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Change Log (version 2.2)</h4>
                        <div>
                            <b>Issue Update and Fixed</b>
                            <li>Payment gateway security update.</li>
                            <li>Language issue fixed.</li>
                            <li>Image upload issue fixed.</li>
                        </div>
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Change Log (version 2.3)</h4>
                        <div>
                            <li>Installer issue fixed.</li>
                            <li>Security patch update.</li>
                            <li>Language issue fixed.</li>
                        </div>
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Change Log (version 2.3.1)</h4>
                        <div>
                            <li>Report issue fixed.</li>
                            <li>Security update.</li>
                        </div>
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Change Log (version 3.0)</h4>
                        <div>
                            <li>Multi Instructor. </li>
                            <li>SCORM Course. </li>
                            <li>Organization Course.</li>
                            <li>Subscription Module. (For Student).</li>
                            <li>Sass Module. (For Instructor & Organization).</li>
                            <li>Drip Content.</li>
                            <li>Course Access Period. </li>
                            <li>Device Control.</li>
                            <li>Certificate Validation. </li>
                            <li>Geolocation Search.</li>
                            <li>Private Mood.</li>
                            <li>Email & Phone Log in.</li>
                            <li>Bank/Manual Payout For Instructor & Affiliate. </li>
                            <li>Google Meet.</li>
                            <li>Reword Badge For Instructor & Organization.</li>
                            <li>Follow/Unfollow For Instructor & Organization.</li>
                        </div>
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Change Log (version 3.1)</h4>
                        <div>
                            <li>Minor issue fixed.</li>
                            <li>Security and patch update.</li>
                        </div>
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Change Log (version 3.1.1)</h4>
                        <div>
                            <li>Minor issue fixed.</li>
                            <li>Security and patch update.</li>
                        </div>
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Change Log (version 3.2)</h4>
                        <div>
                            <li>Payout beneficiary added</li>
                            <li>Manual Payout option added</li>
                            <li>New Marcado Pago payment gateway added</li>
                            <li>New Flutterwave payment gateway added</li>
                            <li>Optimize query and issue fix.</li>
                            <li>Language issue fix.</li>
                            <li>Security and patch update.</li>
                        </div>
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Change Log (version 3.2.1)</h4>
                        <div>
                            <li>Minor issue fixed.</li>
                            <li>Security and patch update.</li>
                        </div>
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Change Log (version 3.2.2)</h4>
                        <div>
                            <li>Bug fixed.</li>
                            <li>Security update.</li>
                            <li>Certificate language support added.</li>
                            <li>Footer dynamic option added.</li>
                            <li>PWA features added.</li>
                        </div>
                    </section>
                    <section class="unit-block mb-100" id="list-item-58">
                        <h4 class="my-2"><span class="iconify me-2" data-icon="fa:hand-o-right"></span>Release Log</h4>
                        <div>
                            <li>LMSZai Version 1.0 (July 2022)</li>
                            <li>LMSZai Version 1.1 (July 2022)</li>
                            <li>LMSZai Version 1.2 (July 2022)</li>
                            <li>LMSZai Version 1.3 (July 2022)</li>
                            <li>LMSZai Version 1.4 (August 2022)</li>
                            <li>LMSZai Version 1.5 (September 2022)</li>
                            <li>LMSZai Version 2 (October 2022)</li>
                            <li>LMSZai Version 2.1 (October 2022)</li>
                            <li>LMSZai Version 2.2 (October 2022)</li>
                            <li>LMSZai Version 2.3 (November 2022)</li>
                            <li>LMSZai Version 2.3.1 (November 2022)</li>
                            <li>LMSZai Version 3.0 (December 2022)</li>
                            <li>LMSZai Version 3.1 (December 2022)</li>
                            <li>LMSZai Version 3.1.1 (December 2022)</li>
                            <li>LMSZai Version 3.2 (December 2022)</li>
                            <li>LMSZai Version 3.2.1 (January 2023)</li>
                            <li>LMSZai Version 3.2.2 (January 2023)</li>
                        </div>
                    </section>


                </div>

                <!-- Footer Start -->
                <footer class="footer-area">
                    <div class="row">
                        <div class="col-12">
                            <div class="copyright-text text-center">
                                <p class="text-black-800">2022-2023 © All rights reserved. <a href="index.html">LMSZAI</a>
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
