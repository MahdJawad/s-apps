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

    protected $primaryKey = 'matricule';

    protected $fillable = [

        'matricule', 'num_arrete','idFonction','idCat','idContrat','nom_emp','prenom_emp','adress','datenaiss','lieunaiss','sexe','tel','mail','situation_matrimoniale','nb_enfant','nb_femme','date_prise_fonction','num_cnss'

    ];
    public function fonction(){
        return $this->belongsTo('App\Models\Fonction');
    }
    public function categorie(){
        return $this->belongsTo('App\Models\Categorie');
    }
    public function contrat(){
        return $this->belongsTo('App\Models\Contrat');
    }
}
