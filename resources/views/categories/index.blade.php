@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>Categorias</h2>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Nome</th>
            </tr>
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->id_category}}</td>
                <td>{{ $category->name }}</td>
            </tr>
            @endforeach
        </table>
    </div>


@endsection