<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affectation extends Model
{
    use HasFactory;
    protected $fillable = [
            'idNaf',
            'matricule',
            'typeAffect',
            'lieuAffect',
            'dateAffect',
            'datePriseServ ',
    ];
}
