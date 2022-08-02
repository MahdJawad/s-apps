@extends('layouts.app')


@section('content')

<div class="row">
        <!-- Color Open Accordion start -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-header-text">Etat des congés</h5>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('conges.index') }}"> Retour</a>
                        </div>
                        <div class="color-accordion" id="color-accordion">
                    
                                                <div class="accordion-desc">
                                                     <div class="form-group">

                                                      <strong>Type de congé:</strong>
                                                      @foreach($types as $type)

                                                        {{ $type->nom_emp }}
                                                        @endforeach

                                                      </div>
                                                </div>
                                                
                                                 <div class="accordion-desc">
                                                     <div class="form-group">

                                                      <strong>Durée de congé:</strong>

                                                        {{ $conge->dureeConge }} 

                                                      </div>
                                                </div>
                                                <div class="accordion-desc">
                                                     <div class="form-group">

                                                      <strong>Date de cessation de service:</strong>

                                                      {{ $conge->dateCessation }}

                                                      </div>
                                                </div>
                                                <div class="accordion-desc">
                                                     <div class="form-group">

                                                      <strong>Date de reprise de service:</strong>

                                                      {{ $conge->dateReprise }}

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