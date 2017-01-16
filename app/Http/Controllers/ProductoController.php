<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;

class ProductoController extends Controller
{
    public function add(Request $request)
    {
    	$producto 				= new producto;
    	$producto->titulo		= $request->titulo;
    	$producto->descripcion 	= $request->descripcion;
    	$producto->precio		= $request->precio;
    	$producto->cantidad		= $request->cantidad;
    	$producto->imagen		= $request->titulo.$request->id;
    	try{
    		$producto->save();
    		return "Producto guardado exitosamente";
    	}catch(Illuminate\Database\QueryException $e){
    		return "Error al guardar el producto";
    	}
    }

    public function update(Request $request)
    {
    	$producto = producto::find($request->id);
    	$producto->titulo		= $request->titulo;
    	$producto->descripcion 	= $request->descripcion;
    	$producto->precio		= $request->precio;
    	$producto->cantidad		= $request->cantidad;
    	try{
    		$producto->save();
    		return "Producto modificado exitosamente";
    	}catch(Illuminate\Database\QueryException $e){
    		return "Error al modificado el producto";
    	}
    }
}
