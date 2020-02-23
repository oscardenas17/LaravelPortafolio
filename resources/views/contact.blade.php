@extends('layout')

@section('title','Contact')

@section('content')
    <h1>contact</h1>

<form action="{{ route('contact') }}" method="POST">
    @csrf
        <input type="text" name="name" placeholder="Nombre..."> <br>
        <input type="email" name="email" placeholder="Email..."> <br>
        <input type="text" name="subject" placeholder="Asunto..."> <br>
        <textarea name="content" placeholder="Mensaje..."></textarea> <br>
        <button type="submit">Enviar</button>
    </form>
@endsection