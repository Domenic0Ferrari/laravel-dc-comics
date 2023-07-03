@extends('layouts.base')

@section('contents')
    <div class="container">
        <h1 class="text-center">I fumetti eliminati!</h1>
        {{-- @if (session('delete_success'))
        @php $comic = (session('delete_success')) @endphp
        <div class="alert alert-danger">
            Il fumetto "{{ $comic->title }}" è stato eliminato
            <form action="{{ route('comics.restore', ['comic' => $comic]) }}" method="POST">
            @csrf
            <button class="btn btn-warning">Restore</button>
            </form>
        </div>
        @endif 

        @if (session('restore_success'))
        @php $comic = (session('restore_success')) @endphp
        <div class="alert alert-success">
            Il fumetto "{{ $comic->title }}" è stato ripristinato
        </div>
        @endif --}}

        <div class="row mb-3">
            @foreach ($trashedComics as $comic)
            <div class="col-4">
                <div class="card">
                    <img src="{{ $comic->thumb }}" class="mx-auto d-block" alt="{{ $comic->title }}">
                    <div class="card-body">
                        <h5 class="card-title pb-3">{{ $comic->title }}</h5>
                        <p class="card-text">{{ $comic->type }}</p>
                        <form 
                        action="{{ route('comics.restore', ['comic' => $comic->id]) }}"
                        method="POST"
                        class="d-inline-block">
                        @csrf
                            <button class="btn btn-success">Restore</button>
                        </form>
                    {{-- <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-primary">Ripristina</a> --}}
                        {{-- <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="btn btn-warning">Edit</a> --}}
                        {{-- <form 
                        action="{{ route('comics.restore', ['comic' => $comic->id]) }}"
                        method="POST"
                        class="d-inline-block">
                            @csrf
                            @method('trashed')
                            <button class="btn btn-success">Restore</button>
                        </form> --}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{ $trashedComics->links() }}
        <a href="{{ route('comics.create') }}" class="btn btn-primary mb-3">New</a>
    </div>
@endsection