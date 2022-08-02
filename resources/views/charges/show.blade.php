@extends('layouts.app')


@section('content')

<div class="row">
        <!-- Color Open Accordion start -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-header-text">Etat des charges</h5>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('charges.index') }}"> Retour</a>
                        </div>
                        <div class="color-accordion" id="color-accordion">
                    
                                                <div class="accordion-desc">
                                                     <div class="form-group">

                                                      <strong>Employé:</strong>

                                                        {{ $charge->nom_emp }}

                                                      </div>
                                                </div>
                                                
                                                 <div class="accordion-desc">
                                                     <div class="form-group">

                                                      <strong>Nom:</strong>

                                                        {{ $charge->nom }} 

                                                      </div>
                                                </div>
                                                <div class="accordion-desc">
                                                     <div class="form-group">

                                                      <strong>Prenom:</strong>

                                                      {{ $charge->prenom }}

                                                      </div>
                                                </div>
                                                <div class="accordion-desc">
                                                     <div class="form-group">

                                                      <strong>Date de naissance:</strong>

                                                      {{ $charge->dateNaiss }}

                                                      </div>
                                                </div>
                                                <div class="accordion-desc">
                                                     <div class="form-group">

                                                      <strong>Lieu de naissance:</strong>

                                                      {{ $charge->lieuNaiss }}

                                                      </div>
                                                </div>
                                                <div class="accordion-desc">
                                                     <div class="form-group">

                                                      <strong>Parenté:</strong>

                                                      {{ $charge->lienFamille }}

                                                      </div>
                                                </div>
                                                <div class="accordion-desc">
                                                     <div class="form-group">

                                                      <strong>sexe:</strong>

                                                      {{ $charge->sexe }}

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