@extends('layouts.base')

@section('contents')
    <h1 class="text-center danger mb-4">{{ $comics->title }}</h1>
    <img src="{{ $comics->thumb }}" class="mb-4 rounded mx-auto d-block" alt="...">
    <div class="text-center h3">type: {{ $comics->series }}</div>
    <p class="mb-3">{{$comics->description}}</p>
    <div class="d-flex justify-content-center">
        <p class="text-center"><a class="btn btn-primary btn-lg" href="#" role="button">{{$comics->price}}</a></p>
        <p class="text-center"><a class="btn btn-primary btn-lg" href="#" role="button">{{$comics->price}}</a></p>
        <p class="text-center"><a class="btn btn-primary btn-lg" href="#" role="button">{{$comics->price}}</a></p>
    </div>
@endsection

