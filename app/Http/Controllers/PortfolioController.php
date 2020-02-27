<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

//use DB;

class PortfolioController extends Controller
{
    public function index(){
       // $portafolio= \DB::table('projects')->get();

   // $portafolio = Project::latest('updated_at')->get();

    //$portafolio = Project::latest()->paginate(2);

    return view('portfolio', [

        'portafolio'=>Project::latest()->paginate()

    ]);

    }
}
