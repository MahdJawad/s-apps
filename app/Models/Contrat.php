<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    use HasFactory;
    protected $fillable = [
        'idContrat','idTypeContrat','dateEmbauche','lieuEmbauche','salaireBase','modeReglement','frequencePaie',
            
    ];
}
