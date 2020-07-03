<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Relacion;
use App\Pais;//para el select list del formulario

class RelacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $relacions = Relacion::all();

        return view('relacions.index', compact('relacions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $paises=Pais::all();//creo variable que contendra todos los datos de la tabla
        //return view('relacions.create');//en "relacions.create" se crea la vista principal de este modelo
        return view('relacions.create',compact('paises'));//le paso x parametro la variable paises (para mi select del boton)
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //Metodo INSERT
        $request->validate([/**validacion por parte del backend */
            'id_pais'=>'required',
            'nom_pais2'=>'required',
            'fecha'=>'required'
        ]);

        $relacion = new Relacion([/**creo un Objeto para los datos del formulario */
            'id_pais' => $request->get('id_pais'),/**get: me trae el dato del formulario*/
            'nom_pais2' => $request->get('nom_pais2'),
            'fecha' => $request->get('fecha')
            ]);
        $relacion->save();/**guarda los datos en mi vector producto en la BD */
        return redirect('/relacions')->with('success', 'Relacion saved!');/**me lo direcciona a la vista contacts con msj de alerta contacto guardado */
   
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
        //metodo EDITAR
        $paises=Pais::all();//traigo los datos de PAIS
        $relacion = Relacion::find($id);
        return view('relacions.edit', compact('relacion'),compact('paises'));//le paso 2 parametros
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
            'id_pais'=>'required',
            'nom_pais2'=>'required',
            'fecha'=>'required'
        ]);

        $relacion = Relacion::find($id);
        $relacion->id_pais =  $request->get('id_pais');
        $relacion->nom_pais2 = $request->get('nom_pais2');
        $relacion->fecha = $request->get('fecha');
        $relacion->save();

        return redirect('/relacions')->with('success', 'Relacion Modificado!');
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
        $relacion = Relacion::find($id);
        $relacion->delete();

        return redirect('/relacions')->with('success', 'Relacion Eliminada!');//refresca la pagina
    }
}
