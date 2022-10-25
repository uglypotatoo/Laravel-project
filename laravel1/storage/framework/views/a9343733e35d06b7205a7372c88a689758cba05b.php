
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Verify Your Phone Number')); ?></div>
                <div class="card-body">
                    <?php if(session('error')): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo e(session('error')); ?>

                    </div>
                    <?php endif; ?>
                    Please enter the OTP sent to your number: <?php echo e(session('phone_number')); ?>

                    <form action="/verify" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="form-group row">
                            <label for="verification_code"
                                class="col-md-4 col-form-label text-md-right"><?php echo e(__('Phone Number')); ?></label>
                            <div class="col-md-6">
                                <input type="hidden" name="phone_number" value="<?php echo e(session('phone_number')); ?>">
                                <input id="verification_code" type="tel"
                                    class="form-control <?php $__errorArgs = ['verification_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="verification_code" value="<?php echo e(old('verification_code')); ?>" required>
                                <?php $__errorArgs = ['verification_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Verify Phone Number')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel1\resources\views/oauth/verify.blade.php ENDPATH**/ ?>