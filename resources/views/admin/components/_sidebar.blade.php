<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="javascript:void(0);" class="logo-link nk-sidebar-logo" >
               <img class="logo-light logo-img" src="{{asset('storage/assets/site/logo/' . appSetting()->logo)}}"
                    srcset="{{asset('storage/assets/site/logo/' . appSetting()->logo)}}" alt="logo">
                <img class="logo-dark logo-img" src="{{asset('storage/assets/site/logo/' . appSetting()->logo)}}"
                    srcset="{{asset('storage/assets/site/logo/' . appSetting()->logo)}}" alt="logo-dark">
                <img class="logo-small logo-img logo-img-small"
                    src="{{asset('storage/assets/site/logo/' . appSetting()->logo)}}"
                    srcset="{{asset('storage/assets/site/logo/' . appSetting()->logo)}}" alt="logo-small">
            </a>
        </div>
        <div class="nk-menu-trigger me-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em
                    class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex"
                data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Dasbor</h6>
                    </li>

                    <li class="nk-menu-item">
                        <a href="{{ url('dashboard/overview') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-home-alt"></em></span>
                            <span class="nk-menu-text">Ikhtisar</span>
                        </a>
                    </li>
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Aplikasi</h6>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ url('dashboard/orders') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-clipboard"></em></span>
                            <span class="nk-menu-text">Pesanan</span>
                        </a>
                    </li>

                    <li class="nk-menu-item">
                        <a href="{{ url('dashboard/shippings') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-truck"></em></span>
                            <span class="nk-menu-text">Pengiriman</span>
                        </a>
                    </li>
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Master</h6>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ url('dashboard/category') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-tags"></em></span>
                            <span class="nk-menu-text">Kategori</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ url('dashboard/products') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-bag"></em></span>
                            <span class="nk-menu-text">Produk</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ url('dashboard/users') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                            <span class="nk-menu-text">Pengguna</span>
                        </a>
                    </li>
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Situs</h6>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ url('dashboard/settings') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-setting-fill"></em></span>
                            <span class="nk-menu-text">Pengaturan</span>
                        </a>
                    </li>
                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>
