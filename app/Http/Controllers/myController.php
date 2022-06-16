<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    public function index(){
    
    return view ('myview');
    
    }

    public function enregistrer(Request $request){
    
        return view ('acueil');
        
        }
}
