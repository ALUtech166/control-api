<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\type_personne;

class TypeController extends Controller
{
    public function index(){
        $type_personne = type_personne::all();
        return response()->json($type_personne);
    }

    public function store(Request $request){
        
        $type_personne = new type_personne();
        $type_personne->t_nom = $request->t_nom;
        $type_personne->save();
        
        return 'ok';
    }

    public function show(type_personne $type_personne){
        return response()->json($type_personne);
    }

    public function update(Request $request,$type_personne){
        $type_personne = type_personne::find($type_personne);
        $type_personne->update($request->all());
        return 'type personne modifier avec success';
    }

    public function destroy(type_personne $type_personne){
        $type_personne->delete();
        return response()->json(['message'=>'type personne supprimé avec success']);
    }
}
