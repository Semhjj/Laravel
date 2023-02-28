<?php $__env->startSection('content'); ?>

    
    <div style="margin: auto; width: 1350px; display: grid; grid-template-columns: 40% 40%; grid-gap: 5%;">
        <?php $__currentLoopData = $to_dos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div style="padding: 25px; background: #8888; margin: 15px; width: 100%">
                <p>Email: <?php echo e($todo->email); ?></p>
                <p>Opdracht: <?php echo e($todo->opdracht); ?></p>
                <p>Opdracht omschrijving: <?php echo e($todo->opdracht_omschrijving); ?></p>
                <a href="/listings/<?php echo e($todo->id); ?>/edit">Opdracht aanpassen</a>
                <a href="/listings/<?php echo e($todo->id); ?>/tussenpagina">Verwijderen</a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('components.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\laravel\Laravel\resources\views/listings/index.blade.php ENDPATH**/ ?>