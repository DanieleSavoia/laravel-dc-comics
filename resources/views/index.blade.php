<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite('resources/js/app.js')
</head>

<body>
    <h1 class="text-center">Dc-Comics Shop</h1>
    <div class="container">
        <div class="row g-5">
            @foreach ($comics as $comic)
            <div class="col-sm">
                <div class="card h-100" style="width: 18rem;">
                    <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic->title }}</h5>
                        <div class="card-title">type: {{ $comic->series }}</div>
                        <div class="card-title">for: {{ $comic->price }}</div>
                        <div class="card-title">sale date: {{ $comic->sale_date }}</div>
                        <a href="{{ $comic->id }}" class="btn btn-primary">Comic Details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>



</body>

</html>