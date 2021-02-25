@extends('app')

@section('content')

    <h1>All Blogs from api</h1>
    
    @foreach ($articles as $article)
        
        <div class="card">

            <h2>{{ $article->titolo }}</h2>
            <hr class="hr">
            <h6>{{ $article->body }}</h6>

        </div>
            
    @endforeach
<style lang="scss" scoped>
    .card{
        background-color: black;
        width: 700px;
        margin: 20px;
        padding: 10px;
        color: white;
    }
    .hr{
        color:white;
        background-color: aliceblue;
    }
</style>
@endsection