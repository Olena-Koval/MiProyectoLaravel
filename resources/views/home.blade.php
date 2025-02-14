@extends('layouts.layout')

@section('title', 'Home')

@section('content')
    @auth
        <div class="card">
            <h2>Ver Alumnos</h2>
        </div>
    @else
        <img src="{{ asset('images/default-image.jpg') }}" alt="Imagen representativa">
    @endauth
@endsection
