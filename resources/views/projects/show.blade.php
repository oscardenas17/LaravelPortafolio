@extends('layout')

@section('title','Portafolio |' . $project->title)

@section('content')
    <h2> {{ $project->title}} </h2>
    <a href="{{ route('projects.edit', $project) }}">Editar</a>
    <p> {{ $project ->description}} </p> 
    <small> {{ $project ->created_at->format('Y-m') }} </small><br>
    <small> {{  $project ->created_at->diffForHumans() }} </small>

@endsection