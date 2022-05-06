<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\visite;

class VisiteController extends Controller
{
    public function index(){
        $visite = visite::all();
        return response()->json($visite);
    }

    public function store(Request $request){
        $visite = new visite();
        $visite->v_objet = $request->v_objet;
        $visite->nom_visiteur = $request->nom_visiteur;
        $visite->carte_visiteur = $request->carte_visiteur;
        $visite->v_date = $request->v_date;
        $visite->v_heure_arrive = $request->v_heure_arrive;
        $visite->v_heure_depart = $request->v_heure_depart ;
        $visite->statut = $request->statut ;
        $visite->id_personne = $request->id_personne ;
        $visite->save();
        return 'ajouter avec success';
    }

    public function show(visite $visite){
        return response()->json($visite);
    }

    public function update(Request $request,$visite){
        $visite = visite::find($visite);
        $visite->update($request->all());
        return 'visite modifier avec success';
    }

    public function destroy(visite $visite){
        $visite->delete();
        return response()->json(['message'=>'visite supprimé avec success']);
    }
}
