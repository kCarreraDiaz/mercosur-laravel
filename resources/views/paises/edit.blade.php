@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a contact</h1>

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
    <form  method="POST" action="{{ route('paises.update',$pais->id) }}" role="form">
        @method('PATCH') 
        @csrf
      <div class="form-group">
            <label>Pais</label><br>
            <input type ="text" name="nombre" class="form-control" value={{ $pais->nombre}} />
    </div>
    <div class="form-group">
    <label for="poblacion">Poblacion</label>
            <input type ="text" name="poblacion" class="form-control" value={{ $pais->poblacion}} />
    </div>
    <div class="form-group">
             <label>PIB Anual</label><br>
            <input type ="text" name="PIB_anual" class="form-control" value={{ $pais->PIB_anual}} />
            </div>
    <div class="form-group">
            <label>PIB Capital</label> <br>
            <input type ="text" name="PIB_capita" class="form-control" value={{ $pais->PIB_capita}} />
    </div>
    <div class="form-group">
            <label>IDH</label>
            <input type ="text" name="IDH" class="form-control" value={{ $pais->IDH}} />
     </div>
    <div class="form-group">
            <label>Deuda total del pais</label><br>
            <input type ="text" name="deuda_total" class="form-control" value={{ $pais->deuda_total}} />
    </div>
    <div class="form-group">
            <label>Deuda %</label><br>
            <input stype ="text" name="deuda" class="form-control"  value={{ $pais->deuda}} />
    </div>
    <div class="form-group">
            <label>Deficit</label><br>
            <input type ="text" name="deficit" class="form-control" value={{ $pais->deficit} />
    </div>
    <div class="form-group">
            <input type="checkbox" name="check" class="chech-box"><span>Acepta los terminos y condiciones</span><br>
    </div>
            <button type="submit" class="submit-btn" name="Update">Update</button>
            
        </form>
    </div>
</div>
@endsection