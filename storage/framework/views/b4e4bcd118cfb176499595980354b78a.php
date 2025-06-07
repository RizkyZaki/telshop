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
                                    <p><?php echo e($heading); ?></p>
                                </div>
                                <div class="nk-block-head-content">

                                    <a href="<?php echo e(url('dashboard/category/create')); ?>" class="btn btn-primary create"><em
                                            class="icon ni ni-plus"></em> <span>
                                            Tambah</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-preview">
                        <div class="card-inner">
                            <table class="datatable-init table " data-auto-responsive="false">
                                <thead>
                                    <tr>
                                        <th class="nk-tb-col nk-tb-col-check">
                                            #
                                        </th>
                                        <th class="nk-tb-col">Nama Kategori</th>
                                        <th class="nk-tb-col tb-col-mb">Jumlah Produk</th>
                                        <th class="nk-tb-col tb-col-mb">Dibuat Pada</th>
                                        <th class="nk-tb-col nk-tb-col-tools text-end"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no = 1;
                                    ?>
                                    <?php $__currentLoopData = $collection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="">
                                            <td class="nk-tb-col">
                                                <?php echo e($no++); ?>

                                            </td>
                                            <td class="nk-tb-col"><span class=""><?php echo e($item->name); ?></span></td>
                                            <td class="nk-tb-col tb-col-mb"><span
                                                    class=""><?php echo e($item->products()->count()); ?></span>
                                            </td>
                                            <td class="nk-tb-col tb-col-mb"><span
                                                    class=""><?php echo e(timesInd($item->created_at)); ?></span>
                                            </td>
                                            <td class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">
                                                    <li>
                                                        <div class="dropdown">
                                                            <a href="#"
                                                                class="dropdown-toggle btn btn-icon btn-trigger"
                                                                data-bs-toggle="dropdown"><em
                                                                    class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="<?php echo e(url('dashboard/category/' . $item->slug . '/edit')); ?>"
                                                                            ><em
                                                                                class="icon ni ni-pen"></em><span>Sunting</span></a>
                                                                    </li>
                                                                    <li><a href="javascript:void(0);" data-url="category"
                                                                            data-identity=<?php echo e($item->slug); ?>

                                                                            class="delete"><em
                                                                                class="icon ni ni-trash"></em><span>Hapus</span></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div><!-- .card-preview -->
                    </div> <!-- nk-block -->
                </div>
            </div>
        </div>
    </div>
    <?php $__env->startPush('customJs'); ?>
         <script>
            let csrfToken = $('meta[name="csrf-token"]').attr("content");
        </script>
        <script src="<?php echo e(url('custom/js/delete.js')); ?>"></script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\School\S4\PAW\telshop\resources\views/admin/pages/category/index.blade.php ENDPATH**/ ?>