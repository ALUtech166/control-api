<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personne extends Model
{
    use HasFactory;

    protected $fillable = [
        'p_piece',
        'p_nom',
        'p_prenom',
        'p_telephone',
        'p_adresse',
        'p_profession',
        'type',
    ];
}
 