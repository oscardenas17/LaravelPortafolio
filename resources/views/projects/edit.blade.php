@extends('layout')

@section('title','Editar proyecto')

@section('content')
    <h1>Editar Proyecto</h1>
    @include('partials.validation-errors')
    
<form action=" {{ route('projects.update', $project) }}" method="POST"> 
     @method('PATCH')

     @include('projects._form', ['btnText'=>'Actualizar'])


    </form>
@endsection