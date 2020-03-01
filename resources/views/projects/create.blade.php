@extends('layout')

@section('title','Crear proyecto')

@section('content')
    <h1>Crear Proyecto</h1>

    @if($errors->any())
        <ul>
           @foreach ($errors->all() as $error)
            <li> {{ $error }}</li>
           @endforeach 
        </ul>
    @endif

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