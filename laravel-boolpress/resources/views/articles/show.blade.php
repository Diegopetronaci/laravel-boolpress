@extends('app')


    @section('content')

    <div class="container">
        <h1> {{$article->titolo}} </h1>
        <p> {{$article->body}} </p>
    </div>

    @endsection