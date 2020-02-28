@extends('layout')

@section('title','Crear proyecto')

@section('content')
    <h1>Crear Proyecto</h1>

<form action=" {{ route('projects.store') }}" method="POST"> 
    @csrf   
        <label for="">Título del proyecto <br>
            <input type="text" name="title">
        </label><br>

        <label for="">URL del pryecto<br>
            <input type="text" name="url">
        </label><br>

        <label for="">Descripción <br>
            <textarea type="text" name="description"> </textarea>
        </label><br>

        <button>
            Guardar
        </button>
       
    </form>
@endsection