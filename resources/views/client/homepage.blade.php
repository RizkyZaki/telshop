@extends('client.main')
@section('content')
    <a href="#top" class="back-to-top" id="backto-top"><i class="fal fa-arrow-up"></i></a>
    <div id="axil-sticky-placeholder"></div>
    <header>
        <div class="axil-mainmenu">
            <div class="container">
                <div class="header-navbar">
                    <div class="header-brand">
                        <a href="{{ url('/') }}" class="logo logo-dark">
                            <img src="{{ asset('storage/assets/site/logo/' . appSetting()->logo) }}" alt="Site Logo"
                                width="120" height="50">
                        </a>
                    </div>
                    <div class="header-main-nav">
                        <nav class="mainmenu-nav">
                            <button class="mobile-close-btn mobile-nav-toggler"><i class="fas fa-times"></i></button>
                            <div class="mobile-nav-brand">
                                <a href="{{ url('/') }}" class="logo">
                                    <img src="{{ asset('storage/assets/site/logo/' . appSetting()->logo) }}" alt="Site Logo"
                                        width="80" height="40">
                                </a>
                            </div>
                            <ul class="mainmenu">
                                <li><a href="{{ url('/') }}">Beranda</a></li>
                                <li><a href="{{ url('products') }}">Semua Produk</a></li>
                                <li><a href="{{ url('my-order') }}">Pesanan Saya</a></li>
                                @if (auth()->check())
                                    @if(auth()->user()->role != 'buyer')
                                        <li>
                                            <a href="{{ url('dashboard') }}">Dashboard</a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ url('logout') }}">Logout</a>
                                        </li>
                                    @endif
                                @else
                                    <li><a href="{{ url('login') }}">Login</a></li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="main-wrapper">
        <div class="axil-breadcrumb-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="inner">
                            <ul class="axil-breadcrumb">
                                <li class="axil-breadcrumb-item"><a href="{{url('/')}}">Beranda</a></li>
                                <li class="separator"></li>
                            </ul>
                            <h1 class="title">Beranda</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="inner">
                            <div class="bradcrumb-thumb">
                                <img src="client/images/product/product-45.png" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Categorie Area  -->
        <div class="axil-categorie-area bg-color-white axil-section-gapcommon">
            <div class="container">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-secondary"> <i class="far fa-tags"></i>
                        Kategori</span>
                    <h2 class="title">Kategori Kami</h2>
                </div>
                <div class="categrie-product-activation slick-layout-wrapper--15 axil-slick-arrow  arrow-top-slide">
                    @foreach ($category as $item)
                        <div class="slick-single-layout">
                            <div class="categrie-product" data-sal="zoom-out" data-sal-delay="200" data-sal-duration="500">
                                <a href="{{url('category/' . $item->slug)}}">
                                    <h6 class="cat-title">{{$item->name}}</h6>
                                </a>
                            </div>
                        </div>
                    @endforeach
                    <!-- End .slick-single-layout -->
                </div>
            </div>
        </div>
        <!-- End Categorie Area  -->

        <!-- Start Expolre Product Area  -->
        <div class="axil-product-area bg-color-white axil-section-gap">
            <div class="container">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-primary"> <i class="far fa-shopping-basket"></i>Produk Terbaru Kami</span>
                    <h2 class="title">Eksplor Produk Terbaru Kami</h2>
                </div>
                <div
                    class="explore-product-activation slick-layout-wrapper slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide">
                    <div class="slick-single-layout">
                        <div class="row row--15">
                            @foreach ($products as $item)

                            <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                                <div class="axil-product product-style-one">
                                    <div class="thumbnail">
                                        <a href="{{url('product/' . $item->slug)}}">
                                            <img data-sal="zoom-out" data-sal-delay="200" data-sal-duration="800"
                                                loading="lazy" class="main-img"
                                                src="{{asset('storage/'. $item->image)}}" alt="Product Images">
                                            <img class="hover-img" src="{{asset('storage/'. $item->image)}}"
                                                alt="Product Images">
                                        </a>
                                        <div class="product-hover-action">
                                            <ul class="cart-action">
                                                <li class="select-option">
                                                    <a href="https://wa.me/{{$item->user->phone}}">
                                                        Pesan
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="inner">
                                            <h5 class="title"><a href="{{url('products/'.$item->slug)}}">{{$item->name}}</a></h5>
                                            <div class="product-price-variant">
                                                <span class="price current-price">{{formatIDR($item->price)}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- End Single Product  -->
                        </div>
                    </div>
                    <!-- End .slick-single-layout -->
                    <!-- End .slick-single-layout -->
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center mt--20 mt_sm--0">
                        <a href="{{url('products')}}" class="axil-btn btn-bg-lighter btn-load-more">Lihat Semua</a>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Expolre Product Area  -->
        <!-- Start Why Choose Area  -->
        <div class="axil-why-choose-area pb--50 pb_sm--30">
            <div class="container">
                <div class="section-title-wrapper section-title-center">
                    <span class="title-highlighter highlighter-secondary"><i class="fal fa-thumbs-up"></i>Kenapa Kami</span>
                    <h2 class="title">Kenapa Memilih Kami</h2>
                </div>
                <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 row--20">
                    <div class="col">
                        <div class="service-box">
                            <div class="icon">
                                <img src="/client/images/icons/service6.png" alt="Service">
                            </div>
                            <h6 class="title">Fast &amp; Secure Delivery</h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="service-box">
                            <div class="icon">
                                <img src="./client/images/icons/service7.png" alt="Service">
                            </div>
                            <h6 class="title">100% Guarantee On Product</h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="service-box">
                            <div class="icon">
                                <img src="./client/images/icons/service8.png" alt="Service">
                            </div>
                            <h6 class="title">24 Hour Return Policy</h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="service-box">
                            <div class="icon">
                                <img src="./client/images/icons/service9.png" alt="Service">
                            </div>
                            <h6 class="title">24 Hour Return Policy</h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="service-box">
                            <div class="icon">
                                <img src="./client/images/icons/service10.png" alt="Service">
                            </div>
                            <h6 class="title">Next Level Pro Quality</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Why Choose Area  -->


        <!-- Start Axil Newsletter Area  -->
        <div class="axil-newsletter-area axil-section-gap pt--0">
            <div class="container">
                <div class="etrade-newsletter-wrapper bg_image bg_image--5">
                    <div class="newsletter-content">
                        <span class="title-highlighter highlighter-primary2"><i
                                class="fas fa-envelope-open"></i>Berlangganan</span>
                        <h2 class="title mb--40 mb_sm--30">Dapatkan Produk Terbaru Tiap Minggunya</h2>
                        <div class="input-group newsletter-form">
                            <div class="position-relative newsletter-inner mb--15">
                                <input placeholder="example@gmail.com" type="text">
                            </div>
                            <button type="submit" class="axil-btn mb--15">Langganan</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .container -->
        </div>
        <!-- End Axil Newsletter Area  -->

    </main>


    <div class="service-area">
        <div class="container">
            <div class="row row-cols-xl-4 row-cols-sm-2 row-cols-1 row--20">
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="./client/images/icons/service1.png" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">Fast &amp; Secure Delivery</h6>
                            <p>Tell about your service.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="./client/images/icons/service2.png" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">Money Back Guarantee</h6>
                            <p>Within 10 days.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="./client/images/icons/service3.png" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">24 Hour Return Policy</h6>
                            <p>No question ask.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="./client/images/icons/service4.png" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">Pro Quality Support</h6>
                            <p>24/7 Live support.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Footer Area  -->
    <footer class="axil-footer-area footer-style-2">
        <!-- End Footer Top Area  -->
        <!-- Start Copyright Area  -->
        <div class="copyright-area copyright-default separator-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4">
                        <div class="social-share">
                            <a href="{{appSetting()->fb}}"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{appSetting()->ig}}"><i class="fab fa-instagram"></i></a>
                            <a href="{{appSetting()->twitter}}"><i class="fab fa-twitter"></i></a>
                            <a href="{{appSetting()->yt}}"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="copyright-left d-flex flex-wrap justify-content-center">
                            <ul class="quick-link">
                                <li>© 2025. All rights reserved by <a target="_blank"
                                        href="telkomuniversity.ac.id">Mahasiswa</a>.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copyright Area  -->
    </footer>
    <!-- End Footer Area  -->
    <div class="closeMask"></div>
@endsection
