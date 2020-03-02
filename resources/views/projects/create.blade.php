@extends('layout')

@section('title','Crear proyecto')

@section('content')
    <h1>Crear Proyecto</h1>


@include('partials.validation-errors')

<form action=" {{ route('projects.store') }}" method="POST"> 
   
    
    @include('projects._form', ['btnText'=>'Guardar'])

 
    
    </form>
@endsection