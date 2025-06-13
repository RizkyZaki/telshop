<?php $__env->startSection('content-admin'); ?>
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">

                <div class="nk-block nk-block-lg">
                    <div class="nk-block-head">
                        <div class="nk-block-head nk-block-head-sm">
                            <div class="nk-block-between">
                                <div class="nk-block-head-content">
                                    <h4 class="nk-block-title"><?php echo e($title); ?></h4>
                                    <p>Haloo</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-block">
                    <ul class="row g-gs preview-icon-svg">
                        <li class="col-lg-4 col-sm-6 col-12">
                            <div class="card is-dark h-100">
                                <div class="nk-ecwg nk-ecwg1">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title text-white">Total</h6>
                                            </div>
                                            <div class="card-tools">
                                                <a href="<?php echo e(url('dashboard/users')); ?>" class="text-white">Lihat
                                                    Semua</a>
                                            </div>
                                        </div>
                                        <div class="data">
                                            <div class="amount"><?php echo e($userCount); ?></div>
                                            <div class="info text-white">Pengguna</div>
                                        </div>
                                    </div><!-- .card-inner -->
                                </div><!-- .nk-ecwg -->
                            </div><!-- .card -->
                        </li><!-- .col -->
                        <li class="col-lg-4 col-sm-6 col-12">
                            <div class="card bg-info h-100">
                                <div class="nk-ecwg nk-ecwg1">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title text-white">Total</h6>
                                            </div>
                                            <div class="card-tools">
                                                <a href="<?php echo e(url('dashboard/category')); ?>" class="text-white">Lihat
                                                    Semua</a>
                                            </div>
                                        </div>
                                        <div class="data">
                                            <div class="amount text-white"><?php echo e($categoryCount); ?></div>
                                            <div class="info text-white">Kategori</div>
                                        </div>
                                    </div><!-- .card-inner -->
                                </div><!-- .nk-ecwg -->
                            </div><!-- .card -->
                        </li><!-- .col -->
                        <li class="col-lg-4 col-sm-6 col-12">
                            <div class="card bg-success h-100">
                                <div class="nk-ecwg nk-ecwg1">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title text-white">Total</h6>
                                            </div>
                                            <div class="card-tools">
                                                <a href="<?php echo e(url('dashboard/products')); ?>" class="text-white">Lihat
                                                    Semua</a>
                                            </div>
                                        </div>
                                        <div class="data">
                                            <div class="amount text-white"><?php echo e($productCount); ?></div>
                                            <div class="info text-white">Produk</div>
                                        </div>
                                    </div><!-- .card-inner -->
                                </div><!-- .nk-ecwg -->
                            </div><!-- .card -->
                        </li><!-- .col -->
                        <li class="col-lg-12 col-sm-12 col-12">
                            <div class="card card-bordered">
                                <div class="card-inner">
                                    <div class="card-title-group align-start mb-2">
                                        <div class="card-title">
                                            <h6 class="title">Grafik Visitor</h6>
                                            <p>Hasil Visitor</p>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="data-group">
                                            <div id="visitorChart">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li><!-- .col -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const options = {
                chart: {
                    type: 'line',
                    height: 300
                },
                series: [{
                    name: 'Pengunjung',
                    data: <?php echo json_encode($monthlyData, 15, 512) ?>
                }],
                xaxis: {
                    categories: [
                        'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
                        'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'
                    ]
                },
                stroke: {
                    curve: 'smooth'
                },
                colors: ['#008FFB']
            };

            const chart = new ApexCharts(document.querySelector("#visitorChart"), options);
            chart.render();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\School\S4\PAW\telshop\resources\views/admin/pages/dashboard.blade.php ENDPATH**/ ?>