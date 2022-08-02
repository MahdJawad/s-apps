@extends('layouts.app')


@section('content')

<div class="row">
        <!-- Color Open Accordion start -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-header-text">Etat des employés</h5>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('employes.index') }}"> Retour</a>
                        </div>
                        <div class="color-accordion" id="color-accordion">
                      
                                                <div class="accordion-desc">
                                                     <div class="form-group">

                                                      <strong>Matricule:</strong>

                                                        {{ $employe->matricule }}

                                                      </div>
                                                </div>
                                                
                                                 <div class="accordion-desc">
                                                     <div class="form-group">

                                                      <strong>Nom complet:</strong>

                                                        {{ $employe->prenom_emp }} {{ $employe->nom_emp }}

                                                      </div>
                                                </div>
                                                <div class="accordion-desc">
                                                     <div class="form-group">

                                                      <strong>Adresse:</strong>

                                                        {{ $employe->adress }} 

                                                      </div>
                                                </div>
                                                
                                                <div class="accordion-desc">
                                                     <div class="form-group">

                                                      <strong>Email:</strong>
                                                      {{ $employe->mail }}

                                                      </div>
                                                </div>
                                                <div class="accordion-desc">
                                                     <div class="form-group">

                                                      <strong>Date de prise de fonction:</strong>
                                                      
                                                      {{ $employe->date_prise_fonction }}
                                                      

                                                      </div>
                                                </div>
                                                <div class="accordion-desc">
                                                     <div class="form-group">

                                                      <strong>Lieu de naissance:</strong>
                                                      {{ $employe->lieunaiss }}

                                                      </div>
                                                </div>
                                                <div class="accordion-desc">
                                                     <div class="form-group">

                                                      <strong>Date de naissance:</strong>
                                                      {{ $employe->datenaiss }}

                                                      </div>
                                                </div>
                                                <div class="accordion-desc">
                                                     <div class="form-group">

                                                      <strong>Fonction employé:</strong>
                                                      @foreach($fonctions as $fonction)
                                                      {{ $fonction->intituleFonction }}
                                                      @endforeach

                                                      </div>
                                                </div>
                                                <div class="accordion-desc">
                                                     <div class="form-group">

                                                      <strong>Categorie employé:</strong>
                                                      {{ $employe->libelleCat }}

                                                      </div>
                                                </div>
                                                <div class="accordion-desc">
                                                     <div class="form-group">

                                                      <strong>Telephone:</strong>
                                                      {{ $employe->tel }}

                                                      </div>
                                                </div>
                                                <div class="accordion-desc">
                                                     <div class="form-group">

                                                      <strong>Lieu embauche:</strong>
                                                      {{ $employe->lieuEmbauche }}

                                                      </div>
                                                </div>
                                                <div class="accordion-desc">
                                                     <div class="form-group">

                                                      <strong>Sexe:</strong>
                                                      {{ $employe->sexe }}

                                                      </div>
                                                </div>
                                                <div class="accordion-desc">
                                                     <div class="form-group">

                                                      <strong>Situation matrimoniale:</strong>
                                                      {{ $employe->situation_matrimoniale }}

                                                      </div>
                                                </div>
                                                <div class="accordion-desc">
                                                     <div class="form-group">

                                                      <strong>Nombre de femme:</strong>
                                                      {{ $employe->nb_femme }}

                                                      </div>
                                                </div>
                                                <div class="accordion-desc">
                                                     <div class="form-group">

                                                      <strong>Nombre enfant:</strong>
                                                      {{ $employe->nb_enfant }}

                                                      </div>
                                                </div>
                                                <div class="accordion-desc">
                                                     <div class="form-group">

                                                      <strong>Numero CNSS:</strong>
                                                      {{ $employe->num_cnss }}

                                                      </div>
                                                </div>
                                                   
                                           
                            </div>
                        </div>
                                                   
                    </div>
                </div>
            </div>
        </div>
    <!-- Color Open Accordion ends -->
    </div>
    <!-- Row end -->
</div>

@endsection