@extends('layout')

@section('title','Portfolio')

@section('content')
    <h1>@lang('projects')</h1>
    <a href="{{ route('projects.create') }}"> Crear proyecto</a>

    <ul>                   
        @forelse($portafolio as $proyecto)
    <li><a href="{{ route('projects.show', $proyecto) }}"> {{              $proyecto->title }}  </a> </li>
            {{-- <small> {{ $proyecto->description }} </small> <br> --}}
            
          

        @empty
            <li>No hay proyectos para mostrar</li>
        @endforelse

             {{ $portafolio->links()}}

    </ul>
@endsection