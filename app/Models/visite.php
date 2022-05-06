<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class visite extends Model
{
    use HasFactory;

    protected  $fillable = [
        'v_objet',
        'carte_visiteur',
        'v_date',
        'v_heure_arrive',
        'v_heure_depart',
        'statut',
        'id_personne',
        
    ];
}
