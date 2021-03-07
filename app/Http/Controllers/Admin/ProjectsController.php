<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Importamos nuestro modelo 
use App\Models\Project;

class ProjectsController extends Controller
{
    public function index(){
        $projects=Project::all(); //trae todos los elementos que se encuentran en la tabla Project y guardalos en la variable "$projects"
        return view ('admin.portafolio.index', ['projects' => $projects]); //mostrar los proyectos en dicha vista 
    }

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


}