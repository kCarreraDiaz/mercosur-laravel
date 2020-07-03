@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Productos</h1>    
  <table class="table table-striped">

    <thead>
                <tr>
                <th>id</th>
                    <th>id_pais</th>
                    <th>nom_pais2</th>
                    <th>fecha</th>
                    <th colspan="2" ><strong>Acciones</strong>
                </tr>
            </thead>
    <tbody>
        @foreach($relacions as $relacion)
        <tr>
            <td>{{$relacion->id}}</td>
            <td>{{$relacion->id_pais}}</td>
            <td>{{$relacion->nom_pais2}}</td>
            <td>{{$relacion->fecha}}</td>
            <td>
                <a href="{{ route('relacions.edit',$relacion->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('relacions.destroy', $relacion->id)}}" method="post">
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

