@extends('app')

    
    @section('content')
    <h1>Posts per l'admin</h1>
    <a href=" {{route('articles.create')}} " class="btn bg-dark text-white">Crea un nuovo Post</a>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Body</th>
                <th>Created at</th>
                <th>Upgrated at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
            {{-- {{ dd($article) }} --}}
            <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->titolo }}</td>
                    <td>{{ $article->body }}</td>
                    <td>{{ $article->created_at }}</td>
                    <td>{{ $article->updated_at }}</td>
                    <th>
                        <a href=" {{route('articles.show', ['article'=> $article->id] )}} " class="btn btn-primary">
                            <i class="fas fa-eye fa-lg fa-fw"></i> View
                        </a>

                        <a href=" {{route('articles.edit', ['article'=> $article->id] )}} " class="btn btn-warning">
                            <i class="fas fa-pen fa-lg fa-fw"></i> Edit
                        </a>

                        
                        <form action="{{route('articles.destroy', ['article'=> $article->id] )}}" method="post">
                        @csrf
                        @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class="fas fa-trash fa-lg fa-fw"></i> 
                                Delete
                            </button>
                        </form>
                        
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>

    @endsection