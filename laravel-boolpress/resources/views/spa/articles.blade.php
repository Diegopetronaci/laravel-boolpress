@extends('app')

@section('content')
    <h1>All Articles from api</h1>

    <div id="app">
        <div class="container">
            <div class="row justify-content-center">

                <articles-component></articles-component>
            
                <categories-component></categories-component>

            </div>
        </div>
    </div>
@endsection