<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        width: 1200px;
        margin: auto;
        background-color: #303030;
    }

    .cards {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .card {
        display: flex;
        flex-direction: column;
        justify-content: center;
        width: 25%;
        margin: 1.5rem;
        padding: 2rem;
        background-color: greenyellow;
        min-height: 150px;
        border-radius: 5px;
    }

    h2 {
        text-align: center;
        margin-bottom: 1.5rem;
    }
    </style>
</head>

<body>
    <div class="cards">
        @foreach($movies AS $movie)
        <div class="card">
            <h2>{{$movie['title']}}</h2>
            <span> <strong>Original Title: </strong> {{$movie['original_title']}}</span>
            <span> <strong> Nazionalità: </strong> {{$movie['nationality']}}</span>
            <span> <strong> Date: </strong> {{$movie['date']}}</span>
            <span> <strong> Vote: </strong> {{$movie['vote']}}</span>

        </div>
        @endforeach

    </div>
</body>

</html>