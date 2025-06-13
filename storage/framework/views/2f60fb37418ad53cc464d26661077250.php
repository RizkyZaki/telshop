<?php $__env->startSection('content'); ?>
    <a href="#top" class="back-to-top" id="backto-top"><i class="fal fa-arrow-up"></i></a>
    <div id="axil-sticky-placeholder"></div>
    <header>
        <div class="axil-mainmenu">
            <div class="container">
                <div class="header-navbar">
                    <div class="header-brand">
                        <a href="<?php echo e(url('/')); ?>" class="logo logo-dark">
                            <img src="<?php echo e(asset('storage/assets/site/logo/' . appSetting()->logo)); ?>" alt="Site Logo"
                                width="120" height="50">
                        </a>
                    </div>
                    <div class="header-main-nav">
                        <nav class="mainmenu-nav">
                            <button class="mobile-close-btn mobile-nav-toggler"><i class="fas fa-times"></i></button>
                            <div class="mobile-nav-brand">
                                <a href="<?php echo e(url('/')); ?>" class="logo">
                                    <img src="<?php echo e(asset('storage/assets/site/logo/' . appSetting()->logo)); ?>" alt="Site Logo"
                                        width="80" height="40">
                                </a>
                            </div>
                            <ul class="mainmenu">
                                <li><a href="<?php echo e(url('/')); ?>">Beranda</a></li>
                                <li><a href="<?php echo e(url('products')); ?>">Semua Produk</a></li>
                                <li><a href="<?php echo e(url('categories')); ?>">Semua Kategori</a></li>
                                <?php if(auth()->check()): ?>
                                    <?php if(auth()->user()->role != 'buyer'): ?>
                                        <li>
                                            <a href="<?php echo e(url('dashboard')); ?>">Dashboard</a>
                                        </li>
                                    <?php else: ?>
                                        <li>
                                            <a href="<?php echo e(url('logout')); ?>">Logout</a>
                                        </li>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <li><a href="<?php echo e(url('login')); ?>">Login</a></li>
                                <?php endif; ?>
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
                                <li class="axil-breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Beranda</a></li>
                                <li class="separator"></li>
                                <li class="axil-breadcrumb-item"><a href=""><?php echo e($category->name); ?></a></li>
                            </ul>
                            <h1 class="title">Produk <?php echo e($category->name); ?></h1>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="inner">
                            <div class="bradcrumb-thumb">
                                <img src="<?php echo e(asset('client/images/product/product-45.png')); ?>" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Expolre Product Area  -->
        <div class="axil-product-area bg-color-white axil-section-gap">
            <div class="container">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-primary"> <i class="far fa-shopping-basket"></i>Semua Produk</span>
                    <h2 class="title">Semua Produk Terbaru Kami</h2>
                </div>
                <div
                    class="explore-product-activation slick-layout-wrapper slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide">
                    <div class="slick-single-layout">
                        <div class="row row--15">
                            <?php $__currentLoopData = $category->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                                <div class="axil-product product-style-one">
                                    <div class="thumbnail">
                                        <a href="<?php echo e(url('product/' . $item->slug)); ?>">
                                            <img data-sal="zoom-out" data-sal-delay="200" data-sal-duration="800"
                                                loading="lazy" class="main-img"
                                                src="<?php echo e(asset('storage/'. $item->image)); ?>" alt="Product Images">
                                            <img class="hover-img" src="<?php echo e(asset('storage/'. $item->image)); ?>"
                                                alt="Product Images">
                                        </a>
                                        <div class="product-hover-action">
                                            <ul class="cart-action">
                                                <li class="select-option">
                                                    <a href="https://wa.me/<?php echo e($item->user->phone); ?>">
                                                        Pesan
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="inner">
                                            <h5 class="title"><a href="<?php echo e(url('product/'.$item->slug)); ?>"><?php echo e($item->name); ?></a></h5>
                                            <div class="product-price-variant">
                                                <span class="price current-price"><?php echo e(formatIDR($item->price)); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <!-- End Single Product  -->
                        </div>
                    </div>
                    <!-- End .slick-single-layout -->
                    <!-- End .slick-single-layout -->
                </div>

            </div>
        </div>
    </main>

    <!-- Start Footer Area  -->
    <footer class="axil-footer-area footer-style-2">
        <!-- End Footer Top Area  -->
        <!-- Start Copyright Area  -->
        <div class="copyright-area copyright-default separator-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4">
                        <div class="social-share">
                            <a href="<?php echo e(appSetting()->fb); ?>"><i class="fab fa-facebook-f"></i></a>
                            <a href="<?php echo e(appSetting()->ig); ?>"><i class="fab fa-instagram"></i></a>
                            <a href="<?php echo e(appSetting()->twitter); ?>"><i class="fab fa-twitter"></i></a>
                            <a href="<?php echo e(appSetting()->yt); ?>"><i class="fab fa-youtube"></i></a>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\TUBES WAD\telshop\resources\views/client/category.blade.php ENDPATH**/ ?>