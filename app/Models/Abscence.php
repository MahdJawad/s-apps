<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abscence extends Model
{
    use HasFactory;

    protected $primaryKey = 'numAbsence';
    protected $fillable = [
            'numAbsence',
            'matricule',
            'debut',
            'fin',
];
}
