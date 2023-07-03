@extends('layouts.base')

@section('contents')
    <h1>Inserisci nuovo Fumetto</h1>

    <form method="POST" action="{{ route('comics.store') }}">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input
                type="text"
                class="form-control @error('title') is-invalid @enderror"
                id="title"
                name="title"
                value="{{ old('title') }}"
            >
            <div class="invalid-feedback">
                @error('title') {{ $message }} @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input
                type="text"
                class="form-control @error('thumb') is-invalid @enderror"
                id="thumb"
                name="thumb"
                value="{{ old('thumb') }}"
            >
            <div class="invalid-feedback">
                @error('thumb') {{ $message }} @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">series</label>
            <input
                type="text"
                class="form-control @error('series') is-invalid @enderror"
                id="series"
                name="series"
                value="{{ old('series') }}"
            >
            <div class="invalid-feedback">
                @error('series') {{ $message }} @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <textarea
                class="form-control @error('description') is-invalid @enderror"
                id="description"
                rows="3"
                name="description">{{ old('description') }}</textarea>
            <div class="invalid-feedback">
                @error('description') {{ $message }} @enderror
            </div>
        </div>
        <button class="btn btn-primary">Salva</button>
    </form>
@endsection