@extends('app')


    @section('content')

    <div class="container">
        <h1> {{$article->titolo}} </h1>
        <p> {{$article->body}} </p>
        <p>Category: {{ $article->category ? $article->category->name : '' }} </p>
        <p>Description: {{ $article->category ? $article->category->description : '' }} </p>
    </div>

    @endsection