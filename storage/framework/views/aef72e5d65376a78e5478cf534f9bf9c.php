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
                                <li class="axil-breadcrumb-item"><a href=""><?php echo e($product->name); ?></a></li>
                            </ul>
                            <h1 class="title"><?php echo e($product->name); ?></h1>
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
        <div class="axil-blog-area axil-section-gap">
            <div class="axil-single-post post-formate post-standard">
                <div class="container">
                    <div class="content-block">
                        <div class="inner">
                            <div class="post-thumbnail">
                                <img src="<?php echo e(asset('storage/' . $product->image)); ?>" width="80%" alt="blog Images">
                            </div>
                            <!-- End .thumbnail -->
                        </div>
                    </div>
                    <!-- End .content-blog -->
                </div>
            </div>
            <!-- End .single-post -->
            <div class="post-single-wrapper position-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1">
                            <div class="d-flex flex-wrap align-content-start h-100">
                                <div class="position-sticky sticky-top">
                                    <div class="post-details__social-share">
                                        <span class="share-on-text">Share on:</span>
                                        <div class="social-share">
                                            <a href="<?php echo e(appSetting()->fb); ?>"><i class="fab fa-facebook-f"></i></a>
                                            <a href="<?php echo e(appSetting()->ig); ?>"><i class="fab fa-instagram"></i></a>
                                            <a href="<?php echo e(appSetting()->twitter); ?>"><i class="fab fa-twitter"></i></a>
                                            <a href="<?php echo e(appSetting()->yt); ?>"><i class="fab fa-youtube"></i></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 axil-post-wrapper">
                            <div class="post-heading">
                                <h2 class="title"><?php echo e($product->name); ?>.</h2>
                                <div class="axil-post-meta">
                                    <div class="post-meta-content">
                                        <h6 class="author-title">
                                            <a href="#"><?php echo e($product->user->name); ?></a>
                                        </h6>
                                        <ul class="post-meta-list">
                                            <li><?php echo e(timesInd($product->created_at)); ?></li>
                                            <li><?php echo e($product->stock); ?> Stok</li>
                                            <li><?php echo e(formatIDR($product->price)); ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php echo $product->description; ?>

                            <!-- End Comment Respond  -->
                            <button class="buy btn btn-lg btn-primary">Beli</button>

                        </div>

                        <div class="col-lg-4">
                            <aside class="axil-sidebar-area">
                                <div class="axil-single-widget mt--40 widget_search">
                                    <h6 class="widget-title">Cari Produk</h6>
                                    <form class="blog-search" action="<?php echo e(url('search')); ?>">
                                        <button class="search-button"><i class="fal fa-search"></i></button>
                                        <input type="text" name="search" placeholder="Search">
                                    </form>
                                </div>
                                <!-- End Single Widget  -->

                            </aside>
                            <!-- End Sidebar Area -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Blog Area  -->
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

<?php echo $__env->make('client.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\TUBES WAD\telshop\resources\views/client/product.blade.php ENDPATH**/ ?>