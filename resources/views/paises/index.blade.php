@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Paises</h1>    
  <table class="table table-striped">

    <thead>
                <tr>
                <th>id</th>
                    <th>nombre</th>
                    <th>poblacion</th>
                    <th>PIB Capital</th>
                    <th>PIB Anual</th>
                    <th>IDH</th>
                    <th>Deuda Total</th>
                    <th>Deuda</th>
                    <th>Deficit</th>
                    <th colspan="2" ><strong>Acciones</strong>
                </tr>
            </thead>
    <tbody>
        @foreach($paises as $pais)
        <tr>
            <td>{{$pais->id}}</td>
            <td>{{$pais->nombre}} {{$pais->poblacion}}</td>
            <td>{{$pais->PIB_anual}}</td>
            <td>{{$pais->PIB_capita}}</td>
            <td>{{$pais->IDH}}</td>
            <td>{{$pais->deuda_total}}</td>
            <td>{{$pais->deuda}}</td>
            <td>{{$pais->deficit}}</td>
            <td>
                <a href="{{ route('paises.edit',$pais->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('paises.destroy', $pais->id)}}" method="post">
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

