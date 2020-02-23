<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    // public function store(Request $request){
    //         return $request->get('name');
    // }

    public function store(){
        return request('email');   
    }
}

