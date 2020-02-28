@extends('layout')

@section('title','Portafolio |' . $project->title)

@section('content')
    <h2> {{ $project->title}} </h2>
    <p> {{ $project ->description}} </p> 
    <small> {{ $project ->created_at->format('Y-m') }} </small><br>
    <small> {{  $project ->created_at->diffForHumans() }} </small>

@endsection