<div>
    <h2>Opdracht verwijderen</h2>

   <p>Email: <?php echo e($todo['email']); ?></p>
   <p>Opdracht: <?php echo e($todo['opdracht']); ?></p>
   <p>Opdracht omschrijving: <?php echo e($todo['opdracht_omschrijving']); ?></p>
    <form method="POST" action="/listings/<?php echo e($todo['id']); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <p>Wil je de opdracht verwijderen?</p>

        <a href="/">Terug</a>
        <button type="submit">Verwijderen</button>
    </form>
</div>
<?php /**PATH C:\xampp2\htdocs\laravel\Laravel\resources\views/listings/tussenpagina.blade.php ENDPATH**/ ?>