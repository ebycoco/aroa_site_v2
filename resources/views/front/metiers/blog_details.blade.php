<!DOCTYPE html>
<!--

 Theme Name: Elementy
 Description: HTML/CSS
 Author: Abcgomel
 Designed & Coded by Abcgomel

-->

<html lang="fr">

<head>
    <title>{{ $pole->nom_pole }} | Blog | {{ $article->title_article }}</title>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Elementy - Responsive HTML5 Template">
    <meta name="author" content="ABCgomel">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#2a2b2f">

    <!-- FAVICONS -->
    <link href="{{ asset('public/images/logo.ico') }}" rel="icon">
    <link rel="apple-touch-icon" href="images/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-touch-icon-114x114.png">
    <link rel="icon" sizes="192x192" href="images/favicon/icon-192x192.png">

    <!-- CSS -->
    <!--  GOOGLE FONT -->
    <link href="../css-1.css?family=Poppins:500,600,300%7COpen+Sans:400,300,700" rel="stylesheet" type="text/css">

    <!--  BOOTSTRAP -->
    <link rel="stylesheet" href="{{ asset('public/front/elementy/css/bootstrap.min.css') }}">

    <!-- ICONS ELEGANT FONT & FONT AWESOME & LINEA ICONS  -->
    <link rel="stylesheet" href="{{ asset('public/front/elementy/css/icons-fonts.css') }}">

    <!--  CSS THEME -->
    <link rel="stylesheet" href="{{ asset('public/front/elementy/css/style.css') }}">

    <!-- ANIMATE -->
    <link rel="stylesheet" href="{{ asset('public/front/elementy/css/animate.min.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('public/css/flag-icons.css') }}">
    <!-- IE Warning CSS -->
    <!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/ie-warning.css" ><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/ie8-fix.css" ><![endif]-->

    <!-- Magnific popup, Owl Carousel Assets in style.css -->

    <!-- CSS end -->

    <!-- JS begin some js files in bottom of file-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
    <style>
        .copyaroa {
            background: #000;
            color: #fff;
            width: 100%;
            text-align: center;
            display: flex;
            justify-items: center;
            align-items: center;
            justify-content: center;
            height: 40px;
            font-size: 15px;
        }
    </style>
</head>

<body>

    <!-- LOADER -->
    <div id="loader-overflow">
        <div id="loader3" class="loader-cont"> {{ __('traduction.Veuillez activer JS') }}</div>
    </div>

    <div id="wrap" class="boxed ">
        <div class="grey-bg">
            <!-- HEADER 1 FONT BLACK TRANSPARENT -->
            <header id="nav" class="header header-1 bg-white">
                <div class="header-wrapper">
                    <div class="container-m-30 clearfix">
                        <div class="logo-row">

                            <!-- LOGO -->
                            <div class="logo-container-2">
                                <div class="logo-2">
                                    <a href="{{ url('/') }}" class="clearfix">
                                        <img src="{{ asset('public/images/logo.png') }}" class="logo-img"
                                            alt="Logo">
                                    </a>
                                </div>
                            </div>
                            <!-- BUTTON -->
                            <div class="menu-btn-respons-container">
                                <button id="menu-btn" type="button" class="navbar-toggle btn-navbar collapsed"
                                    data-toggle="collapse" data-target="#main-menu .navbar-collapse">
                                    <span aria-hidden="true" class="icon_menu hamb-mob-icon"></span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- MAIN MENU CONTAINER -->
                    <div class="main-menu-container">

                        <div class="container-m-30 clearfix">

                            <!-- MAIN MENU -->
                            <div id="main-menu">
                                <div class="navbar navbar-default" role="navigation">

                                    <!-- MAIN MENU LIST -->
                                    <nav class="collapse collapsing navbar-collapse right-1024">
                                        <ul class="nav navbar-nav">

                                            <!-- MENU ITEM -->
                                            <li class="">
                                                <a href="{{ url('poles/' . $pole->url . '/blog') }}"
                                                    class="open-subs">
                                                    <div class="main-menu-title btn btn-primary"> {{ __('traduction.Retour') }}</div>
                                                </a>
                                            </li>

                                            <li >
                                                @foreach (Config::get('languages') as $lang => $language)
                                                        @if ($lang != App::getLocale())
                                                            <a href="{{ route('lang.switch', $lang) }}"><span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span> {{ __('traduction.'.$language['display']) }}</a>
                                                        @endif
                                                @endforeach
                                            </li>
                                        </ul>

                                    </nav>

                                </div>
                            </div>
                            <!-- END main-menu -->

                        </div>
                        <!-- END container-m-30 -->

                    </div>
                    <!-- END main-menu-container -->

                    <!-- SEARCH READ DOCUMENTATION -->


                </div>
                <!-- END header-wrapper -->

            </header>

            <!-- COTENT CONTAINER -->
            <div class="container p-140-cont">
                <div class="row">

                    <!-- CONTENT -->
                    <div class="col-sm-8 blog-main-posts">

                        <!-- Post Item -->
                        <div class="wow fadeIn pb-90">
                            <div class="post-prev-img">
                                <a href="#"><img
                                        src="{{ asset('public/images/articles/' . $article->image_article) }}"
                                        alt="img"></a>
                            </div>

                            <div class="post-prev-title">
                                <h3 class="post-title-big"><a href="#">{{ $article->title_article }}</a></h3>
                            </div>

                            <div class="post-prev-info ">{{ $article->created_at->diffForHumans() }}</div>
                            <div class="mb-80 row">
                                @if (Config::get('app.locale') == 'fr')
                                    {!! $article->article_fr !!}
                                @elseif (Config::get('app.locale') == 'en')
                                    {!! $article->article_en !!}
                                @endif

                            </div>

                            <!-- DIVIDER -->
                            <hr class="mt-0 mb-0">

                            <!-- RELATED POSTS -->
                            <h4 class="blog-page-title mt-50 mb-25"> {{ __('traduction.Postes connexes') }} </h4>

                            <div class="row related-posts">
                                @foreach ($articles as $post)
                                    <!-- Post Item 1 -->
                                    <div class="col-sm-6 col-md-3 col-lg-3 wow fadeIn pb-50">

                                        <div class="post-prev-img">
                                            <a href="{{ url('poles/' . $pole->url . '/blog/detail/' . $post->id) }}"><img
                                                    src="{{ asset('public/images/articles/' . $post->image_article) }}"
                                                    alt="img"></a>
                                        </div>

                                        <div class="post-prev-title">
                                            <h3><a
                                                    href="{{ url('poles/' . $pole->url . '/blog/detail/' . $post->id) }}">{{ $post->title_article }}</a>
                                            </h3>
                                        </div>

                                        <div class="post-prev-info">
                                            {{ $post->created_at->diffForHumans() }}
                                        </div>

                                    </div>
                                @endforeach

                            </div>

                            <!-- COMMENTS -->
                            <div id="comments" class="mt-60">

                                <h4 class="blog-page-title font-26 mb-15"> {{ __('traduction.Commentaires') }} <small><span
                                            class="slash-divider">/</span>{{ count($article->comments) }}</small>
                                </h4>

                                <ul class="media-list text comment-list">

                                    @forelse ($article->comments as $comment)
                                        <li class="media comment-item">

                                            <a class="pull-left" href="#"><img class="media-object comment-avatar"
                                                    src="{{ asset('public/images/avatar.png') }}" alt="ava"></a>

                                            <div class="media-body">

                                                <div class="comment-item-title">
                                                    <div class="comment-author">
                                                        <a href="#">{{ $comment->name }}</a>
                                                    </div>
                                                    <div class="comment-date">
                                                        {{ $comment->created_at->diffForHumans() }}<span
                                                            class="slash-divider">-</span><a href="#comment-box"
                                                            onclick="document.getElementById('comment_id').value = {{ $comment->id }}">{{ __('traduction.Repondre') }}</a>
                                                    </div>
                                                </div>

                                                <p class="pb-30">{{ $comment->comment }}</p>

                                                <!-- Comment of second level -->

                                                @forelse ($comment->replies as $reply)
                                                    <div class="media comment-item comment-reply">

                                                        <a class="pull-left" href="#"><img
                                                                class="media-object comment-avatar"
                                                                src="{{ asset('public/images/avatar.png') }}"
                                                                alt="avatar"></a>

                                                        <div class="media-body">

                                                            <div class="comment-item-title">
                                                                <div class="comment-author">
                                                                    <a href="#">{{ $reply->name }}</a>
                                                                </div>
                                                                <div class="comment-date">
                                                                    {{ $reply->created_at->diffForHumans() }}<span
                                                                        class="slash-divider">-</span><a
                                                                        href="#comment-box"
                                                                        onclick="document.getElementById('comment_id').value = {{ $comment->id }}">{{ __('traduction.Repondre') }} </a>
                                                                </div>
                                                            </div>

                                                            <p class="pb-30">{{ $reply->comment }}</p>

                                                        </div>

                                                    </div>
                                                @empty
                                                @endforelse

                                                <!-- End Comment of second level -->

                                            </div>

                                        </li>
                                    @empty

                                    @endforelse

                                </ul>

                            </div>

                            <!-- DIVIDER -->
                            <hr class="mt-30 mb-0">

                            <!-- LEAVE A COMMENT	-->

                            <!-- CONTACT FORM -->
                            <div class="bg-gray-light leave-comment-cont">
                                <!-- TITLE -->
                                <h4 class="blog-page-title mt-50 mb-25">{{ __('traduction.Laissez un commentaire') }}</h4>
                                <div class="contact-form-container" id="comment-box">
                                    <form id="contact-form" action="{{ route('comment.store', $article->id) }}"
                                        method="POST">@csrf
                                        <input type="hidden" name="comment_id" id="comment_id">
                                        <div class="row">
                                            <div>
                                                <div class="col-md-6 mb-30">
                                                    <!-- <label>Your name *</label> -->
                                                    <input type="text" value=""
                                                        data-msg-required="Please enter your name" maxlength="100"
                                                        class="form-control" name="name" id="name" placeholder="Nom"
                                                        required="">
                                                </div>
                                                <div class="col-md-6 mb-30">
                                                    <!-- <label>Your email address *</label> -->
                                                    <input type="email" value=""
                                                        data-msg-required="Please enter your email address"
                                                        data-msg-email="Please enter a valid email address"
                                                        maxlength="100" class="form-control" name="email" id="email"
                                                        placeholder="Email" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div>
                                                <div class="col-md-12 mb-40">
                                                    <!-- <label>Message *</label> -->
                                                    <textarea maxlength="5000" data-msg-required="Please enter your message" rows="3" class="form-control" name="comment"
                                                        id="comment" placeholder="{{__('traduction.Commentaire')}}" required=""></textarea>
                                                    <span>{{__('traduction.Entre 20 à 300 carastères')}} </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 text-right text-xxs-center">
                                                <input type="submit" value="{{__('traduction.ENVOYER MESSAGE')}}"
                                                    class="button medium rounded gray font-open-sans">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>

                    </div>

                    <!-- SIDEBAR -->
                    <div class="col-sm-4 col-md-3 col-md-offset-1">

                        <!-- SEARCH -->


                        <!-- WIDGET -->
                        <div class="widget">

                            <h5 class="widget-title2">{{ __('traduction.Poles') }}</h5>

                            <div class="widget-body">
                                <ul class="clearlist widget-menu font-poppins">
                                    @foreach ($categories as $categorie)
                                        <li>
                                            <a href="{{ url('poles/' .\App\Models\Pole::where('nom_pole', $categorie->pole->nom_pole)->get()->first()->url .'/blog') }}"
                                                title="">{{ $categorie->pole->nom_pole }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>

                        <!-- WIDGET -->
                        <div class="widget">

                            <h5 class="widget-title2">Articles récents</h5>

                            <div class="widget-body mt-25">
                                <ul class="clearlist widget-posts">
                                    @foreach ($articles as $post)
                                        <li class="clearfix">
                                            <a href="{{ url('poles/' . $pole->url . '/blog/detail/' . $post->id) }}"><img
                                                    src="{{ asset('public/images/articles/' . $post->image_article) }}"
                                                    alt="" class="widget-posts-img"></a>
                                            <div class="widget-posts-descr2">
                                                <a href="{{ url('poles/' . $pole->url . '/blog/detail/' . $post->id) }}"
                                                    class="font-poppins lh-18">{{ $post->title_article }}</a>
                                                <div class="lh-18">{{ $post->created_at->diffForHumans() }}
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

            <!-- BACK TO TOP -->
            <p id="back-top">
                <a href="#top" title="Back to Top"><span class="icon icon-arrows-up"></span></a>
            </p>

        </div><!-- End BG -->
    </div><!-- End wrap -->
    <div class="tm-copyright-text copyaroa">Copyright &copy; <span id="annee">
        </span> <a style="text-decoration: none; color:#fff" rel="nofollow" href="https://www.aroapartners.com"> &nbsp
            AroaLab</a>
    </div>
    <!-- JS begin -->

    <!-- jQuery  -->
    <script src="{{ asset('public/front/elementy/js/jquery.min.js') }}"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('public/front/elementy/js/bootstrap.min.js') }}"></script>

    <!-- MAGNIFIC POPUP -->
    <script src="{{ asset('public/front/elementy/js/jquery.magnific-popup.min.js') }}"></script>

    <!-- PORTFOLIO SCRIPTS -->
    <script src="{{ asset('public/front/elementy/js/imagesloaded.pkgd.min.js') }}"></script>

    <!-- APPEAR -->
    <script src="{{ asset('public/front/elementy/js/jquery.appear.js') }}"></script>

    <!-- OWL CAROUSEL -->
    <script src="{{ asset('public/front/elementy/js/owl.carousel.min.js') }}"></script>

    <!-- MAIN SCRIPT -->
    <script src="{{ asset('public/front/elementy/js/main.js') }}"></script>
    <!-- JS end -->
    <script>
        var today = new Date();
        var annee = today.getFullYear()
        document.getElementById('annee').innerHTML = annee
    </script>
    <script></script>

</body>

</html>
