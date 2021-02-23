@extends('app')


    @section('content')

    <h1>Edit {{$article->title}}</h1>

    <form action=" {{route('articles.update', ['article' => $article->id])}} " method="article">
        
        @csrf
        @method('PUT')
        <div class="form">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title" value="{{$article->title}}">
        </div>


        <div class="form-group">
          <label for="Body">Body</label>
          <textarea class="form-control" name="body" id="body" rows="3"> {{$article->body}} </textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

    @endsection