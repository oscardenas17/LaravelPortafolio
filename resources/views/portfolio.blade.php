@extends('layout')

@section('title','Portfolio')

@section('content')
    <h1>portfolio</h1>

    <ul>                   
        @forelse($portfolio as $proyecto)
            <li>{{  $proyecto['title'] }}</li>
        @empty
            <li>No hay proyectos para mostrar</li>
        @endforelse
 
    </ul>
@endsection