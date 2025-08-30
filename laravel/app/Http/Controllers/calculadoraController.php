<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculadoraController extends Controller
{
    //

    /* aqui los controladores son llamados en las rutas y estos tienen muchos metodos que hacen o recibien parametros
    luego de eso aqui podemos hacer disntintas formas de metodos */
    /* en el request se pueden obtener los datos enviados desde el formulario */
    public function sumar(Request $request)
    {
     
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $sum = $num1 + $num2;
/* aqui se llama la vista pero ya se le mandan los parametros correspondientes  */
        return view('suma', ['sum' => $sum]);
    }
    public function restar(Request $request)
    {
     
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $rest = $num1 - $num2;
        return view('resta', ['resultado' => $rest]);
    }
    public function multiplicar(Request $request)
    {

        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $mult = $num1 * $num2;
        return view('multiplicacion', ['resultado' => $mult]);
    }

    public function dividir(Request $request)
    {

        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        if ($num2 == 0) {
            return view('division', ['error' => 'No se puede dividir por cero']);
        } 
        $div = $num1 / $num2;
        return view('division', ['resultado' => $div]);
    }

}
