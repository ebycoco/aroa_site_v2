<style>
    #tmSideBar {
        /* position: absolute; */
        top: 0;
        /* left: 0; */
        /* overflow: auto; */
        /* border-right: 1px solid #ddd; */
    }

    .sidebar {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: initial;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        /* padding: 60px 50px; */
        cursor: default;
        z-index: 100;
        background: rgba(0, 0, 0, 1);
        color: white;
        z-index: 1000;
    }

    .lienlogo a {
        text-decoration: none;
    }

    .lienlogo a:hover {
        color: #7086B1;
        text-decoration: none;
    }

    .lienlogo {
        /* justify-content: center;
        align-items: center; */
        text-align: center;
    }

    .tm-main-nav ul li a img {
        width: 30%;
        height: auto;
    }

</style>
<div id="tmSideBar" class="col-xl-3 col-lg-4 col-md-12 col-sm-12 sidebar">
    <button id="tmMainNavToggle" class="menu-icon">&#9776;<a class="btn"
            style="color: #fff; margin-top: 2%;"><img src="{{ asset('public/images/logo.png') }}" alt="logo" style="width: 65px;
    margin-left: 38px;
    margin-top: -41px;"></a></button>
    <div class="inner" style="margin-top: -55px;">
        <p class="lienlogo"><a href="{{ url('/poles') }}" style="margin:2px;"><img
                    src="{{ asset('public/images/logo.png') }}" alt="logo" style="width: 40%;"></a></p>
        <p class="lienlogo"><a href="{{ url('poles/'.$pole->url) }}" title="Retour"><i class="fas fa-chevron-left"
                    style="font-size: 30px;"></i></a></p>
        <nav id="tmMainNav" class="tm-main-nav">

            <ul>
                @foreach ($metiers as $metier)
                    <li>
                        <a href="{{ url('poles/'.$pole->url.'/'.$metier->url) }}" id="tmNavLink1" class="scrolly @if ($metier->nom_icone == Session::get('page')) active @endif }}"
                            data-bg-img="constructive_bg_01.jpg" data-page="#tm-section-1">
                            <img class="tm-nav-fa-icon"
                                src="{{ asset('public/images/logo/metiers/blanccercle/'.$metier->icone_blanche_cercle) }}" alt="icone"
                                class="icone">
                            <span>{{ __('traduction.'.$metier->nom_icone) }}</span>
                        </a>
                    </li>
                @endforeach
                {{-- <li>
                    @if (Session::get('page') == '/home_it')
                        <?php $active = 'active'; ?>
                    @else
                        <?php $active = ''; ?>
                    @endif
                    <a href="{{ url('it/home') }}" id="tmNavLink1" class="scrolly {{ $active }}"
                        data-bg-img="constructive_bg_01.jpg" data-page="#tm-section-1">
                        <img class="tm-nav-fa-icon"
                            src="{{ asset('assets/new/ressources/images/icones/presentation.png') }}" alt="icone"
                            class="icone">
                        <span>@lang('home.Présentation')</span>
                    </a>
                </li>
                <li>
                    @if (Session::get('page') == '/reference')
                        <?php $active = 'active'; ?>
                    @else
                        <?php $active = ''; ?>
                    @endif
                    <a href="{{ url('it/reference') }}" id="tmNavLink2" class="scrolly {{ $active }}"
                        data-bg-img="constructive_bg_02.jpg" data-page="#tm-section-2" data-page-type="carousel">
                        <img class="tm-nav-fa-icon"
                            src="{{ asset('assets/new/ressources/images/icones/reference.png') }}" alt="icone"
                            class="icone">
                        <span>@lang('home.Référence')</span>
                    </a>
                </li>
                <li>
                    @if (Session::get('page') == '/blog_it')
                        <?php $active = 'active'; ?>
                    @else
                        <?php $active = ''; ?>
                    @endif
                    <a href="{{ url('it/blog') }}" class="scrolly {{ $active }}"
                        data-bg-img="constructive_bg_03.jpg" data-page="#tm-section-3">
                        <img class="tm-nav-fa-icon" src="{{ asset('assets/new/ressources/images/icones/blog.png') }}"
                            alt="icone" class="icone">
                        <span>@lang('home.Blog')</span>
                    </a>
                </li>
                <li>
                    @if (Session::get('page') == '/offre-emploi')
                        <?php $active = 'active'; ?>
                    @else
                        <?php $active = ''; ?>
                    @endif
                    <a href="{{ url('/it/offre-emploi') }}" class="scrolly {{ $active }}"
                        data-bg-img="constructive_bg_04.jpg" data-page="#tm-section-5">
                        <img class="tm-nav-fa-icon"
                            src="{{ asset('assets/new/ressources/images/icones/offre.png') }}" alt="icone"
                            class="icone">
                        <span>@lang('home.Offre d\'emploi')</span>
                    </a>
                </li>
                <li>
                    @if (Session::get('page') == '/formations')
                        <?php $active = 'active'; ?>
                    @else
                        <?php $active = ''; ?>
                    @endif
                    <a href="{{ url('/it/formations') }}" class="scrolly {{ $active }}"
                        data-bg-img="constructive_bg_04.jpg" data-page="#tm-section-5">
                        <img class="tm-nav-fa-icon"
                            src="{{ asset('assets/new/ressources/images/icones/formations.png') }}" alt="icone"
                            class="icone">
                        <span>@lang('home.Formations')</span>
                    </a>
                </li>
                <li>
                    @if (Session::get('page') == '/equipe')
                        <?php $active = 'active'; ?>
                    @else
                        <?php $active = ''; ?>
                    @endif
                    <a href="{{ url('/it/equipe') }}" class="scrolly {{ $active }}"
                        data-bg-img="constructive_bg_04.jpg" data-page="#tm-section-6">
                        <img class="tm-nav-fa-icon"
                            src="{{ asset('assets/new/ressources/images/icones/equipe.png') }}" alt="icone"
                            class="icone">
                        <span>@lang('home.equipe')</span>
                    </a>
                </li> --}}

                {{-- <li>
                    @if (Session::get('page') == '/actualites')
                    <?php $active = 'active'; ?>
                    @else
                    <?php $active = ''; ?>
                    @endif
                    <a href="{{ url('/it/actualites') }}" class="scrolly {{$active}}" data-bg-img="constructive_bg_04.jpg" data-page="#tm-section-6">
                        <i class="fas fa-users tm-nav-fa-icon"></i>
                        <span>Actualités</span>
                    </a>
                </li> --}}
            </ul>

        </nav>
    </div>
</div>
<script type="text/javascript" src="{{ asset('assets/new/cssjs/it/js/jquery-3.2.1.min.js') }}"></script>
{{-- <script>
    $(function(){
        var btnlogo = $('.btn')
        var tmMainNavToggle = $('#tmMainNavToggle')
        tmMainNavToggle.on('click', function(){
            btnlogo.toggleClass('logotoggle')
        })
    })
</script> --}}
