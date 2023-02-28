<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <script src="//unpkg.com/alpine.js" defer></script>
</head>
<body>
<x-flash-message />
<h1>Prikbord</h1>
@yield('content')
<a href="listings/create">Aanmaken Opdracht</a>
</body>
</html>
