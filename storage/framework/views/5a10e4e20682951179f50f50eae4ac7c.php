<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('admin.plugins._top', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <style>
        .bg-login {
            background-color: #ffffff;
            background-image: linear-gradient(315deg, #ffffff 0%, #d7e1ec 74%);
        }

        .btn-login {
            background-color: #1D1755;
        }

        .image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .logo-img-lg {
            max-height: 110px;
        }

        .bg-abstract {
            background-image: linear-gradient(to right,
                    #b71c1c calc(60% - 150px),
                    #c62828 calc(60% - 150px),
                    #d32f2f 60%,
                    #e53935 60%,
                    #f44336 calc(60% + 150px),
                    #ef5350 calc(60% + 150px),
                    #ef5350 calc(60% + 150px));
        }
    </style>
</head>


<body class="nk-body npc-crypto bg-white pg-auth">
    <!-- app body @s -->
    <div class="nk-app-root">
        <div class="nk-split nk-split-page nk-split-lg">
            <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white w-lg-45">
                <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                    <a href="#" class="toggle btn btn-white btn-icon btn-light" data-target="athPromo"><em
                            class="icon ni ni-info"></em></a>
                </div>
                <div class="nk-block nk-block-middle nk-auth-body">
                    <div class="brand-logo pb-3">
                        <a href="<?php echo e(url('/')); ?>" class="logo-link">
                            <img class="logo-img logo-img-lg"
                                src="<?php echo e(asset('storage/assets/site/logo/' . appSetting()->logo)); ?>"
                                srcset="<?php echo e(asset('storage/assets/site/logo/' . appSetting()->logo)); ?>" alt="logo">
                        </a>
                    </div>
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">Masuk</h5>
                            <div class="nk-block-des">
                                <p>Akses Panel Dashbor Menggunakan email dan kata sandi
                                    kamu.</p>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <form method="POST" action="<?php echo e(route('authenticated')); ?>">
                        <?php echo csrf_field(); ?>

                        <?php if(session('success')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('success')); ?>

                            </div>
                        <?php endif; ?>

                        <?php if(session('error')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(session('error')); ?>

                            </div>
                        <?php endif; ?>

                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email"
                                class="form-control form-control-lg <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                placeholder="Masukkan Email..." value="<?php echo e(old('email')); ?>" required>
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group">
                            <label for="password" class="form-label">Kata Sandi</label>
                            <input type="password" name="password" id="password"
                                class="form-control form-control-lg <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                placeholder="Masukkan Kata Sandi..." required>
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <button type="submit" class="btn btn-danger btn-lg btn-block">Masuk</button>
                    </form>
                    <div class="form-note-s2 pt-4">
                        Belum punya akun? <a href="<?php echo e(url('register')); ?>"><strong>Daftar Sekarang</strong></a>
                    </div>


                </div><!-- .nk-block -->

                <div class="nk-block nk-auth-footer">
                    <div class="mt-3">
                        <p>&copy; <?php echo e(date('Y')); ?> Telshop Official</p>
                    </div>
                </div>
            </div><!-- nk-split-content -->
            <div class="nk-split-content nk-split-stretch bg-abstract">

            </div><!-- nk-split-content -->
        </div><!-- nk-split -->
    </div><!-- app body @e -->
    <!-- JavaScript -->

    <!-- select region modal -->

</body>
<?php echo $__env->make('admin.plugins._bottom', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


</html>
<?php /**PATH C:\TUBES WAD\telshop\resources\views/admin/pages/auth/login.blade.php ENDPATH**/ ?>