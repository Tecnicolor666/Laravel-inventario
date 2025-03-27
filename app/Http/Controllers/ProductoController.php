<?php

namespace App\Http\Controllers;

use App\Models\Producto; // Asegúrate de importar el modelo Producto
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
    return view('productos.create');
}

public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required',
        'cantidad' => 'required|integer',
        'precio' => 'required|numeric'
    ]);

    Producto::create($request->all());

    return redirect()->route('productos.index')->with('success', 'Producto agregado correctamente.');
}


    
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
    public function edit(Producto $producto)
{
    return view('productos.edit', compact('producto'));
}

public function update(Request $request, Producto $producto)
{
    $request->validate([
        'nombre' => 'required',
        'cantidad' => 'required|integer',
        'precio' => 'required|numeric'
    ]);

    $producto->update($request->all());

    return redirect()->route('productos.index')->with('success', 'Producto actualizado correctamente.');
}


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
{
    $producto->delete();
    return redirect()->route('productos.index')->with('success', 'Producto eliminado correctamente.');
}

}
