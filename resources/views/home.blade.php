@extends('layouts.layout')

@section('title', 'Home')

@section('content')
    @auth
        <div>
            <h2>Bienvenido {{ Auth::user()->name }}</h2>
            <div class="card">
                <p>Ver Alumnos</p>
            </div>
        </div>
    @else
        <img src="{{ asset('images/welcome.png') }}" alt="Bienvenido">
    @endauth
@endsection
