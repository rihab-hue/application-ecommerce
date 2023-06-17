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
                    <a href="<?php echo e(route("admin.home")); ?>" class="nav-link">
                        <p>
                            <i class="fas fa-tachometer-alt">
                            </i>
                            <span><?php echo e(trans('global.dashboard')); ?></span>
                        </p>
                    </a>
                </li>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_management_access')): ?>
                    <li class="nav-item has-treeview <?php echo e(request()->is('admin/permissions*') ? 'menu-open' : ''); ?> <?php echo e(request()->is('admin/roles*') ? 'menu-open' : ''); ?> <?php echo e(request()->is('admin/users*') ? 'menu-open' : ''); ?>">
                        <a class="nav-link nav-dropdown-toggle">
                            <i class="fas fa-users">
                            </i>
                            <p>
                                <span><?php echo e(trans('global.userManagement.title')); ?></span>
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission_access')): ?>
                                <li class="nav-item">
                                    <a href="<?php echo e(route("admin.permissions.index")); ?>" class="nav-link <?php echo e(request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : ''); ?>">
                                        <i class="fas fa-unlock-alt">
                                        </i>
                                        <p>
                                            <span><?php echo e(trans('global.permission.title')); ?></span>
                                        </p>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role_access')): ?>
                                <li class="nav-item">
                                    <a href="<?php echo e(route("admin.roles.index")); ?>" class="nav-link <?php echo e(request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : ''); ?>">
                                        <i class="fas fa-briefcase">
                                        </i>
                                        <p>
                                            <span><?php echo e(trans('global.role.title')); ?></span>
                                        </p>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_access')): ?>
                                <li class="nav-item">
                                    <a href="<?php echo e(route("admin.users.index")); ?>" class="nav-link <?php echo e(request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : ''); ?>">
                                        <i class="fas fa-user">
                                        </i>
                                        <p>
                                            <span><?php echo e(trans('global.user.title')); ?></span>
                                        </p>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </li>
                <?php endif; ?>
    
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('configuration_management_access')): ?>
                    <li class="nav-item has-treeview <?php echo e((request()->is('admin/formats*') || request()->is('admin/impressions*') || request()->is('admin/papiers*') || request()->is('admin/pelliculages*') || request()->is('admin/nbr_couleurs*') || request()->is('admin/nbr_exemplaires*') || request()->is('admin/nbr_exemplaires*')) ? 'menu-open' : ''); ?>  ">
                        <a class="nav-link nav-dropdown-toggle">
                            <i class="fas fa-wrench">
                            </i>
                            <p>
                                <span><?php echo e(trans('global.configurationManagement.title')); ?></span>
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('format_access')): ?>
                                <li class="nav-item">
                                    <a href="<?php echo e(route("admin.formats.index")); ?>" class="nav-link <?php echo e(request()->is('admin/formats') || request()->is('admin/formats/*') ? 'active' : ''); ?>">
                                    <i class="fas fa-text-width"></i>
                                        <p>
                                            <span><?php echo e(trans('global.format.title')); ?></span>
                                        </p>
                                    </a>
                                </li>
                            <?php endif; ?>   
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('papier_access')): ?>
                                <li class="nav-item">
                                    <a href="<?php echo e(route("admin.papiers.index")); ?>" class="nav-link <?php echo e(request()->is('admin/papiers') || request()->is('admin/papiers/*') ? 'active' : ''); ?>">
                                         <i class="far fa-copy"></i>
                                        <p>
                                            <span><?php echo e(trans('global.papier.title')); ?></span>
                                        </p>
                                    </a>
                                </li>
                            <?php endif; ?>   
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('impression_access')): ?>
                                <li class="nav-item">
                                    <a href="<?php echo e(route("admin.impressions.index")); ?>" class="nav-link <?php echo e(request()->is('admin/impressions') || request()->is('admin/impressions/*') ? 'active' : ''); ?>">
                                    <i class="fas fa-toilet-paper"></i>
                                        <p>
                                            <span><?php echo e(trans('global.impression.title')); ?></span>
                                        </p>
                                    </a>
                                </li>
                            <?php endif; ?>   
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('pelliculage_access')): ?>
                                <li class="nav-item">
                                    <a href="<?php echo e(route("admin.pelliculages.index")); ?>" class="nav-link <?php echo e(request()->is('admin/pelliculages') || request()->is('admin/pelliculages/*') ? 'active' : ''); ?>">
                                    <i class="fas fa-scroll"></i>
                                        <p>
                                            <span><?php echo e(trans('global.pelliculage.title')); ?></span>
                                        </p>
                                    </a>
                                </li>
                            <?php endif; ?>  
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('nbr_couleur_access')): ?>
                                <li class="nav-item">
                                    <a href="<?php echo e(route("admin.nbr_couleurs.index")); ?>" class="nav-link <?php echo e(request()->is('admin/nbr_couleurs') || request()->is('admin/nbr_couleurs/*') ? 'active' : ''); ?>">
                                    <i class="fas fa-palette"></i>
                                        <p>
                                            <span><?php echo e(trans('global.nbr_couleur.title')); ?></span>
                                        </p>
                                    </a>
                                </li>
                            <?php endif; ?>  
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('nbr_exemplaire_access')): ?>
                                <li class="nav-item">
                                    <a href="<?php echo e(route("admin.nbr_exemplaires.index")); ?>" class="nav-link <?php echo e(request()->is('admin/nbr_exemplaires') || request()->is('admin/nbr_exemplaires/*') ? 'active' : ''); ?>">
                                        <i class="fas fa-wrench">

                                        </i>
                                        <p>
                                            <span><?php echo e(trans('global.nbr_exemplaire.title')); ?></span>
                                        </p>
                                    </a>
                                </li>
                            <?php endif; ?>   
                        </ul>
                    </li>
                <?php endif; ?>
                
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('article_access')): ?>
                    <li class="nav-item">
                        <a href="<?php echo e(route("admin.articles.index")); ?>" class="nav-link <?php echo e(request()->is('admin/articles') || request()->is('admin/articles/*') ? 'active' : ''); ?>">
                            <i class="fas fa-cogs">

                            </i>
                            <p>
                                <span><?php echo e(trans('global.article.title')); ?></span>
                            </p>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('commande_access')): ?>
                    <li class="nav-item">
                        <a href="<?php echo e(route("admin.commandes.index")); ?>" class="nav-link <?php echo e(request()->is('admin/commandes') || request()->is('admin/commandes/*') ? 'active' : ''); ?>">
                            <i class="fas fa-shopping-basket">

                            </i>
                            <p>
                                <span><?php echo e(trans('global.commande.title')); ?></span>
                            </p>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contact_access')): ?>
                    <li class="nav-item">
                        <a href="<?php echo e(route("admin.contacts.index")); ?>" class="nav-link <?php echo e(request()->is('admin/contacts') || request()->is('admin/contacts/*') ? 'active' : ''); ?>">
                        <i class="fas fa-address-book"></i>

                            </i>
                            <p>
                                <span><?php echo e(trans('global.contact.title')); ?></span>
                            </p>
                        </a>
                    </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a href="<?php echo e(route('index')); ?>" class="nav-link">
                        <p>
                            <i class="fas fa-home">

                            </i>
                            <span><?php echo e(trans('global.homepage')); ?></span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <p>
                            <i class="fas fa-sign-out-alt">

                            </i>
                            <span><?php echo e(trans('global.logout')); ?></span>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside><?php /**PATH C:\xampp\htdocs\Laravel-AdminLTE3\resources\views/partials/menu.blade.php ENDPATH**/ ?>