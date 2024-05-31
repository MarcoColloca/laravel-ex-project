@extends('layouts.app')

@section('title', 'Create')

@section('main-content')
<section class="mt-5 py-1">
    <div class="container bg-dark py-4">
        <h1 class="title text-center text-success">Create!</h1>
    </div>
</section>


<section class="mb-5 py-1">
    <div class="bg-light container py-4">
        <form action="{{route('movies.store')}}" method="POST">

            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="inserisci il titolo" value="{{old('title')}}">
            </div>
            
            <div class="mb-3">
                <label for="thumb" class="form-label">Url Immagine</label>
                <input type="text" name="thumb" class="form-control" id="thumb" placeholder="inserisci l'url dell'immagine" value="{{old('thumb')}}">
            </div>

            <div class="mb-3">
                <label for="director" class="form-label">Regista</label>
                <input type="text" name="director" class="form-control" id="director" placeholder="inserisci il regista" value="{{old('director')}}">
            </div>

            <div class="mb-3">
                <label for="release_date" class="form-label">Data di Uscita</label>
                <input type="date" name="release_date" class="form-control" id="release_date" placeholder="inserisci la data di uscita" value="{{old('release_date')}}">
            </div>

            <div class="mb-3">
                <label for="vote" class="form-label">Voto</label>
                <input type="number" min="0" max="5" step="0.1" name="vote" class="form-control" id="vote" placeholder="inserisci il voto (da 0 a 5)" value="{{old('vote')}}">
            </div>

            <button class="btn btn-success">Crea</button>
        </form>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</section>
@endsection