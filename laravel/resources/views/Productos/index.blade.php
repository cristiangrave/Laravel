@extends('layouts.app')

@section('content')
<h1>Lista de Productos de la Base de datos  </h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Fecha de creación</th>
            <th>Última actualización</th>
        </tr>
    </thead>
    <tbody>
        @foreach($productos as $producto)
        <tr>
            <td>{{ $producto->id }}</td>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->descripcion }}</td>
            <td>{{ $producto->precio }}</td>
            <td>{{ $producto->created_at }}</td>
            <td>{{ $producto->updated_at }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection