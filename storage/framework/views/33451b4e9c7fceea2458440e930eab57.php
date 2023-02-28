<form name="form_opdracht" id="form_opdracht" method="POST" action="/listings">
    <?php echo csrf_field(); ?>
    <div>
        <label>Email:</label>
        <input type="text" name="email" value="<?php echo e(old('email')); ?>">
        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p style="color: red">Email moet ingevuld worden.</p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    </div>
    <div>
        <label>Opdracht:</label>
        <input type="text" name="opdracht" value="<?php echo e(old('opdracht')); ?>">
        <?php $__errorArgs = ['opdracht'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p style="color: red;">Email moet ingevuld worden.</p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div>
        <label>Opdracht omschrijving:</label>
        <input type="text" name="opdracht_omschrijving" value="<?php echo e(old('opdracht_omschrijving')); ?>">
        <?php $__errorArgs = ['opdracht_omschrijving'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p style="color: red;">Email moet ingevuld worden.</p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div>
        <button type="submit" name="submitOpdracht">Aanmaken</button>
    </div>
</form>
<a href="/">Terug</a>
<?php /**PATH C:\xampp2\htdocs\laravel\Laravel\resources\views/listings/create.blade.php ENDPATH**/ ?>