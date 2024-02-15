<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductosRequest;
use App\Http\Requests\UpdateProductosRequest;
use App\Models\Productos;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Productos::all();
        return view('index',['productos'=> $productos]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductosRequest $request)
    {
        $producto = Productos::create($request->all());
        return redirect()->route('productos.show',["id"=>$producto->id])->with("message","creado exitosamente");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $producto = Productos::find($id);
        return view('show', ['producto'=>$producto]);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $producto = Productos::find($id);
        return view('edit', ['producto'=>$producto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductosRequest $request, string $id)
    {
        $actualizado = Productos::find($id);
        $actualizado->update($request->all());
        return redirect()->route('productos.show',$actualizado->id)->with("message","actualizado correctamente");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producto = Productos::find($id);
        $producto->delete();
        return redirect()->route('productos.index')->with('message','Eliminado satisfactoriamente');
    }
}
