<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\calculadoraController;
use Illuminate\Support\Facades\Log;
/* asi se llama un controllador  */
 Route::get('/', function () {
    return view('welcome');
});

Route::get('/suma', function () {
    return view('suma');
});
Route::get('/sum', [calculadoraController::class, 'sumar']);

Route::get('/resta', function () {
    return view('resta');
});
Route::get('/restar', [calculadoraController::class, 'restar']);


Route::get('/multiplicacion', function () {
    Log::info('Mensaje enviado desde la ruta /multiplicacion');
    return view('multiplicacion');
});
Route::get('/multiplicar', [calculadoraController::class, 'multiplicar']);

Route::get('/division', function () {
    Log::info('Mensaje enviado desde la ruta /division');
    return view('division');
});
Route::get('/dividir', [calculadoraController::class, 'dividir']);

/* Route::post('/sum', function (Request $request) {
    $num1 = $request->input('num1');
    $num2 = $request->input('num2');
    $resultado = $num1 + $num2; */
    /* aqui estamos opteniendo los datos de la vista 
    la vista consulto el metodo suma 
    y el metodo suma esta llamando a a la vista y le manda el parametro de resultado  */
/*     return view('login', ['sum' => $resultado]);
 }); */

 Route::get('/sum', [calculadoraController::class, 'sumar']);
 /* aqui se llama al controllador y luego se llama a la suma */

  