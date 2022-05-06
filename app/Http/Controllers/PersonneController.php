<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\personne;

class PersonneController extends Controller
{
    public function index(){
        $personnes = personne::all();
        return response()->json($personnes);
    }

    public function store(Request $request){
        
        $personne = new personne();
        $personne->p_piece = $request->p_piece;
        $personne->p_nom = $request->p_nom;
        $personne->p_prenom = $request->p_prenom;
        $personne->p_telephone = $request->p_telephone;
        $personne->p_adresse = $request->p_adresse;
        $personne->p_profession = $request->p_profession;
        $personne->type  = $request->type;
        $personne->save(); 
        return 'ajouter avec success';
    }

    public function show(personne $personne){
        return response()->json($personne);
    }

    public function update(Request $request,$personne){
        $personne = personne::find($personne);
        $personne->update($request->all());
        return 'personne modifier avec success';
    }

    public function destroy(personne $personne){
        $personne->delete();
        return response()->json(['message'=>'Personne supprimé avec success']);
    }
}
