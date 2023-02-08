<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('traduction.A propos') }} | Aroapartners</title>
    <link href="{{ asset('public/front/images/logo.ico') }}" rel="icon">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@100;300&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Lato', sans-serif;
    }

    body {
        margin: 0;
        padding: 0;
        background-image: url('{{ asset('public/images/image_a_propos.png') }}');
        background-repeat: repeat-y;
        background-size: cover;
        /* background-position: center; */

    }

    .main {
        margin: 0;
        margin-top: 40px;
        padding: 0;
        /* background-color: rgba(13, 14, 13, 0.8); */
        width: 100%;
    }

    section {
        margin-top: -20px;
        width: 100%;
        height: 110vh;

    }

    section h1 {
        text-align: center;
        color: #fff;
        font-size: 75px;
    }

    section p {
        padding-right: 4%;
        color: #fff;
        font-size: 27px;
        line-height: 1.5;
        text-align: justify;
    }

    .voirMoins {
        margin: 25px auto;
        height: 100;
        width: 90%;
        overflow: hidden;
    }

    .voirMoins p,
    .voirPlus p {
        /* float: right; */
        margin: 0 1% 0 10%;
    }

    .voirPlus {
        margin: 25px auto;
        height: 100;
        width: 90%;
        overflow: hidden;
    }

    .lirePlus {
        margin-top: 6%;
        float: right;
        /* position: absolute; */
        /* top: 90%;
        left: 65%; */
    }

    .lireMoins {
        margin-top: 6%;
        float: right;
        /* position: absolute; */
        /* top: 90%; */
        /* left: 65%; */
    }

    .lirePlus a,
    .lireMoins a {

        text-decoration: none;
        color: #fff;
        padding: 3px 7px;
        border: 2px solid #fff;
        font-size: 33px;
    }

    .lienlogo {
        padding: 0;
        margin: 0;
    }

    .lienlogo img {
        width: 7%;
        margin: 1%;
    }

    .menu-area {
        /* display: inline-block;
        text-align: center;
        position: absolute;
        top: 5%; */
        left: 94% !important;
        /* transform: translate(-50%, -50%); */
    }

    .menu-area ul ul {
        margin-top: -15px;
        margin-left: 0px !important;
    }

    .menu-area ul li a {
        color: #fff;
    }

    /* .main .voirMoins, .main .voirPlus{
    width: 100%;
    height: 100vh;
} */

    .copyaroa {
        position: fixed;
        top: 93%;
        color: #fff;
        width: 100%;
        text-align: center;
        display: flex;
        justify-items: center;
        align-items: center;
        justify-content: center;
        height: 40px;
        font-size: 19px;
    }

    .copyaroa a {

        color: #fff;
    }

    .footer-link {
        /* position: initial !important; */
        bottom: 0px !important;
        /* right: 26px; */
        /* margin-left: 20px; */
        color: white;
        /* text-align: right; */
        width: 100%;
    }

    .tm-copyright-text {
        display: inline-block;
        padding: 15px 0 32px 0;
        background-color: rgba(0, 0, 0, 0.5);
    }

    @media (min-width: 1400px) {
        .copyaroa {
            position: fixed;
            top: 96%;

        }

        section {
            margin-top: -20px;
            width: 100%;
            height: 100vh;

        }

        .voirMoins {
            margin: 25px auto;
            height: 100;
            width: 70%;
            overflow: hidden;
        }

        .voirPlus {
            margin: 25px auto;
            height: 100;
            width: 70%;
            overflow: hidden;
        }
    }
</style>

<body>
    <div class="container">
        <div style="float: right; margin-top:0 !important; left: 100% !important">
            @include('front.layouts.langue_bouton')
        </div>
        <p class="lienlogo"><a href="{{ url('/poles') }}" style="margin:2px;"><img
                    src="{{ asset('public/images/logo.png') }}" alt="logo"></a></p>
    </div>
    <div class="main">


        <section class="contenu">
            <h1>{{ __('traduction.A propos') }}</h1>
            <div class="voirMoins">
                <p>
                    {{ __('traduction.Aroa Partners est un cabinet d’Ingénierie Financière, spécialisé dans le Conseil Stratégique & Opérationnel.') }}
                </p>
                <p>
                    {{ __('traduction.Notre mission est de proposer une offre transverse de services afin d’apporter des réponses pratiques et opérationnelles aux entreprises africaines et leur permettre de transformer les défis du modernisme en opportunités de croissance.') }}
                </p>
                <p>
                    {{ __('traduction.AROA Partners se base sur ses valeurs pour apporter son savoir-faire aux entreprises qu’elle accompagne avec pour objectif la transmission d’une culture d’excellence.') }}
                </p>
                <p>
                    {{ __('traduction.Avec des expériences et bonnes pratiques acquises au sein de cabinets de conseil internationaux, le cabinet réuni un pôle d’experts, capable de proposer aux acteurs du marché des solutions à haute valeur ajoutée et en adéquation avec leurs problématiques...') }}
                </p>
                <p class="lirePlus" style="margin-top: 3%">
                    <a href="#" class="btn-plus">{{ __('traduction.Lire la suite') }}</a>
                </p>
            </div>
            <div class="voirPlus">
                <p>
                    {{ __('traduction.Aroa Partners est un cabinet d’Ingénierie Financière, spécialisé dans le Conseil Stratégique & Opérationnel.') }}
                </p>
                <p>
                    {{ __('traduction.Notre mission est de proposer une offre transverse de services afin d’apporter des réponses pratiques et opérationnelles aux entreprises africaines et leur permettre de transformer les défis du modernisme en opportunités de croissance.') }}
                </p>
                <p>
                    {{ __('traduction.AROA Partners se base sur ses valeurs pour apporter son savoir-faire aux entreprises qu’elle accompagne avec pour objectif la transmission d’une culture d’excellence.') }}
                </p>
                <p>
                    {{ __('traduction.Avec des expériences et bonnes pratiques acquises au sein de cabinets de conseil internationaux, le cabinet réuni un pôle d’experts, capable de proposer aux acteurs du marché des solutions à haute valeur ajoutée et en adéquation avec leurs problématiques.') }}
                </p>
                <p>
                    {{ __('traduction.Disposant de solides références à des niveaux décisionnels, nos experts proposent une offre transverse de services répondant aux enjeux réglementaires.') }}
                </p>
                <p>
                    {{ __('traduction.La volonté d’excellence technique de l’équipe se traduit par une participation active des fondateurs et des consultants aux instances professionnelles qui régissent les corps financiers, managériaux et technologiques. Une telle implication permet d’anticiper les évolutions du marché et du contexte réglementaire afin d’être proactif dans leur mise en œuvre.') }}
                </p>
                {{-- <p>AROA Partners vous accompagne pour <strong>impulser votre création de valeur</strong>.</p> --}}

                <p class="lireMoins" style="margin-top: 3%">
                    <a href="#" class="btn-moins">{{ __('traduction.Lire moins') }}</a>
                </p>
            </div>
            <div class="tm-copyright-text copyaroa">Copyright © <span id="annee">2022</span> <a
                    style="text-decoration: none;" rel="nofollow" href="https://www.aroapartners.com"> &nbsp;
                    AroaLab</a>
            </div>
        </section>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(function() {
            var voirmoins = $('.voirMoins')
            var voirplus = $('.voirPlus')
            var btn_moins = $('.btn-moins')
            var btn_plus = $('.btn-plus')
            voirplus.hide()

            $(window).resize(function() {
                if ($(window).width() < 1400) {
                    $('.contenu').css({
                        'height': "130vh"
                    })
                } else {
                    $('.contenu').css({
                        'height': "100vh"
                    })
                }
            });

            btn_plus.on('click', function() {
                //  alert('voir plus')
                if ($(window).width() < 1400) {
                    $('.contenu').css({
                        'height': "151vh"
                    })
                } else {
                    $('.contenu').css({
                        'height': "100vh"
                    })
                }
                voirmoins.hide(500)
                btn_plus.hide(500)
                btn_moins.show(500)
                voirplus.show(500)
            })

            btn_moins.on('click', function() {
                if ($(window).width() < 1400) {
                    $('.contenu').css({
                        'height': "110vh"
                    })
                } else {
                    $('.contenu').css({
                        'height': "100vh"
                    })
                }
                btn_plus.show(500)
                btn_moins.hide(500)
                voirplus.hide(500)
                voirmoins.show(500)
            })
        })
    </script>

</body>

</html>
