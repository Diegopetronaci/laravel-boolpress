@extends('app')

    
    @section('content')
    <h1>Posts per l'admin</h1>
    <a href=" {{route('admins.create')}} " class="btn bg-dark text-white">Crea un nuovo Post</a>
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
            @foreach($admins as $admin)
            {{-- {{ dd($admin) }} --}}
            <tr>
                    <td>{{ $admin->id }}</td>
                    <td>{{ $admin->titolo }}</td>
                    <td>{{ $admin->body }}</td>
                    <td>{{ $admin->created_at }}</td>
                    <td>{{ $admin->updated_at }}</td>
                    <th>
                        <a href=" {{route('admins.show', ['admin'=> $admin->id] )}} " class="btn btn-primary">
                            <i class="fas fa-eye fa-lg fa-fw"></i> View
                        </a>

                        <a href=" {{route('admins.edit', ['admin'=> $admin->id] )}} " class="btn btn-warning">
                            <i class="fas fa-pen fa-lg fa-fw"></i> Edit
                        </a>

                        
                        <form action="{{route('admins.destroy', ['admin'=> $admin->id] )}}" method="post">
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