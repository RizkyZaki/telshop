<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('admin.plugins._top', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

</head>


<body class="nk-body bg-white npc-default pg-error">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle wide-md mx-auto">
                        <div class="nk-block-content nk-error-ld text-center">
                            <img class="nk-error-gfx" src="<?php echo e(asset('client/404.png')); ?>" alt="">
                            <div class="wide-xs mx-auto">
                                <h3 class="nk-error-title">Oops! Kenapa Anda Disini?</h3>
                                <p class="nk-error-text">Kami mohon maaf atas ketidaknyamanan ini. Sepertinya Anda mencoba mengakses halaman yang telah dihapus atau tidak pernah ada.</p>
                                <a href="<?php echo e(url()->previous()); ?>" class="btn btn-lg btn-primary mt-2">Kembali</a>
                            </div>
                        </div>
                    </div><!-- .nk-block -->
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <?php echo $__env->make('admin.plugins._bottom', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


</html>
<?php /**PATH D:\School\S4\PAW\telshop\resources\views/errors/404.blade.php ENDPATH**/ ?>