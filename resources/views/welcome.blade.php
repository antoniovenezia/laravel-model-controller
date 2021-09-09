<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <title>Laravel</title>
    </head>
    <body>

        <div class="movie">
        @foreach($allMovies as $movie)
            <h1>{{ $movie->title }}</h1><hr>
            <div><b>Lingua:</b> {{ $movie->nationality }}</div>
            <div><b>Data di uscita:</b> {{ $movie->date }}</div>
            <div><b>Feed:</b> {{ $movie->vote }}</div>
        @endforeach
        </div>

    </body>
</html>
