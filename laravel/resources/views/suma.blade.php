@extends('layouts.app')
@section('content')
   <!-- extend es un layout que se va a repetir y se mando a llamar aqui y content es para definir el contenido de la vista -->
    <h1> Sumar dos numeros </h1>
    <form action="/sum" method="get">
        <!-- que hace el @csrf esto hace una verificacion de seguridad para evitar ataques CSRF-->
        @csrf
        <input type="number" name="num1" placeholder="Numero 1" require>
        <input type="number" name="num2" placeholder="Numero 2" require>
        <button type="submit">Sumar</button>
    </form>
    @if(isset($sum))
        <h2>El resultado es: {{ $sum }}</h2>
    @endif
@endsection
 