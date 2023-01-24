<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POLES</title>
    <link href="{{ asset('public/images/logo.ico') }}" rel="icon">
    <link rel="stylesheet" href="{{ asset('public/front/poles/style.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('public/front/poles/style_contact_abidjan_paris.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@100;300&display=swap');


        * {
            font-family: 'Lato', sans-serif;
        }

        body {
            background-image: url('public/images/arriere/accueil.jpeg');
            background-size: 90%;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            overflow: hidden;
        }

        .btn-menu img {
            margin-bottom: 10px;
        }

    </style>

</head>

<body style="width: 100%;" onselectstart="return false" oncontextmenu="return false" ondragstart="return false" onMouseOver="window.status='..message perso .. '; return true;">

    <a class="btn-home" href="{{ url('/') }}" title="Accueil"><img
            src="{{ asset('public/images/logo.png') }}" alt="logo"></a>
    <div class="arriereplan" style="background: transparent; height: 100vh; width: 100%; ">
        @include('front.layouts.langue_bouton')
        {{-- <div style="width: 95%; height: 100vh; border: 3px solid #f00; margin: auto"></div> --}}

        @include('front.layouts.contact_abidjan')
        <div class="container-menu">
            @if ($strategie != null)
                <div class="btn-menu">
                    <a href="{{ url('poles/strategie') }}">
                        <img src="{{ asset('public/images/logo/poles/noir/' . $strategie->logo_noir_pole) }}" alt="icone"
                            class="icone">
                        <span>
                            <b>{{ __('traduction.' . $strategie->nom_pole) }}</b>
                        </span>
                    </a>
                </div>
            @endif
            <div class="poleicons">
                @foreach ($poles as $pole)
                    <div class="blob blob{{ $pole->id }}">
                        <a href="{{ url('/poles/'.$pole->url) }}" title="{{ __('traduction.' . $pole->nom_pole) }}"><img
                                src="{{ asset('public/images/logo/poles/noir/' . $pole->logo_noir_pole) }}" alt="icone"
                                class="icone"><br><span><b>{{ __('traduction.' . $pole->nom_pole) }}</b></span></a>
                    </div>
                @endforeach
            </div>

        </div>
        @include('front.layouts.contact_paris')
    </div>

    <script type="text/javascript" src="{{ asset('public/front/js/jquery-3.4.1.min.js') }}"></script>
    <script>
        $(function() {

            var container_menu = $('.container-menu')

            container_menu.addClass('active')
        })
    </script>

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
        var blobss = document.getElementsByClassName('btn-menu')
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
