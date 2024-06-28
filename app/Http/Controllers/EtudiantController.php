<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    public function index(){
        return view('rejoineznous');
    }

    public function addstudent(Request $request){
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);   

        //on instancie un objet de type etudiant
        $etudiant = new Etudiant();
        //Maintenant je vais lier les different champ de mon formuliare de mon champ dans la variable request
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->email = $request->email;
        $etudiant->password = $request->password;

        //Maintenant on les enregistre dans notre base de donees
        $etudiant->save();

        //maintenant on le redirige vers la route ajouter
        return redirect()->route('rejoineznous')->with('success', 'etudiant enregistrer');
    }

 
}
