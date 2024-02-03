<!-- form para el crear, la ruta va al web.php y de ahi al metodo del controlador -->
<form method="POST" action="{{ route('productos.store') }}" role="form" enctype="multipart/form-data">

    <!--Le digo que es put, equivalente a @ method('put')-->
    @method('POST')
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
 



    <!--Este formulario es para crear o actualizar registros en la tabla productos -->
<div class="mb3">
    <label for="nombre" class="negrita">Nombre:</label>
    <div>
        <input class="form-control" placeholder="Zapatos Marrones de Cuero" required="required" name="nombre" type="text" id="nombre" >
    </div>
</div>

<div class="mb3">
    <label for="precio" class="negrita">Precio:</label>
    <div>
        <input class="form-control" placeholder="4.50" required="required" name="precio" type="text" id="precio" >
    </div>
</div>

<div class="mb3">
    <label for="stock" class="negrita">Stock:</label>
    <div>
        <input class="form-control" placeholder="40" required="required" name="stock" type="text" id="stock" >
    </div>
</div>


<button type="submit" class="btn btn-info">Guardar</button>
<a href="{{ route('productos.index') }}" class="btn btn-warning">Cancelar</a>
  </form>