<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

//use DB;

class ProjectController extends Controller
{
    public function index(){
        // $portafolio= \DB::table('projects')->get();
        // $portafolio = Project::latest('updated_at')->get();
        //$portafolio = Project::latest()->paginate(2);

    return view('projects.index', [

        'portafolio'=>Project::latest()->paginate()

    ]);

    }

        // public function show($id){
        //     return view('projects.show',[
        //    'project' => Project::findOrFail($id)
        //  ]);

        //ROUTE MODEL BINDING
        public function show( Project $id){
        
            return view('projects.show',[
    
                'project' => $id
            ]);
    }


    public function create(){
        return view('projects.create');
    }

    public function store(){
    

       //  O usar ->Project::create(request()->all());
       Project::create([
        'title'=> request('title'),
        'url'=> request('url'),
        'description'=> request('description'),

       ]);

       return redirect()->route('projects.index');
    }



}
