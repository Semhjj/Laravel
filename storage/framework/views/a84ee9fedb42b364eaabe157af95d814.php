<?php if(session()->has('message')): ?>
    <div style="position: absolute; top: 15px; left: 150px">
        <p><?php echo e(session('message')); ?></p>
    </div>
<?php endif; ?>
<?php /**PATH C:\xampp2\htdocs\laravel\Laravel\resources\views/components/flash-message.blade.php ENDPATH**/ ?>