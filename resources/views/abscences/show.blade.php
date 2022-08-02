@extends('layouts.app')


@section('content')

<div class="row">
        <!-- Color Open Accordion start -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-header-text">Etat des absences</h5>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('abscences.index') }}"> Retour</a>
                        </div>
                        <div class="color-accordion" id="color-accordion">
                                                <div class="accordion-desc">
                                                     <div class="form-group">

                                                      <strong>Employé:</strong>

                                                        {{ $abscence->nom_emp }}

                                                      </div>
                                                </div>
                                                
                                                 <div class="accordion-desc">
                                                     <div class="form-group">

                                                      <strong>Date de debut:</strong>

                                                        {{ $abscence->debut }} 

                                                      </div>
                                                </div>
                                                <div class="accordion-desc">
                                                     <div class="form-group">

                                                      <strong>Date de fin:</strong>

                                                      {{ $abscence->fin }}

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