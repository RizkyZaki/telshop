<div class="nk-header nk-header-fixed is-light">
    <div class="container-fluid">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger d-xl-none ms-n1">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em
                        class="icon ni ni-menu"></em></a>
            </div>
            <div class="nk-header-brand d-xl-none">
                <a href="javascript:void(0);" class="logo-link">
                        <img class="logo-small logo-img logo-img-small"
                    src="<?php echo e(asset('storage/assets/site/logo/' . appSetting()->logo)); ?>"
                    srcset="<?php echo e(asset('storage/assets/site/logo/' . appSetting()->logo)); ?>" alt="logo-small">
                </a>
            </div>
            <div class="nk-header-tools">
                <ul class="nk-quick-nav">
                    <li class="dropdown notification-dropdown" data-bs-toggle="tooltip" data-bs-placement="bottom"
                        title="Home">
                        <a href="<?php echo e(url('/')); ?>" target="_blank" class="nk-quick-nav-icon">
                            <em class="icon ni ni-monitor"></em>
                        </a>
                    </li>
                    <li class="dropdown user-dropdown" data-bs-toggle="tooltip" data-bs-placement="bottom"
                        title="Profile">
                        <a href="#" class="dropdown-toggle me-n1" data-bs-toggle="dropdown">
                            <div class="user-toggle">
                                <div class="user-avatar sm">
                                    <em class="icon ni ni-user-alt"></em>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                <div class="user-card">
                                    <div class="user-avatar">
                                        <span>
                                            A</span>
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text"><?php echo e(auth()->user()->name); ?></span>
                                        <span class="sub-text"><?php echo e(auth()->user()->email); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">

                                    <li><a class="dark-switch" href="#"><em
                                                class="icon ni ni-moon"></em><span>Dark Mode</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="<?php echo e(url('logout')); ?>"><em class="icon ni ni-signout"></em><span>Log
                                                Out</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div><!-- .nk-header-wrap -->
    </div><!-- .container-fliud -->
</div>
<?php /**PATH C:\TUBES WAD\telshop\resources\views/admin/components/_header.blade.php ENDPATH**/ ?>