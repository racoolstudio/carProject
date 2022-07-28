<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 917px;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light"><?php echo e(trans('panel.site_title')); ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route("admin.home")); ?>">
                        <i class="fas fa-fw fa-tachometer-alt nav-icon">
                        </i>
                        <p>
                            <?php echo e(trans('global.dashboard')); ?>

                        </p>
                    </a>
                </li>
                <!-- Car -->
                    <li class="nav-item">
                        <a href="<?php echo e(route("admin.cars.index")); ?>" class="nav-link <?php echo e(request()->is("admin/cars") || request()->is("admin/cars/*") ? "active" : ""); ?>">
                            <i class="fa-fw nav-icon fas fa-taxi">

                            </i>
                            <p>
                                <?php echo e(trans('cruds.car.title')); ?>

                            </p>
                        </a>
                    </li>
               
                    <!-- Manufacturer -->
                    <li class="nav-item">
                        <a href="<?php echo e(route("admin.manufacturers.index")); ?>" class="nav-link <?php echo e(request()->is("admin/manufacturers") || request()->is("admin/cars/*") ? "active" : ""); ?>">
                            <i class="fa-fw nav-icon fas fa-taxi">
                          </i>
                            <p>
                                <?php echo e(trans('cruds.manufacturer.title')); ?>

                            </p>
                        </a>
                    </li>
                    <!-- Model -->
                    <li class="nav-item">
                        <a href="<?php echo e(route("admin.models.index")); ?>" class="nav-link <?php echo e(request()->is("admin/models") || request()->is("admin/models/*") ? "active" : ""); ?>">
                            <i class="fa-fw nav-icon fas fa-taxi">
                          </i>
                            <p>
                                <?php echo e(trans('cruds.model.title')); ?>

                            </p>
                        </a>
                    </li>
                    <!-- Color -->
                    <li class="nav-item">
                        <a href="<?php echo e(route("admin.colors.index")); ?>" class="nav-link <?php echo e(request()->is("admin/colors") || request()->is("admin/colors/*") ? "active" : ""); ?>">
                            <i class="fa-fw nav-icon fas fa-taxi">
                          </i>
                            <p>
                                <?php echo e(trans('cruds.color.title')); ?>

                            </p>
                        </a>
                    </li>
                    <!-- Year -->
                    <li class="nav-item">
                        <a href="<?php echo e(route("admin.years.index")); ?>" class="nav-link <?php echo e(request()->is("admin/years") || request()->is("admin/years/*") ? "active" : ""); ?>">
                            <i class="fa-fw nav-icon fas fa-taxi">
                          </i>
                            <p>
                                <?php echo e(trans('cruds.year.title')); ?>

                            </p>
                        </a>
                    </li>
                     <!-- Customer -->
                     <li class="nav-item">
                        <a href="<?php echo e(route("admin.customers.index")); ?>" class="nav-link <?php echo e(request()->is("admin/customers") || request()->is("admin/customers/*") ? "active" : ""); ?>">
                            <i class="fa-fw nav-icon fas fa-taxi">
                          </i>
                            <p>
                                <?php echo e(trans('cruds.customer.title')); ?>

                            </p>
                        </a>
                    </li>
    
                

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_management_access')): ?>
                    <li class="nav-item has-treeview <?php echo e(request()->is("admin/permissions*") ? "menu-open" : ""); ?> <?php echo e(request()->is("admin/roles*") ? "menu-open" : ""); ?> <?php echo e(request()->is("admin/users*") ? "menu-open" : ""); ?>">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-users">

                            </i>
                            <p>
                                <?php echo e(trans('cruds.userManagement.title')); ?>

                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission_access')): ?>
                                <li class="nav-item">
                                    <a href="<?php echo e(route("admin.permissions.index")); ?>" class="nav-link <?php echo e(request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "active" : ""); ?>">
                                        <i class="fa-fw nav-icon fas fa-unlock-alt">

                                        </i>
                                        <p>
                                            <?php echo e(trans('cruds.permission.title')); ?>

                                        </p>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role_access')): ?>
                                <li class="nav-item">
                                    <a href="<?php echo e(route("admin.roles.index")); ?>" class="nav-link <?php echo e(request()->is("admin/roles") || request()->is("admin/roles/*") ? "active" : ""); ?>">
                                        <i class="fa-fw nav-icon fas fa-briefcase">

                                        </i>
                                        <p>
                                            <?php echo e(trans('cruds.role.title')); ?>

                                        </p>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_access')): ?>
                                <li class="nav-item">
                                    <a href="<?php echo e(route("admin.users.index")); ?>" class="nav-link <?php echo e(request()->is("admin/users") || request()->is("admin/users/*") ? "active" : ""); ?>">
                                        <i class="fa-fw nav-icon fas fa-user">

                                        </i>
                                        <p>
                                            <?php echo e(trans('cruds.user.title')); ?>

                                        </p>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </li>
                <?php endif; ?>
                <?php if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))): ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('profile_password_edit')): ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo e(request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : ''); ?>" href="<?php echo e(route('profile.password.edit')); ?>">
                                <i class="fa-fw fas fa-key nav-icon">
                                </i>
                                <p>
                                    <?php echo e(trans('global.change_password')); ?>

                                </p>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <p>
                            <i class="fas fa-fw fa-sign-out-alt nav-icon">

                            </i>
                            <p><?php echo e(trans('global.logout')); ?></p>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside><?php /**PATH C:\xampp\htdocs\car\resources\views/partials/menu.blade.php ENDPATH**/ ?>