@extends('layouts.app')

@section('title', 'Index')

@section('main-content')
<section class="mt-5 py-1">
    <div class="container bg-dark py-4">
        <h1 class="title text-center text-success">Index!</h1>
    </div>
</section>


<section class="mb-5 py-1">
    <div class="bg-light container py-4">
        <div class="row">
            @foreach ($movies as $movie)

                <div class="col-4">
                    <div class="card">
                        <img src="{{$movie->thumb}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$movie->title}}</h5>
                            <p class="card-text">{{$movie->release_date}}</p>
                            <a href="{{route('movies.show', $movie)}}" class="btn btn-primary">Scopri di più</a>
                        </div>
                    </div>
                    
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection