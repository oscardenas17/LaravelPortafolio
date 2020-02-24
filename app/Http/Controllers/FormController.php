<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    // public function store(Request $request){
    //         return $request->get('name');
    // }

    public function validar(){
       request()->validate([
           'name'=>'required',
           'email'=>'required|email',
           'subject'=>'required',
           'content'=>'required|min:3'
       ],[
        //mensaje personalizado para el mensaje de validación
            'name.required' => __('I need your name') ,
       ]);   
       return 'Datos validados';
    }
}

