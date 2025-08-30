@extends('layouts.app')
@section('content')
   <!-- extend es un layout que se va a repetir y se mando a llamar aqui y content es para definir el contenido de la vista -->
    <h1> Multiplicar dos numeros </h1>
    <form action="/multiplicar" method="get">
        <!-- que hace el @csrf esto hace una verificacion de seguridad para evitar ataques CSRF-->
        @csrf
        <input type="number" name="num1" placeholder="Numero 1" require>
        <input type="number" name="num2" placeholder="Numero 2" require>
        <button type="submit">Multiplicar</button>
    </form>
    @if(isset($resultado))
    <!-- hola  -->
        <h2>El resultado es: {{ $resultado }}</h2>
    @endif
@endsection
 