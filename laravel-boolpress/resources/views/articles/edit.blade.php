@extends('app')


    @section('content')

    <h1>Edit {{$article->titolo}}</h1>

    <form action=" {{route('articles.update', ['article' => $article->id])}} " method="post">
        
        @csrf
        @method('PUT')
        <div class="form">
            <label for="titolo">Title</label>
            <input class="form-control" type="text" name="titolo" id="titolo" value="{{$article->titolo}}">
        </div>


        <div class="form-group">
          <label for="Body">Body</label>
          <textarea class="form-control" name="body" id="body" rows="3"> {{$article->body}} </textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

    @endsection