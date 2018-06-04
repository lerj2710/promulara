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
        <div class="card-header"><h1>Editar Categoria</h1></div>
        <div class="card-body">
            {!! Form::model($category,['route' => ['admin.category.update',$category->id],"method" => "PUT"]) !!}

                <div class="form-group">
                    <label for="">Categoria</label>
                    <input type="text" name="category" class="form-control" value="{{$category->category}}" required>
                </div>

                <div class="form-group">
                    <label for="">Descripcion</label>
                    <textarea name="descripcion"  class="form-control" required>{{$category->description}}</textarea>
                </div>



                <div class="float-md-left">
                    <a href="{{route('admin.category.index')}}" class="btn btn-danger">Regresar</a>
                </div>

                <div class="float-md-right">
                    <button type="submit"  class="btn btn-primary">Agregar</button>
                </div>

        {!! Form::close() !!}
       </div>
    </div>
@endsection