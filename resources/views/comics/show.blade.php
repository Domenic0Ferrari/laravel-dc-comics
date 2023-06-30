@extends('layouts.base')
@section('contents')
<div class="container">
    <h1 class="text-center">{{ $comic->title }}</h1>
    <h2 class="text-center">{{ $comic->type }}</h2>
    <p>{{ $comic->description }}</p>
    <ul>
        <li class="list-group-item">Prezzo: ${{ $comic->price }}</li>
        <li class="list-group-item">Data di uscita: {{ $comic->sale_date }}</li>
        <li class="list-group-item">Serie: {{ $comic->series }}</li>
    </ul>
    <img src="{{ $comic->thumb }}" alt="#" class="mx-auto d-block">
</div>
@endsection