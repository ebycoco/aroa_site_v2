<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('public/css/flag-icons.css') }}">
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

        /* .dropdownhome li:hover {
            background: #002060 !important;
        } */

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
/*
        .dropdownhome li:hover {
            background: #002060 !important;
        } */

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

        /* .dropdownhome li:hover {
            background: #002060 !important;
        } */

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

.menu-area >ul{
    display: flex;
     margin-left: -25%;
}
</style>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            var language = window.navigator.language || window.navigator.userLanguage;
            new google.translate.TranslateElement({
                pageLanguage: language,
                includedLanguages: 'en,fr,de,es,it,pt,ru,ja,ko,zh-CN,zh-TW',
            }, 'google_translate_element');
            }
    </script>

<div class="menu-area">
    <ul>
        <li class="mr-2">
            <a href="{{ route('apropos') }}" style="text-decoration: none">{{ __('traduction.A propos') }}</a>
        </li>
        <li><i class="fas fa-globe-africa"></i>
            <ul class="dropdownhome">
                @foreach (Config::get('languages') as $lang => $language)
                    @if ($lang != App::getLocale())
                        <li><a href="{{ route('lang.switch', $lang) }}" ><span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span> {{ __('traduction.'.$language['display']) }}</a></li>
                        <li><div id="google_translate_element"></div></li>
                    @endif
                @endforeach
            </ul>
        </li>

    </ul>
</div>

