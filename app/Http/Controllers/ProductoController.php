<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all(); // Obtener todos los productos
        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.create');
    }
    

    public function store(Request $request)
    {
 
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric',
            'fecha_caducidad' => 'required|date',
        ]);
    
        Producto::create($request->all());
    
        return redirect()->route('productos.index')
                         ->with('success', 'Producto creado correctamente.');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        return view('productos.edit', compact('producto'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric|min:0',
            'fecha_caducidad' => 'required|date',
        ]);
    
        $producto->update($request->all());
    
        return redirect()->route('productos.index')
                         ->with('success', 'Producto actualizado correctamente.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
    
        return redirect()->route('productos.index')
                         ->with('success', 'Producto eliminado correctamente.');
    }
    
}
