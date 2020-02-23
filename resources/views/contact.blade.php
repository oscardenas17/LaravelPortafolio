@extends('layout')

@section('title','Contact')

@section('content')
    <h1>contact</h1>
{{-- {{$errors}} 

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif--}}



<form action="{{ route('contact') }}" method="POST">
    @csrf
        <input type="text" name="name" placeholder="Nombre..." value="{{old('name')}}"><br>
        {!!$errors->first('name','<small> :message </small><br>') !!}

<input type="email" name="email" placeholder="Email..." value="{{old('email')}}"> <br>
        {!!$errors->first('email','<small> :message </small><br>') !!}

        <input type="text" name="subject" placeholder="Asunto..." value="{{old('subject')}}"> <br>
        {!!$errors->first('subject','<small> :message </small><br>') !!}

        <textarea name="content"  placeholder="Mensaje..."> {{ old('content') }} </textarea> <br>
        {!!$errors->first('content','<small> :message </small><br>') !!}

        <button >Enviar</button>
    </form>
@endsection