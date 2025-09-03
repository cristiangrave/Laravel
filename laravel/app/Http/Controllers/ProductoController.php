<?php

namespace App\Http\Controllers;
use App\Models\Producto;/* este modelo es el que usamos en el metodo index  */
use Illuminate\Http\Request;
class ProductoController extends Controller
{
    //
    public function index()
    {
        $productos = Producto::all();
        /* para pasar informacion se usa compact  */
        return view('productos.index', compact('productos'));
    }
}
