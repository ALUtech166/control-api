<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_personne extends Model
{
    use HasFactory;

    protected $fillable = [
        't_nom',

    ];
}
