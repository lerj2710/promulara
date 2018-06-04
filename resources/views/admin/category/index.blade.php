@extends('layouts.admin.template')

@section('content')
    <div class="card">
        <div class="card-header"><h1>Lista de categorías <a href="{{route('admin.category.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Agregar</a></h1></div>
        <div class="card-body">
            <table class="table table-striped table-condensed table-hover table-bordered">
                <thead>
                    <th>#</th>
                    <th>Categoría</th>
                    <th>Descripcion</th>
                    <th>Acciones</th>
                </thead>
                
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->category}}</td>
                            <td>{{$category->description}}</td>
                            <td>
                                <a href="{{route('admin.category.edit',["id" => $category->id])}}" class="btn btn-primary">Editar</a>

                                <button class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{$category->id}}">Eliminar</button>
                            </td>
                            @include('admin.category.modal')

                        </tr>    
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection