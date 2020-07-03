@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Productos</h1>    
  <table class="table table-striped">

    <thead>
                <tr>
                <th>id</th>
                    <th>nombre_prod</th>
                    <th>descripcion</th>
                    <th>Stock</th>
                    <th>Precio</th>
                    <th colspan="2" ><strong>Acciones</strong>
                </tr>
            </thead>
    <tbody>
        @foreach($productos as $producto)
        <tr>
            <td>{{$producto->id}}</td>
            <td>{{$producto->nombre_prod}}</td>
            <td>{{$producto->descripcion}}</td>
            <td>{{$producto->stock}}</td>
            <td>{{$producto->precio}}</td>
            <td>
                <a href="{{ route('productos.edit',$producto->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('productos.destroy', $producto->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection

