@extends('layouts.admin.template')

@section('content')
    <div class="card">
        <div class="card-header"><h1>Lista de categorías</h1></div>
        <div class="card-body">
            <table class="table table-striped table-condensed table-hover table-bordered">
                <thead>
                    <th>#</th>
                    <th>Categoría</th>
                    <th>Acciones</th>
                </thead>
                
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->category}}</td>
                            <td><a href="{{route('admin.category.edit',["id" => $category->id])}}" class="btn btn-primary">Editar</a></td>
                        </tr>    
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection