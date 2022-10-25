

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Register Individual')); ?></div>

                <div class="card-body">
                    <form id="myForm">
                        <?php echo csrf_field(); ?>
 
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><?php echo e(__('First Name')); ?></label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" autocomplete="name" autofocus>
                                <span class="invalid-feedback" role="alert">
                                    <strong id="name-error"></strong>
                                </span>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="lastname" class="col-md-4 col-form-label text-md-end"><?php echo e(__('Last Name')); ?></label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control" name="lastname" value="<?php echo e(old('lastname')); ?>" autocomplete="lastname" autofocus>

                                
                                    <span class="invalid-feedback" role="alert">
                                        <strong id="lastname-error"></strong>
                                    </span>
                                
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end"><?php echo e(__('Address')); ?></label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="<?php echo e(old('address')); ?>" autocomplete="address" autofocus>

                                
                                    <span class="invalid-feedback" role="alert">
                                        <strong id="address-error"></strong>
                                    </span>
                                
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="username" class="col-md-4 col-form-label text-md-end"><?php echo e(__('Username')); ?></label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="<?php echo e(old('username')); ?>" autocomplete="username" autofocus>

                                
                                    <span class="invalid-feedback" role="alert">
                                        <strong id="username-error"></strong>
                                    </span>
                                
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="phoneNumber" class="col-md-4 col-form-label text-md-end"><?php echo e(__('Phone Number')); ?></label>

                            <div class="col-md-6">
                                <input id="phoneNumber" type="tel" class="form-control" name="phoneNumber" value="<?php echo e(old('phoneNumber')); ?>" autocomplete="phoneNumber" autofocus>

                                
                                    <span class="invalid-feedback" role="alert">
                                        <strong id="phoneNumber-error"></strong>
                                    </span>
                                
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end"><?php echo e(__('Password')); ?></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" autocomplete="new-password">

                                
                                    <span class="invalid-feedback" role="alert">
                                        <strong id="password-error"></strong>
                                    </span>
                                
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end"><?php echo e(__('Confirm Password')); ?></label>
                            <div class="col-md-6">
                                <input id="password_confirm" type="password" class="form-control" name="password_confirm" autocomplete="new-password">
                                <span class="invalid-feedback" role="alert">
                                    <strong id="password_confirm-error"></strong>
                                </span>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button id="submitButton" type="button" class="btn btn-primary" ><?php echo e(__('Register')); ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="/js/oauth/register.js"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel1\resources\views/oauth/register.blade.php ENDPATH**/ ?>