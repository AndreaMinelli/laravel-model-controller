<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    @vite('resources/js/app.js')
</head>

<body>
    @include('includes.header')
    <main>
        <div class="container">
            <h1 class="text-center my-4 text-white">Movie in Room</h1>
            <div class="row row-cols-3 gy-4">
                @foreach ($movies as $movie)
                    <div class="col">
                        @include('movie.card')
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</body>

</html>
