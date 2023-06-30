<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite('resources/js/app.js')
</head>

<body>
    <h1 class="text-center danger mb-4">{{$comics->title}}</h1>
    <img src="{{ $comics->thumb }}" class="mb-4 rounded mx-auto d-block" alt="...">
    <p class="mb-3">{{$comics->description}}</p>
    <p class="text-center"><a class="btn btn-primary btn-lg" href="#" role="button">{{$comics->price}}</a></p>
</body>