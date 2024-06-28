<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use Illuminate\Http\Request;


// ces dans ce controller que sera rediger utilisateur quand il va clique sur une photos

class RecetteController extends Controller
{
    public function index(){

        $mets = Recette::all();
        return view('mets', compact('mets'));
    }  
    
    public function details(Recette $met){
        return view('layout.detail', compact('met'));
    }

    public function search(){
        $q = request()->input('q');

        $recettes = Recette::where('title', 'like', "%$q%");

        return view('search', compact('recettes'));
    }

   /* public function show(Recette $showmet){
        return view('recette.show',compact('article'));
    }*/

    public function ajouterecette(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'ingredient' => 'required',
            'preparation' => 'required',
            'temps_de_cuisson' => 'required',
        ]);

        $recettes = new Recette();

        $recettes->title = $request->title;
        $recettes->description = $request->description;
        $recettes->ingredient = $request->ingredient;
        $recettes->preparation = $request->preparation;
        $recettes->temps_de_cuisson = $request->temps_de_cuisson;
        
        $recettes->save();

        return redirect('/recette');
    }
}






