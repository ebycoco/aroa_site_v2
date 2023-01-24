<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link" target="_blank">
        <img src="{{ asset('public/images/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Aroapartners</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="@if (Auth::guard('admin')->user()) {{ asset('public/images/profile/small/' . Auth::guard('admin')->user()->photo) }}
                @else
                {{ asset('public/images/avatar.png') }} @endif"
                    class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('admin.profile') }}" class="d-block">
                    @if (Auth::guard('admin')->user())
                        {{ Auth::guard('admin')->user()->nom }} ( {{ \Spatie\Permission\Models\Role::where('id', Auth::guard('admin')->user()->role_id)->get()->first()->name }})
                    @endif
                </a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2 mb-5">
            <ul class="nav nav-pills nav-sidebar flex-column mb-5" data-widget="treeview" role="menu"
                data-accordion="false">
                @if (Session::get('page') == '/admin/dashboard')
                    <?php
                    $open = 'menu-open';
                    $active = 'active';
                    ?>
                @else
                    <?php
                    $open = '';
                    $active = '';
                    ?>
                @endif
                <li class="nav-item {{ $open }}">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link {{ $active }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                @if (Session::get('page') == '/admin/users' or Session::get('page') == '/admin/profile' or Session::get('page') == '/admin/role' or Session::get('page') == '/admin/permission')
                    <?php
                    $open = 'menu-open';
                    $active = 'active';
                    ?>
                @else
                    <?php
                    $open = '';
                    $active = '';
                    ?>
                @endif
                <li class="nav-item {{ $open }}">
                    <a href="#" class="nav-link {{ $active }}">
                        <i class="fas fa-users-cog"></i>
                        <p>
                            Parametres
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @if (Session::get('page') == '/admin/profile')
                            <?php
                            $open = 'menu-open';
                            $active = 'active';
                            ?>
                        @else
                            <?php
                            $open = '';
                            $active = '';
                            ?>
                        @endif
                        <li class="nav-item">

                            <a href="{{ route('admin.profile') }}" class="nav-link {{ $active }}">
                                <i class="fas fa-user nav-icon"></i>
                                <p>Profile</p>
                            </a>
                        </li>
                        @role('admin')
                            @if (Session::get('page') == '/admin/users')
                                <?php
                                $open = 'menu-open';
                                $active = 'active';
                                ?>
                            @else
                                <?php
                                $open = '';
                                $active = '';
                                ?>
                            @endif
                            <li class="nav-item">
                                <a href="{{ route('admin.users') }}" class="nav-link {{ $active }}">
                                    <i class="fas fa-users nav-icon"></i>
                                    <p>Utilisateurs</p>
                                </a>
                            </li>


                            @if (Session::get('page') == '/admin/role')
                                <?php
                                $open = 'menu-open';
                                $active = 'active';
                                ?>
                            @else
                                <?php
                                $open = '';
                                $active = '';
                                ?>
                            @endif
                            <li class="nav-item">
                                <a href="{{ route('role.index') }}" class="nav-link {{ $active }}">
                                    <i class="fas fa-edit nav-icon"></i>
                                    <p>Roles</p>
                                </a>
                            </li>
                            @if (Session::get('page') == '/admin/permission')
                                <?php
                                $open = 'menu-open';
                                $active = 'active';
                                ?>
                            @else
                                <?php
                                $open = '';
                                $active = '';
                                ?>
                            @endif
                            <li class="nav-item">
                                <a href=" {{ route('permission.index') }} " class="nav-link {{ $active }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Permissions</p>
                                </a>
                            </li>
                        @endrole

                    </ul>
                </li>
                @role('admin|editeur')
                    @if (Session::get('page') == '/admin/langue/cle' or Session::get('page') == '/admin/langue/anglais-français')
                        <?php
                        $open = 'menu-open';
                        $active = 'active';
                        ?>
                    @else
                        <?php
                        $open = '';
                        $active = '';
                        ?>
                    @endif
                    <li class="nav-item {{ $open }}">
                        <a href="#" class="nav-link {{ $active }}">
                            <i class="nav-icon fas fa-language"></i>
                            <p>
                                Langues
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @if (Session::get('page') == '/admin/langue/cle')
                                <?php
                                $open = 'menu-open';
                                $active = 'active';
                                ?>
                            @else
                                <?php
                                $open = '';
                                $active = '';
                                ?>
                            @endif
                            @role('admin')
                                <li class="nav-item">
                                    <a href="{{ route('admin.langue-key') }}" class="nav-link {{ $active }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>clé</p>
                                    </a>
                                </li>
                            @endrole
                            @if (Session::get('page') == '/admin/langue/anglais-français')
                                <?php
                                $open = 'menu-open';
                                $active = 'active';
                                ?>
                            @else
                                <?php
                                $open = '';
                                $active = '';
                                ?>
                            @endif
                            <li class="nav-item">
                                <a href="{{ route('admin.french-english') }}" class="nav-link {{ $active }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Français - anglais</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endrole
                @if (Session::get('page') == '/admin/page/accueil')
                    <?php
                    $open = 'menu-open';
                    $active = 'active';
                    ?>
                @else
                    <?php
                    $open = '';
                    $active = '';
                    ?>
                @endif
                <li class="nav-item {{ $open }}">
                    <a href="#" class="nav-link {{ $active }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Pages
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.page.accueil') }}" class="nav-link {{ $active }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Page accueil</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @if (Session::get('page') == '/admin/page/pole' or Session::get('page') == '/admin/page/metier')
                    <?php
                    $open = 'menu-open';
                    $active = 'active';
                    ?>
                @else
                    <?php
                    $open = '';
                    $active = '';
                    ?>
                @endif
                <li class="nav-item {{ $open }}">
                    <a href="#" class="nav-link {{ $active }}">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Extras
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @if (Session::get('page') == '/admin/page/pole')
                            <?php
                            $open = 'menu-open';
                            $active = 'active';
                            ?>
                        @else
                            <?php
                            $open = '';
                            $active = '';
                            ?>
                        @endif
                        <li class="nav-item">
                            <a href="{{ route('admin.pole') }}" class="nav-link {{ $active }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Page pôle
                                </p>
                            </a>
                        </li>
                        @if (Session::get('page') == '/admin/page/metier')
                            <?php
                            $open = 'menu-open';
                            $active = 'active';
                            ?>
                        @else
                            <?php
                            $open = '';
                            $active = '';
                            ?>
                        @endif
                        <li class="nav-item">
                            <a href="{{ route('admin.pole.index') }}" class="nav-link {{ $active }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Index metier
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                @if (Session::get('page') == '/admin/page/presentation' or Session::get('page') == '/admin/page/expertise')
                    <?php
                    $open = 'menu-open';
                    $active = 'active';
                    ?>
                @else
                    <?php
                    $open = '';
                    $active = '';
                    ?>
                @endif
                <li class="nav-item {{ $open }}">
                    <a href="#" class="nav-link {{ $active }}">
                        <i class="nav-icon fas fa-search"></i>
                        <p>
                            Métiers
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @if (Session::get('page') == '/admin/page/presentation')
                            <?php
                            $open = 'menu-open';
                            $active = 'active';
                            ?>
                        @else
                            <?php
                            $open = '';
                            $active = '';
                            ?>
                        @endif
                        <li class="nav-item">
                            <a href="{{ route('admin.page.presentation') }}" class="nav-link {{ $active }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Presentation</p>
                            </a>
                        </li>
                        @if (Session::get('page') == '/admin/page/expertise')
                            <?php
                            $open = 'menu-open';
                            $active = 'active';
                            ?>
                        @else
                            <?php
                            $open = '';
                            $active = '';
                            ?>
                        @endif
                        <li class="nav-item">
                            <a href="{{ route('admin.page.presentation.expertise') }}"
                                class="nav-link {{ $active }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Expertises</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">Metiers</li>
                @if (Session::get('page') == '/admin/page/category' or Session::get('page') == '/admin/page/article')
                    <?php
                    $open = 'menu-open';
                    $active = 'active';
                    ?>
                @else
                    <?php
                    $open = '';
                    $active = '';
                    ?>
                @endif
                <li class="nav-item {{ $open }}">
                    <a href="#" class="nav-link {{ $active }}">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            Blog
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @if (Session::get('page') == '/admin/page/category')
                            <?php
                            $open = 'menu-open';
                            $active = 'active';
                            ?>
                        @else
                            <?php
                            $open = '';
                            $active = '';
                            ?>
                        @endif
                        <li class="nav-item">
                            <a href="{{ route('admin.categorie.article') }}" class="nav-link {{ $active }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                        @if (Session::get('page') == '/admin/page/article')
                            <?php
                            $open = 'menu-open';
                            $active = 'active';
                            ?>
                        @else
                            <?php
                            $open = '';
                            $active = '';
                            ?>
                        @endif
                        <li class="nav-item">
                            <a href="{{ route('admin.articles.index') }}" class="nav-link {{ $active }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Articles</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @if (Session::get('page') == '/admin/page/emploi')
                    <?php
                    $open = 'menu-open';
                    $active = 'active';
                    ?>
                @else
                    <?php
                    $open = '';
                    $active = '';
                    ?>
                @endif
                <li class="nav-item {{ $open }}">
                    <a href="#" class="nav-link {{ $active }}">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            Offre d'emploi
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @if (Session::get('page') == '/admin/page/emploi')
                            <?php
                            $open = 'menu-open';
                            $active = 'active';
                            ?>
                        @else
                            <?php
                            $open = '';
                            $active = '';
                            ?>
                        @endif
                        <li class="nav-item">
                            <a href="{{ route('admin.offre.index') }}" class="nav-link {{ $active }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Liste des offres</p>
                            </a>
                        </li>
                    </ul>
                </li>

                @if (Session::get('page') == '/admin/page/team')
                    <?php
                    $open = 'menu-open';
                    $active = 'active';
                    ?>
                @else
                    <?php
                    $open = '';
                    $active = '';
                    ?>
                @endif
                <li class="nav-item {{ $open }}">
                    <a href="#" class="nav-link {{ $active }}">
                        <i class="nav-icon fas fa-search"></i>
                        <p>
                            Notre équipe
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @if (Session::get('page') == '/admin/page/team')
                            <?php
                            $open = 'menu-open';
                            $active = 'active';
                            ?>
                        @else
                            <?php
                            $open = '';
                            $active = '';
                            ?>
                        @endif
                        <li class="nav-item">
                            <a href="{{ route('admin.team.view') }}" class="nav-link {{ $active }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Voir membres</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @if (Session::get('page') == '/admin/page/reference')
                    <?php
                    $open = 'menu-open';
                    $active = 'active';
                    ?>
                @else
                    <?php
                    $open = '';
                    $active = '';
                    ?>
                @endif
                <li class="nav-item {{ $open }}">
                    <a href="#" class="nav-link {{ $active }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Nos références
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @if (Session::get('page') == '/admin/page/reference')
                            <?php
                            $open = 'menu-open';
                            $active = 'active';
                            ?>
                        @else
                            <?php
                            $open = '';
                            $active = '';
                            ?>
                        @endif
                        <li class="nav-item">
                            <a href="{{ route('admin.reference.view') }}" class="nav-link {{ $active }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Voir référence</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @if (Session::get('page') == '/admin/page/formation')
                    <?php
                    $open = 'menu-open';
                    $active = 'active';
                    ?>
                @else
                    <?php
                    $open = '';
                    $active = '';
                    ?>
                @endif
                <li class="nav-item mb-5 {{ $open }}">
                    <a href="#" class="nav-link {{ $active }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Nos Formations
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @if (Session::get('page') == '/admin/page/formation')
                            <?php
                            $open = 'menu-open';
                            $active = 'active';
                            ?>
                        @else
                            <?php
                            $open = '';
                            $active = '';
                            ?>
                        @endif
                        <li class="nav-item">
                            <a href="{{ route('admin.formation.view') }}" class="nav-link {{ $active }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Voir formations</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <hr>
                <li class="nav-item">
                    <a href="{{ url('admin/logout') }}" class="nav-link">
                        {{-- <i class="fas fa-right-from-bracket"></i> --}}
                        <i class="far fa-circle nav-icon"></i>
                      <p>
                        Se déconnecter
                      </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
