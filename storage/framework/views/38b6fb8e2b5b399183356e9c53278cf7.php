<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <?php echo $__env->make('admin.plugins._top', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="overlay"></div>
    <div class="spanner">
        <div class="loader"></div>
    </div>
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            <?php echo $__env->make('admin.components._sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap">
                <!-- main header @s -->
                <?php echo $__env->make('admin.components._header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <?php echo $__env->yieldContent('content-admin'); ?>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                <!-- footer @e -->
                <?php echo $__env->make('admin.components._footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- select region modal -->
    <!-- JavaScript -->
    <?php echo $__env->make('admin.plugins._bottom', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</body>

</html>
<?php /**PATH D:\School\S4\PAW\telshop\resources\views/admin/layout/main.blade.php ENDPATH**/ ?>