@extends('layout')

@section('title','Portfolio')

@section('content')
    <h1>portfolio</h1>

    <ul>                   
        @forelse($portafolio as $proyecto)
            <li> {{  $proyecto->title }} </li>
            <small> {{ $proyecto->description }} </small> <br>
            <small> {{ $proyecto->created_at->format('Y-m') }} </small><br>
            <small> {{ $proyecto->created_at->diffForHumans() }} </small>

          

        @empty
            <li>No hay proyectos para mostrar</li>
        @endforelse

             {{ $portafolio->links()}}

    </ul>
@endsection