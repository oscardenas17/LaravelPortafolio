<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\MensajeRecibido;
// use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    // public function store(Request $request){
    //         return $request->get('name');
    // }

    public function validar(){
      $mensaje =  request()->validate([
           'name'=>'required',
           'email'=>'required|email',
           'subject'=>'required',
           'content'=>'required|min:3'
       ],[
        //mensaje personalizado para el mensaje de validación
            'name.required' => __('I need your name') ,
       ]);  
       
       //eNVIAR eMAIL
       Mail::to('oscardenas17@gmail.com')->queue(new MensajeRecibido($mensaje));

       
       //return new MensajeRecibido($mensaje);
       return 'Mensaje enviado';
    }
}

