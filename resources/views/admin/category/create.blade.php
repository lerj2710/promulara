@extends('layouts.admin.template')

@section('content')

    @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-header"><h1>Lista de categorías <a href="{{route('admin.category.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Agregar</a></h1></div>
        <div class="card-body">
            <form action="{{url('admin/category')}}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="">Categoria</label>
                    <input type="text" name="category" class="form-control" value="{{old('category')}}" required>
                </div>

                <div class="form-group">
                    <label for="">Descripcion</label>
                    <textarea name="descripcion"  class="form-control"  required>{{old('descripcion')}}</textarea>
                </div>



                    <div class="float-md-left">
                        <a href="{{route('admin.category.index')}}" class="btn btn-danger">Regresar</a>
                    </div>

                    <div class="float-md-right">
                        <button type="submit"  class="btn btn-primary">Agregar</button>
                    </div>


             </form>
        </div>
    </div>
@endsection