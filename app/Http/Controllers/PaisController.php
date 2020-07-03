<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pais;/**agregar la referenciar al modelo */

class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $paises = Pais::all();

        return view('paises.index', compact('paises'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('paises.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//metodo INSERT
    {
        //
        $request->validate([/**validacion por parte del backend */
            'nombre'=>'required',
            'poblacion'=>'required',
            'PIB_anual'=>'required'
        ]);

        $pais = new Pais([/**creo un Objeto para los datos del formulario */
            'nombre' => $request->get('nombre'),/**get: me trae el dato del formulario*/
            'poblacion' => $request->get('poblacion'),
            'PIB_anual' => $request->get('PIB_anual'),
            'PIB_capita' => $request->get('PIB_capita'),
            'IDH' => $request->get('IDH'),
            'deuda_total' => $request->get('deuda_total'),/**request get para obtener la Data */
            'deuda' => $request->get('deuda'),
            'deficit' => $request->get('deficit')
            ]);
        $pais->save();/**guarda los datos a la BD */
        return redirect('/paises')->with('success', 'Pais saved!');/**me lo direcciona a la vista contacts con msj de alerta contacto guardado */
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $pais = Pais::find($id);
        return view('paises.edit', compact('pais'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([/**validacion por parte del backend */
            'nombre'=>'required',
            'poblacion'=>'required',
            'PIB_anual'=>'required'
        ]);

        $pais = Pais::find($id);
        
        $pais->nombre =  $request->get('nombre');
        $pais->poblacion = $request->get('poblacion');
        $pais->PIB_anual = $request->get('PIB_anual');
        $pais->PIB_capita = $request->get('PIB_capita');
        $pais->IDH = $request->get('IDH');
        $pais->deuda_total = $request->get('deuda_total');
        $pais->deuda = $request->get('deuda');
        $pais->deficit = $request->get('deficit');
        $pais->save();

        return redirect('/paises')->with('success', 'Pais Modificado!');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pais = Pais::find($id);
        $pais->delete();

        return redirect('/paises')->with('success', 'Pais Eliminado!');
   
    }
}
