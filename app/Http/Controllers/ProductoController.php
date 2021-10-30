<?php

namespace App\Http\Controllers;

use App\Models\Producto;
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
        return $productos;
    }
    /**
     * Display a single resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function singleProduct($id)
    {   
        $producto = Producto::where("id",$id)->get();
        
        return $producto;
    }

     /**
     * created a new resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createSingleProduct(Request $request)
    {
        $producto = Producto::create(
                                    [   'nombre' => $request->nombre ,
                                        'precio' => $request->precio , 
                                        'stock' => $request->stock,
                                    ]);
        return $producto;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto,$id)
    {
        $producto = Producto::find($id);


        if(isset($request->nombre))
        $producto->nombre = $request->nombre;

        if(isset($request->precio))
        $producto->precio = $request->precio;

        if(isset($request->stock))
        $producto->stock  = $request->stock;

        $producto->save();

        return  $producto;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response 
     */
    public function destroy($id)
    {      
        if( Producto::find( $id ) != null ){
            $producto=Producto::find($id);
            Producto::find($id)->delete();
            return $producto;
        }        
        else
            return "El producto con id : $id  , no existe en nuestra base de datos";
    }
}
