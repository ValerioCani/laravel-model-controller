<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>My Favourite Movies</title>
</head>
<body>
    <header class="container">
        @include('partials.title')
    </header>
    <main>
        <div class="container">
            <div id="card_container">
                @foreach ($movies as $movie)
                <div class="card">
                    <h2>{{$movie['title']}}</h2>
                    <h2>{{$movie['date']}}</h2>
                    <h2>{{$movie['vote']}}</h2>
                </div>
                @endforeach
            </div>
        </div>
    </main>
</body>
</html>
