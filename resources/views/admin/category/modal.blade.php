

<div class="modal fade" id="modal-delete-{{$category->id}}">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Eliminar Categoria</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

        {!! Form::model($category,['route' => ['admin.category.destroy',$category->id],"method" => "DELETE"]) !!}            <!-- Modal body -->
            <div class="modal-body">
                ¿Está seguro de que desea eliminar la categoría?<br>
                Al eliminar esta categoría se eliminan los productos afiliados a ella
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-danger"><i class="fa fa-remove"></i> Eliminar</button>
            </div>
        {!! Form::close() !!}
        </div>
    </div>
</div>