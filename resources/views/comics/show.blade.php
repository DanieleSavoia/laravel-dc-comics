@extends('layouts.base')

@section('contents')
    <h1 class="text-center danger mb-4">{{ $comic->title }}</h1>
    <img src="{{ $comic->thumb }}" class="mb-4 rounded mx-auto d-block" alt="...">
    <div class="text-center h3">type: {{ $comic->series }}</div>
    <p class="mb-3">{{$comic->description}}</p>
    <div class="d-flex justify-content-center">
        <p class="text-center"><a class="btn btn-primary btn-lg" href="#" role="button">{{$comic->price}}</a></p>
    </div>
@endsection

