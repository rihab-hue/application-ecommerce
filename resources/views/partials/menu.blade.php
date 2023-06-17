<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 917px;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">Project</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route("admin.home") }}" class="nav-link">
                        <p>
                            <i class="fas fa-tachometer-alt">
                            </i>
                            <span>{{ trans('global.dashboard') }}</span>
                        </p>
                    </a>
                </li>
                @can('user_management_access')
                    <li class="nav-item has-treeview {{ request()->is('admin/permissions*') ? 'menu-open' : '' }} {{ request()->is('admin/roles*') ? 'menu-open' : '' }} {{ request()->is('admin/users*') ? 'menu-open' : '' }}">
                        <a class="nav-link nav-dropdown-toggle">
                            <i class="fas fa-users">
                            </i>
                            <p>
                                <span>{{ trans('global.userManagement.title') }}</span>
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('permission_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                        <i class="fas fa-unlock-alt">
                                        </i>
                                        <p>
                                            <span>{{ trans('global.permission.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                        <i class="fas fa-briefcase">
                                        </i>
                                        <p>
                                            <span>{{ trans('global.role.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                        <i class="fas fa-user">
                                        </i>
                                        <p>
                                            <span>{{ trans('global.user.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
    
                @can('configuration_management_access')
                    <li class="nav-item has-treeview {{ (request()->is('admin/formats*') || request()->is('admin/impressions*') || request()->is('admin/papiers*') || request()->is('admin/pelliculages*') || request()->is('admin/nbr_couleurs*') || request()->is('admin/nbr_exemplaires*') || request()->is('admin/nbr_exemplaires*')) ? 'menu-open' : '' }}  ">
                        <a class="nav-link nav-dropdown-toggle">
                            <i class="fas fa-wrench">
                            </i>
                            <p>
                                <span>{{ trans('global.configurationManagement.title') }}</span>
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('format_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.formats.index") }}" class="nav-link {{ request()->is('admin/formats') || request()->is('admin/formats/*') ? 'active' : '' }}">
                                    <i class="fas fa-text-width"></i>
                                        <p>
                                            <span>{{ trans('global.format.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan   
                            @can('papier_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.papiers.index") }}" class="nav-link {{ request()->is('admin/papiers') || request()->is('admin/papiers/*') ? 'active' : '' }}">
                                         <i class="far fa-copy"></i>
                                        <p>
                                            <span>{{ trans('global.papier.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan   
                            @can('impression_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.impressions.index") }}" class="nav-link {{ request()->is('admin/impressions') || request()->is('admin/impressions/*') ? 'active' : '' }}">
                                    <i class="fas fa-toilet-paper"></i>
                                        <p>
                                            <span>{{ trans('global.impression.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan   
                            @can('pelliculage_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.pelliculages.index") }}" class="nav-link {{ request()->is('admin/pelliculages') || request()->is('admin/pelliculages/*') ? 'active' : '' }}">
                                    <i class="fas fa-scroll"></i>
                                        <p>
                                            <span>{{ trans('global.pelliculage.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan  
                            @can('nbr_couleur_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.nbr_couleurs.index") }}" class="nav-link {{ request()->is('admin/nbr_couleurs') || request()->is('admin/nbr_couleurs/*') ? 'active' : '' }}">
                                    <i class="fas fa-palette"></i>
                                        <p>
                                            <span>{{ trans('global.nbr_couleur.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan  
                            @can('nbr_exemplaire_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.nbr_exemplaires.index") }}" class="nav-link {{ request()->is('admin/nbr_exemplaires') || request()->is('admin/nbr_exemplaires/*') ? 'active' : '' }}">
                                        <i class="fas fa-wrench">

                                        </i>
                                        <p>
                                            <span>{{ trans('global.nbr_exemplaire.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan   
                        </ul>
                    </li>
                @endcan
                {{-- 
                @can('product_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.products.index") }}" class="nav-link {{ request()->is('admin/products') || request()->is('admin/products/*') ? 'active' : '' }}">
                            <i class="fas fa-cogs">

                            </i>
                            <p>
                                <span>{{ trans('global.product.title') }}</span>
                            </p>
                        </a>
                    </li>
                @endcan
                --}}
                @can('article_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.articles.index") }}" class="nav-link {{ request()->is('admin/articles') || request()->is('admin/articles/*') ? 'active' : '' }}">
                            <i class="fas fa-cogs">

                            </i>
                            <p>
                                <span>{{ trans('global.article.title') }}</span>
                            </p>
                        </a>
                    </li>
                @endcan
                @can('commande_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.commandes.index") }}" class="nav-link {{ request()->is('admin/commandes') || request()->is('admin/commandes/*') ? 'active' : '' }}">
                            <i class="fas fa-shopping-basket">

                            </i>
                            <p>
                                <span>{{ trans('global.commande.title') }}</span>
                            </p>
                        </a>
                    </li>
                @endcan
                @can('contact_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.contacts.index") }}" class="nav-link {{ request()->is('admin/contacts') || request()->is('admin/contacts/*') ? 'active' : '' }}">
                        <i class="fas fa-address-book"></i>

                            </i>
                            <p>
                                <span>{{ trans('global.contact.title') }}</span>
                            </p>
                        </a>
                    </li>
                @endcan
                <li class="nav-item">
                    <a href="{{ route('index') }}" class="nav-link">
                        <p>
                            <i class="fas fa-home">

                            </i>
                            <span>{{ trans('global.homepage') }}</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <p>
                            <i class="fas fa-sign-out-alt">

                            </i>
                            <span>{{ trans('global.logout') }}</span>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>