@extends('layouts.base')

@section('contents')
    <div class="container">
        <h1 class="text-center">I nostri fumetti!</h1>
        @if (session('delete_success'))
        <div class="alert alert-danger">
            {{ session('delete_success') }}
        </div>
        @endif
        <div class="row mb-3">
            @foreach ($comics as $comic)
            <div class="col-4">
                <div class="card">
                    <img src="{{ $comic->thumb }}" class="mx-auto d-block" alt="{{ $comic->title }}">
                    <div class="card-body">
                        <h5 class="card-title pb-3">{{ $comic->title }}</h5>
                        <p class="card-text">{{ $comic->type }}</p>
                        <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="btn btn-warning">Edit</a>
                        <form 
                        action="{{ route('comics.destroy', ['comic' => $comic->id]) }}"
                        method="POST"
                        class="d-inline-block">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{ $comics->links() }}
        <a href="{{ route('comics.create') }}" class="btn btn-primary mb-3">New</a>
    </div>
@endsection