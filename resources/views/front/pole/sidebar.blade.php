<style>
    .poleactive {
        background: #002060;
    }

    .navbar .dropdown-menu {
        min-width: 0 !important;
        border-radius: 50%;
        width: 100%;
    }

    .navbar .dropdown-menu li:hover {
        background: rgba(3, 169, 245, 0.5);
    }

    .navbar .dropdown-menu li {
        margin: auto;
        width: 75%;
        border-radius: 50%;
    }

    .navbar .dropdown-menu ul {
        align-items: center;
        justify-content: center;
    }




    /* ============ desktop view ============ */
    @media all {
        .navbar .nav-item .dropdown-menu {
            display: block;
        }

        .navbar .nav-item:hover .nav-link {}

        .navbar .nav-item:hover .dropdown-menu {
            display: block;
        }

        .navbar .nav-item .dropdown-menu {
            margin-top: 0;
        }

        .collapse:not() {
            display: block;
        }
    }

    /* ============ desktop view .end// ============ */
    body,
    html {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        width: 100%;
        height: 100%;
    }




    @media (max-width: 575.98px) {
        #sidebar {
            margin-left: -523px;
        }

        .wrappers {
            /* overflow: hidden; */
            height: 100%;
            /* transition: 0.6 all ease-in-out; */
            /* display: flex; */
            /* background: no-repeat 100% url('{{ asset('assets/new/ressources/fontit2.jpg') }}'); */
        }

        .img-menu {
            position: relative;
            margin-top: 0;
            margin-left: -23px;
            /* display: flex; */
            width: 225px;
            height: 84vh;
            left: 0%;
            /* transition: 0.6 all ease-in; */
            /* right: -8%; */
            /* background: linear-gradient(0.25turn, #3f87a6, #ebf8e1, #f69d3c); */
            /* /* margin-top: -50px; */
        }

        .img-menu a p {
            width: 50px;
            height: 50px;
        }

        .img-menu img {
            width: 60px;
            height: 60px;
        }

        .email-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .social-icons {
            /* position: absolute; */
            margin: auto;
            top: 50%;
            left: 50%;
            height: 100%;
            width: 280px;
            /* transform: translate(-50%, -50%); */
            animation: rotation 30s linear infinite;
            animation-direction: alternate-reverse;
            background: none;

        }

        .social-icons:hover {
            margin: auto;
            animation-play-state: paused;
            /* animation: rotation 9000000s linear infinite; */
        }

        @keyframes rotation {
            100% {
                transform: rotate(360deg);
            }
        }

        .social-icons a {
            position: absolute;
        }

        .social-icons a:nth-child(1) {
            top: 33px;
            left: 37%;
        }

        .social-icons a:nth-child(2) {
            top: 25%;
            left: 85%;
        }

        .social-icons a:nth-child(3) {
            top: 57%;
            left: 90%;
        }

        .social-icons a:nth-child(4) {
            top: 74%;
            left: 37%;
        }

        .social-icons a:nth-child(5) {
            top: 59%;
            left: -10%;
        }

        .social-icons a:nth-child(6) {
            top: 22%;
            left: -9%;
        }


        .backbtn {
            /* position: relative; */
            /* display: inline-block; */
            font-size: 12px;
            text-transform: uppercase;
            color: #fff;
            text-decoration: none;
            padding: 7.5%;
            letter-spacing: 2px;
            font-weight: 500px;
            line-height: 1;
            left: 55%;
            /* margin-top: 60px; */
        }

        .backbtn::before {
            content: '';
            position: absolute;
            top: 0;
            left: 1px;
            width: 100%;
            height: 60px;
            border-radius: 50px;
            background-color: #f09053;
            font-size: 10px;
            z-index: -1;
            transition: all ease 0.5s;
        }

        .backbtn:hover::before {
            width: 100%;
            background-color: #615c59;
        }

        .contentmain {
            display: flex;
            width: 100%;
            height: 100%;
        }

        .sidebar ul li a img {
            width: 39px;
            height: 50px;
        }

        .sidebar ul li a {
            width: 100%;
            height: 80px;
            transition: 0.6s all;
            color: #fff;
            text-decoration: none;
            line-height: 1;
            font-size: 12px;
            /* padding: 13px 80px 13px 1px; */
        }

        .sidebar ul li a i {
            margin-right: 10px;
            color: #002060;
            font-size: 18px;
        }

        .sidebar ul li a:hover {
            background: #34495e;
        }

        .sidebar ul li {
            list-style-type: none;
            padding: 5px;
        }

        .sidebar ul {
            margin: 0;
            padding: 5px;
        }

        .sidebar {
            float: left;
            background: #2c3e50;
            width: 100px;
            height: 100%;
            overflow: hidden;
            margin-left: -100px;
            transition: 0.6s all;

        }

        .side {
            margin-left: 0;
            width: 281px;
        }

        .btn {
            text-indent: 0%;
            float: left;
            padding: 0px 0px;
            font-size: 40px;
            width: 60px;
            text-decoration: none;
            color: #2c3e50;
            cursor: pointer;
        }

        .hidemain {
            /* transition: 0.6 all; */
            display: none;
            visibility: hidden;

        }

        /* .mainpage {
                transition: 0.6 all;
            } */

        .social-icons a {
            position: absolute;
            text-align: center;
            color: #fff;
            font-size: 15px;
            line-height: 1;
            width: 113px;
            text-decoration: none;
        }

    }

    @media (min-width: 576px) and (max-width: 768px) {
        #sidebar {
            margin-left: -523px;
        }

        .wrappers {
            /* overflow: hidden; */
            height: 100%;
            /* transition: 0.6 all ease-in-out; */
            /* display: flex; */
            /* background: no-repeat 100% url('{{ asset('assets/new/ressources/fontit2.jpg') }}'); */
        }

        .img-menu {
            position: relative;
            margin-top: 0;
            margin-left: 124px;
            /* display: flex; */
            width: 350px;
            height: 84vh;
            left: 0%;
            transition: 0.6 all ease-in;
            /* right: -8%; */
            /* background: linear-gradient(0.25turn, #3f87a6, #ebf8e1, #f69d3c); */
            /* /* margin-top: -50px; */
        }

        .img-menu a p {
            width: 50px;
            height: 50px;
        }

        .img-menu img {
            width: 60px;
            height: 60px;
        }

        .email-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .social-icons {
            /* position: absolute; */
            margin: auto;
            top: 50%;
            left: 50%;
            height: 100%;
            width: 280px;
            /* transform: translate(-50%, -50%); */
            /* animation: rotation 30s linear infinite; */
            animation-direction: alternate-reverse;
            background: none;

        }

        .social-icons:hover {
            margin: auto;
            animation-play-state: paused;
            /* animation: rotation 9000000s linear infinite; */
        }

        @keyframes rotation {
            100% {
                transform: rotate(360deg);
            }
        }

        .social-icons a {
            position: absolute;
        }

        .social-icons a:nth-child(1) {
            top: 33px;
            left: 37%;
        }

        .social-icons a:nth-child(2) {
            top: 25%;
            left: 85%;
        }

        .social-icons a:nth-child(3) {
            top: 57%;
            left: 90%;
        }

        .social-icons a:nth-child(4) {
            top: 74%;
            left: 37%;
        }

        .social-icons a:nth-child(5) {
            top: 59%;
            left: -10%;
        }

        .social-icons a:nth-child(6) {
            top: 22%;
            left: -9%;
        }


        .backbtn {
            /* position: relative; */
            /* display: inline-block; */
            font-size: 12px;
            text-transform: uppercase;
            color: #fff;
            text-decoration: none;
            padding: 7.5%;
            letter-spacing: 2px;
            font-weight: 500px;
            line-height: 1;
            left: 55%;
            /* margin-top: 60px; */
        }

        .backbtn::before {
            content: '';
            position: absolute;
            top: 0;
            left: 1px;
            width: 100%;
            height: 60px;
            border-radius: 50px;
            background-color: #f09053;
            font-size: 10px;
            z-index: -1;
            transition: all ease 0.5s;
        }

        .backbtn:hover::before {
            width: 100%;
            background-color: #615c59;
        }

        .contentmain {
            display: flex;
            width: 100%;
            height: 100%;
        }

        .sidebar ul li a img {
            width: 39px;
            height: 50px;
        }

        .sidebar ul li a {
            width: 100%;
            height: 80px;
            transition: 0.6s all;
            color: #fff;
            text-decoration: none;
            line-height: 1;
            font-size: 17px;
            padding: 13px 80px 13px 1px;
        }

        .sidebar ul li a i {
            margin-right: 10px;
            color: rgb(111 219 230);
            font-size: 18px;
        }

        .sidebar ul li a:hover {
            background: #34495e;
        }

        .sidebar ul li {
            list-style-type: none;
            padding: 10px;
        }

        .sidebar ul {
            height: 100%;
            margin: 0;
            padding: 5px;
        }

        .sidebar {
            float: left;
            /* background: #2c3e50; */
            width: 100px;
            height: 100%;
            overflow: hidden;
            margin-left: -100px;
            transition: 0.6s all;

        }

        .side {
            margin-left: 0;
            width: 430px;
        }

        .btn {
            text-indent: 0%;
            float: left;
            padding: 0px 0px;
            font-size: 40px;
            width: 60px;
            text-decoration: none;
            color: #2c3e50;
            cursor: pointer;
        }

        .hidemain {
            transition: 0.6 all;
            display: none;
            visibility: hidden;

        }

        .mainpage {
            transition: 0.6 all;
        }

        .social-icons a {
            position: absolute;
            text-align: center;
            color: #fff;
            font-size: 15px;
            line-height: 1;
            width: 113px;
            text-decoration: none;
        }

    }

    @media (min-width: 769px) and (max-width: 991px) {

        #sidebar {
            margin-left: -523px;
        }

        .wrappers {
            /* overflow: hidden; */
            height: 100%;
            /* transition: 0.6 all ease-in-out; */
            /* display: flex; */
            /* background: no-repeat 100% url('{{ asset('assets/new/ressources/fontit2.jpg') }}'); */
        }

        .img-menu {
            position: relative;
            margin-top: 0;
            margin-left: 255px;
            /* display: flex; */
            width: 350px;
            height: 84vh;
            left: 0%;
            transition: 0.6 all ease-in;
            /* right: -8%; */
            /* background: linear-gradient(0.25turn, #3f87a6, #ebf8e1, #f69d3c); */
            /* /* margin-top: -50px; */
        }

        .img-menu a p {
            width: 50px;
            height: 50px;
        }

        .img-menu img {
            width: 60px;
            height: 60px;
        }

        .email-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .social-icons {
            /* position: absolute; */
            margin: auto;
            top: 50%;
            left: 50%;
            height: 100%;
            width: 280px;
            /* transform: translate(-50%, -50%); */
            /* animation: rotation 30s linear infinite; */
            animation-direction: alternate-reverse;
            background: none;

        }

        .social-icons:hover {
            margin: auto;
            animation-play-state: paused;
            /* animation: rotation 9000000s linear infinite; */
        }

        @keyframes rotation {
            100% {
                transform: rotate(360deg);
            }
        }

        .social-icons a {
            position: absolute;
        }

        .social-icons a:nth-child(1) {
            top: 33px;
            left: 37%;
        }

        .social-icons a:nth-child(2) {
            top: 25%;
            left: 85%;
        }

        .social-icons a:nth-child(3) {
            top: 57%;
            left: 90%;
        }

        .social-icons a:nth-child(4) {
            top: 74%;
            left: 37%;
        }

        .social-icons a:nth-child(5) {
            top: 59%;
            left: -10%;
        }

        .social-icons a:nth-child(6) {
            top: 22%;
            left: -9%;
        }


        .backbtn {
            /* position: relative; */
            /* display: inline-block; */
            font-size: 12px;
            text-transform: uppercase;
            color: #fff;
            text-decoration: none;
            padding: 5.5%;
            letter-spacing: 2px;
            font-weight: 500px;
            line-height: 1;
            left: 55%;
            /* margin-top: 60px; */
        }

        .backbtn::before {
            content: '';
            position: absolute;
            top: 0;
            left: 1px;
            width: 100%;
            height: 60px;
            border-radius: 50px;
            background-color: #f09053;
            font-size: 10px;
            z-index: -1;
            transition: all ease 0.5s;
        }

        .backbtn:hover::before {
            width: 100%;
            background-color: #615c59;
        }

        .contentmain {
            display: flex;
            width: 100%;
            height: 100%;
        }

        .sidebar ul li a img {
            width: 39px;
            height: 50px;
        }

        .sidebar ul li a {
            width: 100%;
            height: 80px;
            transition: 0.6s all;
            color: #fff;
            text-decoration: none;
            line-height: 1;
            font-size: 17px;
            padding: 13px 80px 13px 1px;
        }

        .sidebar ul li a i {
            margin-right: 10px;
            color: rgb(111 219 230);
            font-size: 18px;
        }

        .sidebar ul li a:hover {
            background: #34495e;
        }

        .sidebar ul li {
            list-style-type: none;
            padding: 7px;
        }

        .sidebar ul {
            height: 100%;
            margin: 0;
            padding: 5px;
        }

        .sidebar {
            float: left;
            /* background: #2c3e50; */
            width: 100px;
            height: 100%;
            overflow: hidden;
            margin-left: -100px;
            transition: 0.6s all;

        }

        .side {
            margin-left: 0;
            width: 430px;
        }

        .btn {
            text-indent: 0%;
            float: left;
            padding: 0px 0px;
            font-size: 40px;
            width: 60px;
            text-decoration: none;
            color: #2c3e50;
            cursor: pointer;
        }

        .hidemain {
            transition: 0.6 all;
            display: none;
            visibility: hidden;

        }

        .mainpage {
            transition: 0.6 all;
        }

        .social-icons a {
            position: absolute;
            text-align: center;
            color: #fff;
            font-size: 15px;
            line-height: 1;
            width: 113px;
            text-decoration: none;
        }
    }

    @media (min-width: 992px) and (max-width: 1199px) {

        .mainpage {
            width: 100%;
        }

        .wrapper {
            overflow: hidden;
            height: 100%;
        }

        .img-menu {
            position: relative;
            /* display: flex; */
            left: 10%;
            top: 0;
            width: 83%;
            height: 80%;
            /* background: linear-gradient(0.25turn, #3f87a6, #ebf8e1, #f69d3c); */
            margin-top: 24px;
        }

        #sidebar.active .img-menu {
            width: 139%;
        }

        .img-menu a p {
            width: 60px;
            height: 60px;
        }

        .img-menu img {
            width: 60px;
            height: 60px;
        }

        .email-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .social-icons {
            position: absolute;
            margin: auto;
            /* top: 50%;
            left: 50%;  */
            height: 100%;
            width: 60%;
            /* animation: rotation 10s linear infinite; */
            animation-direction: alternate-reverse;
            background: none;

        }

        .social-icons:hover {
            margin: auto;
            animation-play-state: paused;
            /* animation: rotation 9000000s linear infinite; */
        }

        @keyframes rotation {
            100% {
                transform: rotate(360deg);
            }
        }

        .social-icons a {
            position: absolute;
            text-align: center;
            color: #fff;
            font-size: 15px;
        }

        .social-icons a:hover {
            color: #f00;
            transition: 0.5s all;
            padding: 10px;
        }

        .social-icons a:nth-child(1) {
            top: 0;
            left: 50%;
        }

        .social-icons a:nth-child(2) {
            top: 25%;
            left: 75%;
        }

        .social-icons a:nth-child(3) {
            top: 65%;
            left: 75%;
        }

        .social-icons a:nth-child(4) {
            top: 90%;
            left: 50%;
        }

        .social-icons a:nth-child(5) {
            top: 75%;
            left: 25%;
        }

        .social-icons a:nth-child(6) {
            top: 25%;
            left: 20%;
        }


        .backbtn {
            /* position: relative; */
            /* display: inline-block; */
            /* font-size: 18px; */
            text-transform: uppercase;
            color: #fff;
            text-decoration: none;
            padding: 1.5%;
            letter-spacing: 2px;
            font-weight: 500px;
            /* margin-top: 60px; */
        }

        .backbtn::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 60px;
            height: 60px;
            border-radius: 50px;
            background-color: #f09053;
            z-index: -1;
            transition: all ease 0.5s;
        }

        .backbtn:hover::before {
            width: 100%;
            background-color: #615c59;
        }

        /* #sidebar {
                margin-left: -523px;
            } */


        .contentmain {
            display: flex;
            width: 100%;
            height: 100%;
        }

        .sidebar ul li a img {
            width: 39px;
            height: 50px;
        }

        .sidebar ul li a {
            width: 100%;
            height: 80px;
            transition: 0.6s all;
            color: #fff;
            text-decoration: none;
            padding: 13px 80px 13px 1px;
        }

        .sidebar ul li a i {
            margin-right: 10px;
            color: rgb(88, 77, 233);
            font-size: 18px;
        }

        .sidebar ul li a:hover {
            background: #34495e;
        }

        .sidebar ul li {
            list-style-type: none;
            padding: 25px;
        }

        .sidebar ul {
            margin: 0;
            padding: 5px;
        }

        .sidebar {
            float: left;
            background: #2c3e50;
            width: 100px;
            height: 100%;
            overflow: hidden;
            margin-left: -100px;
            transition: 0.6s all;

        }

        .side {
            margin-left: 0;
            width: 360px;
        }

        .btn {
            text-indent: 20%;
            float: left;
            padding: 0 10px;
            font-size: 40px;
            width: 60px;
            text-decoration: none;
            color: #2c3e50;
            cursor: pointer;
        }

        /* .hidemain {
                transition: 0.6 all;
                display: none;
                visibility: hidden;

            }

            .mainpage {
                transition: 0.6 all;
            } */

    }

    @media (min-width: 1200px) {

        /* @keyframes slideInFromLeft {
        0% {
            transform: translateX(-100%);
        }

        100% {
            transform: translateX(0);
        }
    } */

        body {
            /* This section calls the slideInFromLeft animation we defined above */
            /* animation: 1s ease-out 0s 1 slideInFromLeft; */

            /* background: #333;
                padding: 30px; */
        }

        .mainpage {
            width: 100%;
            /* position: absolute;
        left: 50%;
        top: 50%; */
            /* transform: translate(-50%, -50%); */

            overflow: hidden;
        }

        .wrapper {
            overflow: hidden;
            height: 100%;
            /* position: absolute;
        left: 50%;
        top: 50%; */
            /* transform: translate(-50%, -50%); */
        }

        .img-menu {
            position: absolute;
            /* display: flex; */
            left: 50%;
            top: 50%;
            width: 83%;
            height: 80%;
            transform: translate(-50%, -50%);
            /* background: linear-gradient(0.25turn, #3f87a6, #ebf8e1, #f69d3c); */
            margin-top: 24px;
            overflow: hidden;
            z-index: 111;
        }

        #sidebar.active .img-menu {
            width: 139%;
        }

        .img-menu a p {
            width: 60px;
            height: 60px;
        }

        .img-menu img {
            width: 100px;
            height: 90px;
        }

        .email-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .social-icons {
            position: absolute;
            /* margin: auto; */
            top: -5%;
            left: 18%;
            height: 100%;
            width: 55%;

            animation: rotation 10s linear infinite;
            animation-direction: alternate-reverse;
            background: #000;
            border-radius: 50%;

        }

        .social-icons:hover {
            margin: auto;
            animation-play-state: paused;
            /* animation: rotation 9000000s linear infinite; */
        }

        @keyframes rotation {
            100% {
                transform: rotate(360deg);
            }
        }

        .social-icons a {
            position: absolute;
            text-align: center;
            color: #fff;
            font-size: 15px;
            text-decoration: none;
            animation: rotation 10s linear infinite;
            animation-direction: reverse;
        }

        .social-icons:hover a {
            animation-play-state: paused;
        }

        .social-icons a:hover {
            color: rgb(55, 148, 235);
            transition: 0.5s all;
            padding: 7px;
            animation-play-state: paused;
        }

        .social-icons a:nth-child(1) {
            top: 0;
            left: 50%;
        }

        .social-icons a:nth-child(2) {
            top: 25%;
            left: 75%;
        }

        .social-icons a:nth-child(3) {
            top: 65%;
            left: 75%;
        }

        .social-icons a:nth-child(4) {
            top: 90%;
            left: 50%;
        }

        .social-icons a:nth-child(5) {
            top: 75%;
            left: 25%;
        }

        .social-icons a:nth-child(6) {
            top: 25%;
            left: 20%;
        }


        .backbtn {
            /* position: relative; */
            /* display: inline-block; */
            /* font-size: 18px; */
            text-transform: uppercase;
            color: #fff;
            text-decoration: none;
            padding: 2%;
            letter-spacing: 2px;
            font-weight: 500px;
            /* margin-top: 60px; */
        }

        .backbtn::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 60px;
            height: 60px;
            border-radius: 50px;
            background-color: #002060 !important;
            z-index: -1;
            transition: all ease 0.5s;
        }

        .backbtn:hover::before {
            width: 100%;
            background-color: #615c59;
        }

        /* #sidebar {
                margin-left: -523px;
            } */


        .contentmain {
            display: flex;
            width: 100%;
            height: 100%;
        }

        .sidebar ul li a img {
            width: 39px;
            height: 50px;
        }

        .sidebar ul li a {
            width: 100%;
            height: 80px;
            transition: 0.6s all;
            color: #fff;
            text-decoration: none;
            font-size: 17px;
            padding: 13px 80px 13px 1px;
        }

        .sidebar ul li a i {
            margin-right: 10px;
            color: rgb(111 219 230);
            font-size: 18px;
        }

        /* .sidebar ul li a:hover {
                background: #34495e;
            } */

        .sidebar ul li {
            list-style-type: none;
            padding: 13px;
        }

        .sidebar ul li:hover {
            background: #002060;
        }

        .sidebar ul {
            margin: 0;
            padding: 5px;
        }

        .sidebar {
            float: left;
            /* background: #2c3e50; */
            width: 100px;
            height: 100%;
            overflow: hidden;
            margin-left: -100px;
            transition: 0.6s all;

        }

        .side {
            margin-left: 0;
            width: 650px;
        }

        .btn {
            text-indent: 20%;
            float: left;
            padding: 0 10px;
            font-size: 40px;
            width: 60px;
            text-decoration: none;
            color: #2c3e50;
            cursor: pointer;
        }


    }

    @media (min-width: 1250px) {
        .backbtn {
            padding: 1.4%;
            position: absolute;
            left: 50%;
        }
    }

</style>
<div class="sidebar" style="background: rgba(16, 16, 16, 0.75);border-radius: 0 58% 50% 10%;">
    <ul>

        <a href="{{ url('/poles') }}"><img src="{{ asset('public/images/logo.png') }}" alt="logo"
                style="width:100px; margin-left: 25px;">
            {{-- <img src="{{ asset('assets/new/ressources/metier/Présention.png') }}" alt=""> --}}
        </a>
        @foreach (\App\Models\Pole::orderBy('nom_pole', "ASC")->latest()->limit(7)->get() as $pole)
            @if (Session::get('page') == '/business')
                <?php $active = 'poleactive'; ?>
            @else
                <?php $active = ''; ?>
            @endif
            <li class="{{ $active }}">

                <a href="{{ url('poles/'.$pole->url) }}"><img
                        src="{{ asset('public/images/logo/poles/blanc/'.$pole->logo_blanc_pole) }}" alt="icone"
                        class="icones" width="100"></i>{{ __('traduction.'.$pole->nom_pole) }}</a>
            </li>
        @endforeach

{{-- 
        @if (Session::get('page') == '/it')
            <?php $active = 'poleactive'; ?>
        @else
            <?php $active = ''; ?>
        @endif
        <li class="{{ $active }}">
            <a href="{{ url('it') }}"><img src="{{ asset('public/images/logo/poles/it.png') }}" alt="icone"
                    class="icones" width="50"></i>@lang('home.IT/Digital')</a>
        </li>
        @if (Session::get('page') == '/communication')
            <?php $active = 'poleactive'; ?>
        @else
            <?php $active = ''; ?>
        @endif
        <li class="{{ $active }}">
            <a href="{{ url('poles/communication') }}"><img
                    src="{{ asset('assets/new/ressources/pole/old/blanc/com.png') }}" alt="icone"
                    class="icones"></i>@lang('home.Marketing & Communication')</a>
        </li>
        @if (Session::get('page') == '/rh')
            <?php $active = 'poleactive'; ?>
        @else
            <?php $active = ''; ?>
        @endif
        <li class="{{ $active }}">
            <a href="{{ url('poles/rh') }}"><img
                    src="{{ asset('assets/new/ressources/pole/old/blanc/ressources_humaines.png') }}" alt="icone"
                    class="icones"></i>@lang('home.Ressources Humaines / Juridique')</a>
        </li>
        @if (Session::get('page') == '/risk')
            <?php $active = 'poleactive'; ?>
        @else
            <?php $active = ''; ?>
        @endif
        <li class="{{ $active }}">
            <a href="{{ url('poles/risk') }}"><img
                    src="{{ asset('assets/new/ressources/pole/old/blanc/risk_management.png') }}" alt="icone"
                    class="icones"></i>
                @lang('home.Risk management')</a>
        </li>
        @if (Session::get('page') == '/actuariat')
            <?php $active = 'poleactive'; ?>
        @else
            <?php $active = ''; ?>
        @endif

        <li class="{{ $active }}">
            <a href="{{ url('poles/actuariat') }}"><img
                    src="{{ asset('assets/new/ressources/pole/old/blanc/actuariat.png') }}" alt="icone"
                    class="icones"></i>@lang('home.Actuariat')
                {{-- <img src="{{ asset('assets/new/ressources/metier/Présention.png') }}" alt=""> --}}
            {{-- </a>
        </li>
        @if (Session::get('page') == '/strategie')
            <?php $active = 'poleactive'; ?>
        @else
            <?php $active = ''; ?>
        @endif

        <li class="{{ $active }}">
            <a href="{{ url('poles/strategie') }}"><img
                    src="{{ asset('assets/new/ressources/pole/old/blanc/strategie.png') }}" alt="icone"
                    class="icones"></i>@lang('home.Strategie')</a>
        </li> --}} --}}
    </ul>

</div>
