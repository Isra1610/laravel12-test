@extends('layouts.app')

@section('content')
    <h2>Suma de 2 numeros</h2>
    <form action="/suma" method="POST">
        @csrf
        <label for="num1">Numero 1:</label>
        <input type="number" name="num1" placeholder="Numero 1">
        <br>
        <label for="num2">Numero 2:</label>
        <input type="number" name="num2" placeholder="Numero 2">
        <br>
        <button type="submit">Sumar</button>
        <br>
    </form>
    <br>
    @if(isset($resultado))
    <p>El resultado de la suma es: {{ $resultado }}</p>
    @endif

@endsection
