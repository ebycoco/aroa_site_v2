<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('public/front/images/logo.ico') }}" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Contact | Aroapartners</title>
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
        font-family: 'Open Sans', sans-serif;
    }

    .contact {
        background-image: url('{{ asset('public/images/arriere/contactdd.png') }}');
        background-size: cover;
        background-position: center;
        width: 100%;
        height: 70vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .infos {
        /* background-image: url('{{ asset('public/images/arriere/arriereimg.png') }}'); */
        background-size: cover;
        background-repeat: no-repeat;
        display: flex;
        justify-content: center;
    }


    @media (max-width: 575.98px) {
        .contact h1 {
            color: #fff;
            font-size: 30px;
        }
        .adresse,
        .formulaire {
            height: 50vh;
            width: 50%;
        }
        .formulaire {
            background-color: transparent;
            padding: 15px;
            height: 100%;
            color: #fff;
            margin-top: 60px;
            border-radius: 10%;
            width: 100%;
        }
        .formulaire .submit {
            text-align: center;
        }
        .adresse {
            position: relative;
            height: 45vh;
            text-align: center;
            width: 100%;
        }
        .adresse h2 {
            margin: 40px auto;
            font-size: 25px;
        }
        .coordonnees {

            position: absolute;
            top: 88%;
            left: 55%;
            width: 100%;
            line-height: 35px;
            transform: translate(-50%, -50%);
            font-size: 15px;
            text-align: left;
        }
        .coordonnees a {
            text-decoration: none;
            color: #000;
        }
        .inputFields {
            margin: 15px 0;
            font-size: 16px;
            padding: 10px;
            width: 100%;
            border: 1px solid rgb(255, 255, 255);
            border-top: none;
            border-left: none;
            border-right: none;
            background: rgba(20, 20, 20, .2);
            color: white;
            outline: none;
        }
        #form-submit {
            border: 1px solid rgb(255, 255, 255);
            border-radius: 50%;
            text-align: center;
            background: rgba(20, 20, 20, .6);
            font-size: 18px;
            color: white;
            margin-top: 20px;
            padding: 10px 50px;
            cursor: pointer;
            transition: .4s;

            &:hover {
                background: rgba(20, 20, 20, .8);
                padding: 10px 80px;
            }
        }
        .signupSection {
            width: 100%;
        }

        .copyright {
            display: flex;
            justify-content: center;
            text-align: center;
            align-items: center;
            align-content: center;
        }

        .copyright p {}


        .btn-home {
            position: absolute;
            top: 0%;
            left: 0;
            float: left;
            margin: 0px 10px;
            font-size: 30px;
            color: #ffffff;
            transition: all 2s ease-in-out;
        }

        .btn-home img {
            width: 50px;
        }

        .btn-home:hover {
            color: rgb(75, 221, 221);
            transform: scale(1.5);
            transition: all 2s ease-in-out;
        }

        .i4ewOd-pzNkMb-haAclf {
            background: #000000 !important;
        }
    }

    /* Mise en forme ecran tablette*/
    @media (min-width: 575.99px) and (max-width: 768px) {
        .contact h1 {
            color: #fff;
            font-size: 30px;
        }
        .adresse,
        .formulaire {
            height: 50vh;
            width: 50%;
        }
        .formulaire {
            background-color: transparent;
            padding: 15px;
            height: 100%;
            color: #fff;
            margin-top: 60px;
            border-radius: 10%;
            width: 100%;
        }
        .formulaire .submit {
            text-align: center;
        }
        .adresse {
            position: relative;
            height: 45vh;
            text-align: center;
            width: 100%;
        }
        .adresse h2 {
            margin: 40px auto;
            font-size: 25px;
        }
        .coordonnees {

            position: absolute;
            top: 88%;
            left: 55%;
            width: 100%;
            line-height: 35px;
            transform: translate(-50%, -50%);
            font-size: 15px;
            text-align: left;
        }
        .coordonnees a {
            text-decoration: none;
            color: #000;
        }
        .inputFields {
            margin: 15px 0;
            font-size: 16px;
            padding: 10px;
            width: 100%;
            border: 1px solid rgb(255, 255, 255);
            border-top: none;
            border-left: none;
            border-right: none;
            background: rgba(20, 20, 20, .2);
            color: white;
            outline: none;
        }
        #form-submit {
            border: 1px solid rgb(255, 255, 255);
            border-radius: 50%;
            text-align: center;
            background: rgba(20, 20, 20, .6);
            font-size: 18px;
            color: white;
            margin-top: 20px;
            padding: 10px 50px;
            cursor: pointer;
            transition: .4s;

            &:hover {
                background: rgba(20, 20, 20, .8);
                padding: 10px 80px;
            }
        }
        .signupSection {
            width: 100%;
        }

        .copyright {
            display: flex;
            justify-content: center;
            text-align: center;
            align-items: center;
            align-content: center;
        }

        .copyright p {}


        .btn-home {
            position: absolute;
            top: 0%;
            left: 0;
            float: left;
            margin: 0px 10px;
            font-size: 30px;
            color: #ffffff;
            transition: all 2s ease-in-out;
        }

        .btn-home img {
            width: 50px;
        }

        .btn-home:hover {
            color: rgb(75, 221, 221);
            transform: scale(1.5);
            transition: all 2s ease-in-out;
        }

        .i4ewOd-pzNkMb-haAclf {
            background: #000000 !important;
        }
    }

    /* Mise en forme ecran tablette*/
    @media (min-width: 769px) and (max-width: 991px) {
        .contact h1 {
            color: #fff;
            font-size: 30px;
        }
        .adresse,
        .formulaire {
            height: 50vh;
            width: 50%;
        }
        .formulaire {
            background-color: transparent;
            padding: 15px;
            height: 100%;
            color: #fff;
            margin-top: 60px;
            border-radius: 10%;
            width: 100%;
        }
        .formulaire .submit {
            text-align: center;
        }
        .adresse {
            position: relative;
            height: 45vh;
            text-align: center;
            width: 100%;
        }
        .adresse h2 {
            margin: 40px auto;
            font-size: 25px;
        }
        .coordonnees {

            position: absolute;
            top: 88%;
            left: 55%;
            width: 100%;
            line-height: 35px;
            transform: translate(-50%, -50%);
            font-size: 15px;
            text-align: left;
        }
        .coordonnees a {
            text-decoration: none;
            color: #000;
        }
        .inputFields {
            margin: 15px 0;
            font-size: 16px;
            padding: 10px;
            width: 100%;
            border: 1px solid rgb(255, 255, 255);
            border-top: none;
            border-left: none;
            border-right: none;
            background: rgba(20, 20, 20, .2);
            color: white;
            outline: none;
        }
        #form-submit {
            border: 1px solid rgb(255, 255, 255);
            border-radius: 50%;
            text-align: center;
            background: rgba(20, 20, 20, .6);
            font-size: 18px;
            color: white;
            margin-top: 20px;
            padding: 10px 50px;
            cursor: pointer;
            transition: .4s;

            &:hover {
                background: rgba(20, 20, 20, .8);
                padding: 10px 80px;
            }
        }
        .signupSection {
            width: 90%;
            margin: 0px 28px;
        }

        .copyright {
            display: flex;
            justify-content: center;
            text-align: center;
            align-items: center;
            align-content: center;
        }

        .copyright p {}


        .btn-home {
            position: absolute;
            top: 0%;
            left: 0;
            float: left;
            margin: 0px 10px;
            font-size: 30px;
            color: #ffffff;
            transition: all 2s ease-in-out;
        }

        .btn-home img {
            width: 50px;
        }

        .btn-home:hover {
            color: rgb(75, 221, 221);
            transform: scale(1.5);
            transition: all 2s ease-in-out;
        }

        .i4ewOd-pzNkMb-haAclf {
            background: #000000 !important;
        }
    }

    /* Mise en forme ecran moyen*/
    @media (min-width: 992px) and (max-width: 1199px) {
        .contact h1 {
            color: #fff;
            font-size: 30px;
        }
        .adresse,
        .formulaire {
            height: 50vh;
            width: 50%;
        }
        .formulaire {
            background-color: transparent;
            padding: 15px;
            height: 100%;
            color: #fff;
            margin-top: 60px;
            border-radius: 10%;
            width: 100%;
        }
        .formulaire .submit {
            text-align: center;
        }
        .adresse {
            position: relative;
            height: 45vh;
            text-align: center;
            width: 100%;
        }
        .adresse h2 {
            margin: 40px auto;
            font-size: 25px;
        }
        .coordonnees {

            position: absolute;
            top: 88%;
            left: 55%;
            width: 100%;
            line-height: 35px;
            transform: translate(-50%, -50%);
            font-size: 15px;
            text-align: left;
        }
        .coordonnees a {
            text-decoration: none;
            color: #000;
        }
        .inputFields {
            margin: 15px 0;
            font-size: 16px;
            padding: 10px;
            width: 100%;
            border: 1px solid rgb(255, 255, 255);
            border-top: none;
            border-left: none;
            border-right: none;
            background: rgba(20, 20, 20, .2);
            color: white;
            outline: none;
        }
        #form-submit {
            border: 1px solid rgb(255, 255, 255);
            border-radius: 50%;
            text-align: center;
            background: rgba(20, 20, 20, .6);
            font-size: 18px;
            color: white;
            margin-top: 20px;
            padding: 10px 50px;
            cursor: pointer;
            transition: .4s;

            &:hover {
                background: rgba(20, 20, 20, .8);
                padding: 10px 80px;
            }
        }
        .signupSection {
            width: 90%;
            margin: 0px 28px;
        }

        .copyright {
            display: flex;
            justify-content: center;
            text-align: center;
            align-items: center;
            align-content: center;
        }

        .copyright p {}


        .btn-home {
            position: absolute;
            top: 0%;
            left: 0;
            float: left;
            margin: 0px 10px;
            font-size: 30px;
            color: #ffffff;
            transition: all 2s ease-in-out;
        }

        .btn-home img {
            width: 50px;
        }

        .btn-home:hover {
            color: rgb(75, 221, 221);
            transform: scale(1.5);
            transition: all 2s ease-in-out;
        }

        .i4ewOd-pzNkMb-haAclf {
            background: #000000 !important;
        }
    }


    /* Mise en forme grand ecran*/
    @media (min-width: 1200px) {
        .contact h1 {
            color: #fff;
            font-size: 80px;
        }



        .adresse,
        .formulaire {
            height: 50vh;
            width: 50%;
        }

        .formulaire {
            background-color: transparent;
            padding: 15px;
            height: 100%;
            color: #fff;
            margin-top: 35px;
            border-radius: 10%;
        }

        .formulaire .submit {
            text-align: center;
        }

        .adresse {
            position: relative;
            height: 75vh;
            text-align: center;
        }

        .adresse h2 {
            margin: 80px auto;
            font-size: 45px;
        }

        .coordonnees {

            position: absolute;
            top: 70%;
            left: 55%;
            width: 96%;
            line-height: 35px;
            transform: translate(-50%, -50%);
            font-size: 25px;
            text-align: left;
        }

        .coordonnees a {
            text-decoration: none;
            color: #000;
        }

        .inputFields {
            margin: 15px 0;
            font-size: 16px;
            padding: 10px;
            width: 100%;
            border: 1px solid rgb(255, 255, 255);
            border-top: none;
            border-left: none;
            border-right: none;
            background: rgba(20, 20, 20, .2);
            color: rgb(0, 0, 0);
            outline: none;
        }


        #form-submit {
            border: 1px solid rgb(255, 255, 255);
            border-radius: 25%;
            text-align: center;
            background: rgba(20, 20, 20, .6);
            font-size: 18px;
            color: white;
            margin-top: 20px;
            padding: 10px 50px;
            cursor: pointer;
            transition: .4s;

            &:hover {
                background: rgba(20, 20, 20, .8);
                padding: 10px 80px;
            }
        }

        .signupSection {
            width: 100%;
        }

        .copyright {
            display: flex;
            justify-content: center;
            text-align: center;
            align-items: center;
            align-content: center;
        }

        .copyright p {}


        .btn-home {
            position: absolute;
            top: 0%;
            left: 0;
            float: left;
            margin: 15px 40px;
            font-size: 30px;
            color: #ffffff;
            transition: all 2s ease-in-out;
        }

        .btn-home img {
            width: 100px;
        }

        .btn-home:hover {
            color: rgb(75, 221, 221);
            transform: scale(1.5);
            transition: all 2s ease-in-out;
        }

        .i4ewOd-pzNkMb-haAclf {
            background: #000000 !important;
        }
    }


    @media (min-width: 1400px) {
        .coordonnees {
            position: absolute;
            top: 45%;
        }

        .adresse {
            height: 59vh;
        }
    }

</style>

<body>


    <div class="contact"><a class="btn-home" href="{{ url('/poles') }}" title="Accueil"><img
                src="{{ asset('public/images/logo.png') }}" alt="logo"></a>
        @include('front.layouts.langue_bouton')
        <h1>
            Avançons ensemble ...
        </h1>
    </div>

    <div class="row infos">

        <div class="col-md-6 adresse" style="background: transparent">
            <h2 class="mb-3">
                Restons connectés !
            </h2> 
            <div class="coordonnees">

                <p class="mt-5">
                    <b>Adresse</b> : 28 BP 1813 ABIDJAN 28
                </p>

                <p>
                    <b>Abidjan</b> : <a href="tel:+2252722543062">+225 27 22 54 30 62</a> / <a
                        href="tel:+2250575416957">+225 05 75 41 69 57</a>
                </p>

                <p>
                    <b>Paris</b> : <a href="tel:+33(0)143332075">+33 (0)1 43 33 20 75</a>
                </p>

                <p>
                    <b>Email</b> : <a href="mailto:contact@aroapartners.com">contact@aroapartners.com</a>
                </p>

                <p><b>Localisation</b> : Résidence Climbié, Deux-Plateaux Vallon, ABIDJAN</p>
            </div>
        </div>
        <div class="col-md-6 formulaire container">
            <div class="alert alert-danger alert-dismissible fade show showErrors" role="alert" style="display: none">
                <ul>
                    <li id="showErrorsnom"></li>
                    <li id="showErrorsemail"></li>
                    <li id="showErrorssujet"></li>
                    <li id="showErrorsmessage"></li>
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <div class="alert alert-success alert-dismissible fade show successMessage" role="alert" id="successMessage" style="display: none">
               <span class="showSuccess"></span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <div class="signupSection">
                <form action="#" class="signupForm" name="signupform" id="contact-form">
                    @csrf
                    <label for="nom"></label>
                    <input type="text" class="inputFields" id="nom" name="nom" placeholder="Nom" value=""
                        oninput="return userNameValidation(this.value)" />
                    <label for="email"></label>
                    <input type="email" class="inputFields" id="email" name="email" placeholder="E-mail" value=""
                        oninput="return passwordValidation(this.value)" />
                    <label for="sujet"></label>
                    <input type="text" class="inputFields" id="sujet" name="sujet" placeholder="Sujet" value="" />
                    <textarea name="message" id="message" cols="30" rows="5" class="inputFields"
                        placeholder="Message"></textarea>
                        <div class="text-center" style="margin: 0px 45% auto;">
                            <div class="spinner-border text-primary" role="status" style="display: none;" id="animation_down">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                        <div class="alert alert-success alert-dismissible fade show successMessage" role="alert" style="display: none">
                            <span class="showSuccess"></span>
                             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                         </div>
                    <div class="submit">
                        <button type="submit" id="form-submit">Soumettre</button>
                        {{-- <input type="button" id="form-submit" name="join" alt="Join" value=""> --}}
                    </div>
                </form>
            </div>


        </div>
    </div>

    <div>
        <div class="w-100">
            <div id="map" class="full-map" style="background: #000000">
                <iframe src="https://www.google.com/maps/d/embed?mid=15gMGIqLkxqBwQeSyqcLqw5kUKo2BpeaB&ehbc=2E312F" width="100%" height="480"></iframe>
            </div>
        </div>
    </div>

    <div class="copyright" style="background: rgb(0, 0, 0); height: 20vh; color:#fff">
        <p class="whitecolor">Copyright &copy; <span id="annee">
        </span> <a rel="nofollow" href="https://www.aroapartners.com" style="text-decoration: none; color:#fff"> &nbsp AroaLab</a></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="{{ asset('public/js/jquery-3.2.1.min.js') }}"></script>
    <script>
        var today = new Date();
        var annee = today.getFullYear()
        document.getElementById('annee').innerHTML = annee
    </script>
    <script> 
        $(function() {  
            // alert('rerere')
            var animation_down = $('#animation_down')
            animation_down.hide()
            $('#contact-form').on('submit', function(e) {
                e.preventDefault()
                // alert('rerere')
                animation_down.show()
                var nom = $('#nom').val()
                var email = $('#email').val()
                var sujet = $('#sujet').val()
                var message = $('#message').val()
                $.ajax({
                    type: "post",
                    url: 'contact',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        nom: nom,
                        email: email,
                        sujet: sujet,
                        message: message
                    },
                    success: function(resp) {
                        animation_down.hide()
                        // alert('rerere')
                        $('.successMessage').show()
                        $('.showSuccess').html(resp.success)
                        $('.successMessage').fadeOut(10000)
                        $('#contact')[0].reset()
                    },
                    error: function(resp) {
                        animation_down.hide()
                        // alert('rerere')
                        var datas = resp.responseJSON.errors
                        $.each(datas, function(key, value) {
                            $('.showErrors').show()
                            $('#showErrors' + key).html(value)
                        })
                    },
                });
            });
        })
    </script>
</body>

</html>
