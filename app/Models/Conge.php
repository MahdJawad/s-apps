<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conge extends Model
{
    use HasFactory;
    protected $primaryKey = 'idConge';
    protected $fillable = [

        'idConge ',
        'matricule',
        'idTypeConge',
        'dureeConge',
        'dateCessation',
        'dateReprise',
];
}
