@extends('app')

    
    @section('content')

    <h1>Create a new post</h1>

    <form action=" {{route('articles.store')}} " method="post">
        
        @csrf
        <div class="form">
            <label for="titolo">Title</label>
            <input class="form-control" type="text" name="titolo" id="titolo">
        </div>


        <div class="form-group">
          <label for="Body">Body</label>
          <textarea class="form-control" name="body" id="body" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
    

    @endsection