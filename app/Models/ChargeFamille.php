<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChargeFamille extends Model
{
    use HasFactory;
    protected $fillable = [

        'id',
        'matricule',
        'nom',
        'prenom',
        'dateNaiss',
        'lieuNaiss',
        'lienFamille',
        'sexe',
];
            
}
