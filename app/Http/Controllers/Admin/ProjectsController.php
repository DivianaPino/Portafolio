<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Importamos nuestro modelo 
use App\Models\Project;

//importamos la clase validator

use Validator;

class ProjectsController extends Controller

//------------------------METODO INDEX---------------------
{
    public function index(){
        $projects=Project::all(); //trae todos los elementos que se encuentran en la tabla Project y guardalos en la variable "$projects"
        return view ('admin.portafolio.index', ['projects' => $projects]); //mostrar los proyectos en dicha vista 
    }

    //------------------------METODO STORE---------------------

    public function store(Request $request){
        //  dd($request->all());

         $new_project=new Project();

        $file = $request->file('imgFeatured'); // obtenemos el archivo
        $random_name = time(); // le colocamos a la imagen un nombre random y con el tiempo y fecha actual 
        $destinationPath = 'images/portafolio/'; // path de destino donde estaran las imagenes subidas 
        $extension = $file->getClientOriginalExtension();
        $filename = $random_name.'-'.$file->getClientOriginalName(); //concatemos el nombre random creado anteriormente con el nombre original de la imagen (para evitar nombres repetidos)
        $uploadSuccess = $request->file('imgFeatured')->move($destinationPath, $filename); //subimos y lo enviamos al path de Destino

         $new_project->title= $request->title;
         $new_project->description= $request->description;
         $new_project->featured=$filename;

         $new_project->save();

         return redirect()->route('admin.portafolio.index');  //Redigir la vista despues de guardar 
         
    }

     //------------------------METODO EDIT---------------------

    public function edit($projectId) {
        $project = Project::find($projectId);
        return view('admin.portafolio.edit', ['project' => $project]);
    }

    //------------------------METODO UPDATE---------------------

    public function update(Request $request, $projectId) {
        //  dd($request->all());

        $project = Project::find($projectId);  //buscar el proyecto que se va a editar por su id 
        // LA VALIDACIÓN:
        $rules = [
            'title' => 'required|',
            'description' => 'required',
            //la imagen no, ya que el usuario puede ser que no quiera actualizarla
        ];

        $validator = Validator::make($request->all(), $rules); //verificar si los campos que viene en la request cumplen con las reglas 

        //si una validacion falla se hace lo siguiente: se redireccion a la vista anterior con los errores y con el validator
        if($validator->fails())  
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if($request->hasFile('imgFeatured'))
        {
            $file = $request->file('imgFeatured');
            $random_name = time();
            $destinationPath = 'images/portafolio/';
            $extension = $file->getClientOriginalExtension();
            $filename = $random_name.'-'.$file->getClientOriginalName();
            $uploadSuccess = $request->file('imgFeatured')->move($destinationPath, $filename);
            $project->featured = $filename;
        }
        // unlink($destinationPath.$talent->featured);

        $project->title = $request->title;
        $project->description = $request->description;

        $project->save();

        return redirect()->route('admin.portafolio.index');
    }

    public function delete (Request $request, $projectId) {

         //dd("estamos en el delete");
         $project = Project::find($projectId);
         $project->delete();
         return redirect()->back();

    }


}