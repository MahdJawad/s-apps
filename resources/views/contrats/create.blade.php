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
                                                        <h5>Contrat</h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                    {!! Form::open(array('route' => 'contrats.store','method'=>'POST')) !!}
                                                    <form >
                                                        <div class="form-group row">
                                                        <div class="col">                                  
                                                                
                                                                
                                                                <select name="idTypeContrat" value="{{ old('idTypeContrat') }}" title="Selectionner le type de contrat" data-toggle="tooltip" id="idTypeContrat"  class="form-control">
                                                               
                                                                <option selected>Choisir le type</option>
                                                                @foreach($types as $type)
                                                                    <option value="{{$type->idTypeContrat }}"> 
                                                                    {{$type->type}} </option>
                                                                @endforeach
                                                            </select>
                                                            <span class="form-bar"></span>
                                                                <label class="float-label">Type contrat</label>
                                                            </div>
                                                            <div class="col">
                                                                <input type="date" name="dateEmbauche" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Date embauche</label>
                                                            </div>
                                                        </div>
                                                   
                                                            <div class="form-group row">
                                                            <div class="col">
                                                                <input type="string" name="lieuEmbauche" class="form-control" required="" autocomplete="on">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Lieu Embauche</label>
                                                            </div>
                                                            <div class="col">
                                                                <input type="number" name="salaireBase" class="form-control" required="" min="0">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Salaire de base</label>
                                                            </div>
                                                            </div>
                                                             
                                                            <div class="form-group row">
                                                            <div class="col">
                         
                                                                    <select name="modeReglement" value="{{ old('modeReglement') }}" title="Selectionner le mode de paie" data-toggle="tooltip" id="modeReglement"  class="form-control">
                                                                    <option value="">Choisir un mode de paiement</option>
                                                                        <option value="cheque"> Cheque </option>
                                                                        <option value="espece"> Espece</option>
                                                                        <option value="virement"> Virement </option>
                                                                </select>
                                                                <span class="form-bar"></span>
                                                                    <label class="float-label">Mode de reglement</label>
                                                                </div>
                                                                <div class="col">
                                                                    <select name="frequencePaie" value="{{ old('frequencePaie') }}" title="Selectionner une frequence de paie" data-toggle="tooltip" id="frequencePaie"  class="form-control">
                                                                    <option selected>Choisir une frequence de paie</option>
                                                                        <option value="jour"> Jour </option>
                                                                        <option value="semaine"> Semaine</option>
                                                                        <option value="mois"> Mois </option>
                                                                </select>
                                                                    <span class="form-bar"></span>
                                                                    <label class="float-label">Frequence de paie</label>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="card-footer text-center">

                                                                <button type="submit" class="btn btn-primary">Ajouter</button>

                                                            </div>
                                                            </form>
                                                            {!! Form::close() !!}
                                                    </div>
                                                    @endsection  