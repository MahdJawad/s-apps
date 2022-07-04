<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
        /**

     * The attributes that are mass assignable.

     *	

     * @var array

     */

    protected $fillable = [

        'matricule', 'num_arrete','idFonction','idCat','idContrat','nom_emp','prenom_emp','adress','datenaiss','lieunaiss','sexe','tel','mail','situation_matrimoniale'

    ];
}
