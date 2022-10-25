

<?php $__env->startSection('content'); ?>
<?php echo e(Auth::user()->role); ?>

testing
<div id="qrcode"></div>

<div id="user"><?php echo e(Auth::user()->username); ?> </div>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.js"></script>
<script>
    $(document).ready(function(){
        var qrc = new QRCode(document.getElementById("qrcode"), "http://site.com/"+ $("#user").text());
    });
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel1\resources\views/individual/home.blade.php ENDPATH**/ ?>