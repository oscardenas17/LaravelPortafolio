<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests\CreateProjectRequest;

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



    public function store(CreateProjectRequest $request){
    
     //validación de campos   a no es necesaria aca todo esta en el createpro..requeste
        // $fields = request()->validate([
        //     'title'=> 'required',
        //     'url'=> 'required',
        //     'description'=> 'required',
        // ]);

            //guardar campos            
        // Project::create(request()->only('title','url','description'));
           Project::create($request->validated());

    //    Project::create([
    //     'title'=> request('title'),
    //     'url'=> request('url'),
    //     'description'=> request('description'),

    //    ]);

       return redirect()->route('projects.index');
    }



}
