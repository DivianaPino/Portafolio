<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Importamos nuestro modelo 
use App\Models\Project;

class FrontendController extends Controller
{
    public function index(){
        $projects= Project::all();
        return view ('portafolio', ['projects' => $projects]); 
    }

    
}
