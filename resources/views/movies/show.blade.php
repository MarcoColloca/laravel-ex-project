@extends('layouts.app')

@section('title', 'Show')

@section('main-content')
<section class="mt-5 py-1">
    <div class="container bg-dark py-4">
        <h1 class="title text-center text-success">Index!</h1>
    </div>
</section>


<section class="mb-5 py-1">
    <div style="height:200px; background-image:url('{{$movie->thumb}}')">

    </div>

    <div class="bg-light container py-4">
        <h3>{{$movie->title}}</h3>
        <p>{{$movie->director}}</p>
        <p>{{$movie->release_date}}</p>
        <p>{{$movie->vote}}</p>
    </div>
</section>
@endsection