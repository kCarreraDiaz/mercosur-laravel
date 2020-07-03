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
    <form  method="POST" action="{{ route('productos.update',$producto->id) }}" role="form">
        @method('PATCH') 
        @csrf
      <div class="form-group">
            <label>Producto</label><br>
            <input type ="text" name="nombre_prod" class="form-control" value= {{ $producto->nombre_prod}} />
    </div>
    <div class="form-group">
    <label for="poblacion">Descripcion</label>
            <input type ="text" name="descripcion" class="form-control" value= {{ $producto->descripcion}} />
    </div>
    <div class="form-group">
             <label>Stock</label><br>
            <input type ="text" name="stock" class="form-control" value={{ $producto->stock}} />
            </div>
    <div class="form-group">
            <label>Precio</label> <br>
            <input type ="text" name="precio" class="form-control" value={{ $producto->precio}} />
    </div>
    <div class="form-group">
            <input type="checkbox" name="check" class="chech-box"><span>Acepta los terminos y condiciones</span><br>
    </div>
    <div class="form-group">
            <button type="submit" class="submit-btn" name="Update">Update</button>
    </div>     
        </form>
    </div>
</div>
@endsection