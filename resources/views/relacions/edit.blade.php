@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a Producto</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif      

<form  method="POST" action="{{ route('relacions.update',$relacion->id) }}" role="form">
@method('PATCH') 
        @csrf 
        <div class="form-group">
            <label for name="pais">Seleccione el pais deseado</label>
            <select name="id_pais">
                @foreach($paises as $p)<!-- recorro la variable PAISES que pase x parametro en el "create- (Controller)"-->
                    <option value={{ $p['id'] }}>{{$p['nombre']}}</option><!--guarda el valor de "id"(de la BD) y muestra el nombre del campo de la BD-->
                @endforeach
                <!--<option value={{ $relacion->id_pais}}></option>traigo solo el campo "nombre de la BD-->     
            </select>
        </div>
        <div class="form-group">
            <label>Pais a vincular</label>
            <select name="nom_pais2">
            <option value=""> --Seleccione una opcion --</option>
                @foreach($paises as $p)<!-- recorro la variable PAISES que pase x parametro en el "create- (Controller)"-->
                    <option value={{ $p['nombre'] }}>{{$p['nombre']}}</option><!--guarda el valor de "id"(de la BD) y muestra el nombre del campo de la BD-->
                @endforeach 
                <!--<option value={{ $relacion->nom_pais2}}></option>traigo solo el campo "nombre de la BD-->    
            </select>
            </div>
        <div class="form-group">   
            <label for name="fecha">Ingrese fecha</label><br>
            <input name="fecha" value={{ $relacion->fecha}}>
            <p>YY/MM/DD</p>
        </div>
        <div class="form-group">
	        <button type="submit" class="boton_personalizado" name="modificar">Modificar </button>
        <div>
        </form>




    </div>
</div>
@endsection