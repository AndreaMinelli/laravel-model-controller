<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    @yield('cdns')
    @vite('resources/js/app.js')
</head>

<body>
    @include('includes.header')
    <main>
        @yield('main-contents')
    </main>
</body>

</html>
