
@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Agregar Pais</h1>
  <div>
@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

    <form  method="POST" action="{{ route('productos.store') }}"><!--productos es el nombre de la ruta que contiene los Controller-->
    @csrf
	<div class="form-group">
	    <label for="nombre_prod">Nombre del producto</label>
	    <input placeholder="Nombre del producto" type="text" class="form-control" id="nombre_prod" name="nombre_prod" value="<?php if(isset($_GET['edit'])) echo $getROW['nombre_prod'];  ?>">
  	</div>
​	<div class="form-group">
	    <label for="descripcion">Descripción</label>
	    <input placeholder="Descripción del producto" type="text" class="form-control" id="descripcion" name="descripcion" value="<?php if(isset($_GET['edit'])) echo $getROW['descripcion'];  ?>">
  	</div>
  	<div class="form-group">
	    <label for="stock">Stock</label>
	    <input placeholder="Cantidad o Stock" type="number" class="form-control" id="stock" name="stock" value="<?php if(isset($_GET['edit'])) echo $getROW['stock'];  ?>">
  	</div>
  		<div class="form-group">
	    <label for="pais">Precio</label>
	    <input placeholder="Precio por unidad" type="number" step="any" class="form-control" id="precio" name="precio" value="<?php if(isset($_GET['edit'])) echo $getROW['precio'];  ?>">
  	</div>
      <div class="form-group">
	<button type="submit" name="save" class="boton_personalizado">Registrar</button>
    </div>
</form>

@endsection