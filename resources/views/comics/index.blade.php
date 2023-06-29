@extends('layouts.base')

@section('contents')
    <div class="container">
        <h1 class="text-center">I nostri fumetti!</h1>

        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-4">
                <div class="card">
                    <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic->title }}</h5>
                        <p class="card-text">{{ $comic->type }}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
    </div>
@endsection