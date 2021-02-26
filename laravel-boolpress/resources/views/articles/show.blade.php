@extends('app')


    @section('content')

    <div class="container">
        <h1> {{$article->titolo}} </h1>
        <p> {{$article->body}} </p>
        <p>Category: {{ $article->category ? $article->category->name : '' }} </p>
        <p>Description: {{ $article->category ? $article->category->description : '' }} </p>
        <p>Tags: 
            {{-- se ci sono tag mostrami i tags --}}
            @if( count($article->tags) > 0 )
                @foreach ($article->tags as $tag)
                    {{ $tag->name }}
                @endforeach
            @else
                non ho inserito nessun tag.
            @endif
        </p>
    </div>

    @endsection