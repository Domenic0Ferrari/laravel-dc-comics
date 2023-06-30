@extends('layouts.base')
@section('contents')

<h2 class="text-center">Inserisci un nuovo fumetto</h2>
<div class="container">

    <form method="POST" action="{{ route('comics.store') }}">
        @csrf {{-- è necessario per motivi di sicurezza, genera il token --}}
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{old('description')}}">
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{old('thumb')}}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{old('price')}}">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" name="series" value="{{old('series')}}">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Date</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{old('sale_date')}}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type" value="{{old('type')}}">
        </div>
    
        <button class="btn btn-primary">Salva</button>
    </form>
</div>

@endsection