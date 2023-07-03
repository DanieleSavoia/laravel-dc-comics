@extends('layouts.base')
@section('contents')
<h1 class="text-center">Dc-Comics Shop</h1>
    <div class="container">
        <div class="row g-5">
            @foreach ($comics as $comic)
            <div class="col-sm">
                <div class="card h-100" style="width: 18rem;">
                    <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic->title }}</h5>
                        <div class="card-title">for: {{ $comic->price }}</div>
                        <div class="card-title">sale date: {{ $comic->sale_date }}</div>
                        <div>
                            <a href="{{ route('comics.show', ['comic'=>$comic ]) }}" class="btn btn-primary">Comic Details</a>
                            <a href="{{ route('comics.create') }}" class="btn btn-success">New</a>
                            <a href="{{ route('comics.show', ['comic'=>$comic ]) }}" class="btn btn-danger">X</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
    


    
