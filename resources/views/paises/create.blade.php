
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

    <form  method="POST" action="{{ route('paises.store') }}"><!--lo envio al metodo STORE, que esta en el PiasController-->
        @csrf
      <div class="form-group">
            <label>Pais</label><br>
            <input type ="text" name="nombre" class="form-control" value="" required><!--en el "name" debe ir el nombre de la columna de la BD -->
    </div>
    <div class="form-group">
    <label for="poblacion">Poblacion</label>
            <input type ="text" name="poblacion" class="form-control" value= ""required>
    </div>
    <div class="form-group">
             <label>PIB Anual</label><br>
            <input type ="text" name="PIB_anual" class="form-control" value= "" required><!--name va el NOMBRE DE LA TABLA-->
            </div>
    <div class="form-group">
            <label>PIB Capital</label> <br>
            <input type ="text" name="PIB_capita" class="form-control" value= "" required>
    </div>
    <div class="form-group">
            <label>IDH</label>
            <input type ="text" name="IDH" class="form-control" value= "" required>
     </div>
    <div class="form-group">
            <label>Deuda total del pais</label><br>
            <input type ="text" name="deuda_total" class="form-control" value= "" required>
    </div>
    <div class="form-group">
            <label>Deuda %</label><br>
            <input stype ="text" name="deuda" class="form-control"  value= ""required>
    </div>
    <div class="form-group">
            <label>Deficit</label><br>
            <input type ="text" name="deficit" class="form-control" value= ""required>
    </div>
    <div class="form-group">
            <input type="checkbox" name="check" class="chech-box"><span>Acepta los terminos y condiciones</span><br>
    </div>
            <button type="submit" class="submit-btn" name="registrarse">Registrarse</button>
            
        </form>
        <h3>Paises</h3>


<footer><p></p><a href="principal.php">Volver al inicio</a><p></p></footer>
@endsection
