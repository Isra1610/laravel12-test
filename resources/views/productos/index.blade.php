@extends('layouts.app')

@section('content')
    <h1>Lista de productos</h1>

  <table class="table w-50 border border-amber-700">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Precio</th>
      </tr>
    </thead>
    <tbody>
      @foreach($productos as $producto)
        <tr>
          <td>{{ $producto->id }}</td>
          <td>{{ $producto->nombre }}</td>
          <td>{{ $producto->descripcion }}</td>
          <td>{{ $producto->precio }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
