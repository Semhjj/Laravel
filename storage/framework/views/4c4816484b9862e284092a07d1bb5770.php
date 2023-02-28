<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aanmaken Account</title>
</head>
<body>

<form method="POST" action="/views">
    <?php echo csrf_field(); ?>
    <div>
        <label>Email:</label>
        <input type="text" name="email">
    </div>
    <div>
        <label>Opdracht:</label>
        <input type="text" name="opdracht">
    </div>
    <div>
        <label>Opdracht omschrijving:</label>
        <input type="text" name="opdracht_omschrijving">
    </div>
    <div>
        <button type="submit" name="submitOpdracht">Aanmaken</button>
    </div>
</form>
<a href="/">Terug</a>
</body>
</html>
<?php /**PATH C:\xampp2\htdocs\laravel\Laravel\resources\views/create.blade.php ENDPATH**/ ?>