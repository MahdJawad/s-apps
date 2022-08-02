
@extends('layouts.app')

@section('content')
<div class="col-md-12">


@if (count($errors) > 0)

  <div class="alert alert-danger">

    <strong>Whoops!</strong> There were some problems with your input.<br><br>

    <ul>

       @foreach ($errors->all() as $error)

         <li>{{ $error }}</li>

       @endforeach

    </ul>

  </div>

@endif

<div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Fonction</h5>
                                                        <!--<span>Renseigner les informations relatives pour employetag</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                    {!! Form::open(array('route' => 'fonctions.store','method'=>'POST')) !!}
                                                    <div class="col-md-6">                                  
                                                                <span class="form-bar">{!! Form::select('directions[]', $directions,[], array('class' => 'form-control','multiple')) !!}</span>
                                                                
                                                                <label class="float-label">Direction</label>
                                                            </div>
                                                            
                                                            
                                                    <div class="col-md-6">
                                                                <input type="text" name="intituleFonction" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Fonction</label>
                                                    </div>
                                                           
                                                            {!! Form::close() !!  
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="row">
                                             
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Direction</h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                    {!! Form::open(array('route' => 'directions.store','method'=>'POST')) !!}
                                                            <div class="form-group form-default">
                                                                <input type="text" name="nomDirection" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Direction</label>
                                                            </div>
                                                            
                                                            {!! Form::close() !!   
                                                    </div>
                                            
                                            </div> 
                                            
                                             
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Avancement</h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                    {!! Form::open(array('route' => 'avancements.store','method'=>'POST')) !!}
                                                            <div class="form-group form-default">
                                                                <input type="string" name="num_arrete" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Numero Arrete</label>
                                                            </div>
                                                            <div class="col-md-6">                                  
                                                                <span class="form-bar">{!! Form::select('categories[]', $categories,[], array('class' => 'form-control','multiple')) !!}</span>
                                                                
                                                                <label class="float-label">categorie</label>
                                                            </div>
                                                             <div class="form-group form-default">
                                                                <input type="date" name="dateDecision" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Date decision</label>
                                                            </div>
                                                            {!! Form::close() !!
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Contrat</h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                    {!! Form::open(array('route' => 'contrats.store','method'=>'POST')) !!}
                                                    <div class="col-md-6">                                  
                                                                <span class="form-bar">{!! Form::select('types[]', $types,[], array('class' => 'form-control','multiple')) !!}</span>
                                                                
                                                                <label class="float-label">Type contrat</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="date" name="dateEmbauche" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Date embauche</label>
                                                            </div>
                                                            
                                                             <div class="form-group form-default">
                                                                <input type="string" name="lieuEmbauche" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Lieu Embauche</label>
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <input type="integer" name="salaireBase" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Salaire de base</label>
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <input type="string" name="modeReglement" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Mode de reglement</label>
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <input type="string" name="frequencePaie" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Frequence de paie</label>
                                                            </div>
                                                            {!! Form::close() !!}
                                                    </div>
                                                </div>
                                            </div>
    @endsection                  