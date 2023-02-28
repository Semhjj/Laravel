<?php $__env->startSection('content'); ?>



    <?php $__currentLoopData = $to_dos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p>id: <?php echo e($todo->id); ?></p>
        <p>Voornaam: <?php echo e($todo->email); ?></p>
        <p>Achternaam: <?php echo e($todo->opdracht); ?></p>
        <p>Email: <?php echo e($todo->opdracht_omschrijving); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\laravel\Laravel\resources\views/index.blade.php ENDPATH**/ ?>