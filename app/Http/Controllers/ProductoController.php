<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productos = Producto::all();

        return view('productos.index', compact('productos'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('productos.create');//en "productos.create" se crea la vista principal de este modelo
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Metodo INSERT
        $request->validate([/**validacion por parte del backend */
            'nombre_prod'=>'required',
            'descripcion'=>'required',
            'stock'=>'required',
            'precio'=>'required'
        ]);

        $producto = new Producto([/**creo un Objeto para los datos del formulario */
            'nombre_prod' => $request->get('nombre_prod'),/**get: me trae el dato del formulario*/
            'descripcion' => $request->get('descripcion'),
            'stock' => $request->get('stock'),
            'precio' => $request->get('precio')
            ]);
        $producto->save();/**guarda los datos en mi vector producto en la BD */
        return redirect('/productos')->with('success', 'Producto saved!');/**me lo direcciona a la vista contacts con msj de alerta contacto guardado */
   
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
        $producto = Producto::find($id);
        return view('productos.edit', compact('producto'));
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
            'nombre_prod'=>'required',
            'descripcion'=>'required',
            'stock'=>'required'
        ]);

        $producto = Producto::find($id);
        $producto->nombre_prod =  $request->get('nombre_prod');
        $producto->descripcion = $request->get('descripcion');
        $producto->stock = $request->get('stock');
        $producto->precio = $request->get('precio');
        $producto->save();

        return redirect('/productos')->with('success', 'Producto Modificado!');
   
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
        $producto = Producto::find($id);
        $producto->delete();

        return redirect('/productos')->with('success', 'Producto Eliminado!');//refresca la pagina
    }
}
