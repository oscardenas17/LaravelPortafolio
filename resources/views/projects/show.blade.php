@extends('layout')

@section('title','Portafolio |' . $project->title)

@section('content')
    <h2> {{ $project->title}} </h2>
    <a href="{{ route('projects.edit', $project) }}">Editar</a>
<form action="{{ route('projects.destroy', $project)}}" method="POST">
        @csrf @method('DELETE')
        <button> Eliminar </button>
    </form>
    <p> {{ $project ->description}} </p> 
    <small> {{ $project ->created_at->format('Y-m') }} </small><br>
    <small> {{  $project ->created_at->diffForHumans() }} </small>

@endsection