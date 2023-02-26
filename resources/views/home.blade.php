<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME')}} | @yield('title')</title>
    <!-- Styles -->
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container pt-5">
        <div class="row mt-5 g-3">                
                @foreach ($movies as $movie)
                <div class="card text-white mx-2" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$movie->title}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$movie->date}}</h6>
                        <p class="card-text">{{$movie->nationality}}</p>
                        <p class="card-text">{{$movie->vote}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</body>
</html>