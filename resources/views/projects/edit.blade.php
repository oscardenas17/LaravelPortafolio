@extends('layout')

@section('title','Editar proyecto')

@section('content')
    <h1>Editar Proyecto</h1>

    @if($errors->any())
        <ul>
           @foreach ($errors->all() as $error)
            <li> {{ $error }}</li>
           @endforeach 
        </ul>
    @endif

<form action=" {{ route('projects.update', $project) }}" method="POST"> 
    @csrf   @method('PATCH')

        <label for="">Título del proyecto <br>
            <input type="text" name="title" value="{{ old('title', $project->title) }}">
        </label><br>

        <label for="">URL del pryecto<br>
            <input type="text" name="url"  value="{{ old('url',$project->url) }} ">
        </label><br>

        <label for="">Descripción <br>
            <textarea type="text" name="description" >{{ old('description',$project->description) }}</textarea>
        </label><br>

        <button>
            Actualizar
        </button>
       
    </form>
@endsection