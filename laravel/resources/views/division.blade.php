@extends('layouts.app')
@section('content')
<h1>Dividir dos números</h1>
<form action="/dividir" method="get">
    @csrf
    <input type="number" name="numero1" placeholder="Ingrese el primer número">
    <input type="number" name="numero2" placeholder="Ingrese el segundo número">
    <button type="submit">Dividir</button>
    @if(isset($resultado))
        <h2>El resultado es: {{ $resultado }}</h2>
    @endif
</form>
@endsection