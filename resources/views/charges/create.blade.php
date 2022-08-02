@extends('layouts.app')

@section('content')
<div class="col-md-12">


@if (count($errors) > 0)

  <div class="alert alert-danger">

    <strong>Whoops!</strong> Probleme au niveau des entrees.<br><br>

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
                                                        <h5>Charge famille</h5>
                                                        <!--<span>Renseigner les informations relatives pour employetag</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                    {!! Form::open(array('route' => 'charges.store','method'=>'POST')) !!}
                                                    <form >
                                                      <div class="form-group row">
                                                      <div class="col">                                  
                                                                
                                                                <select name="matricule" value="{{ old('matricule') }}" title="Selectionner le matricule correspondant" data-toggle="tooltip" id="matricule"  class="form-control">
                                                                <option selected>Veuillez Choisir un employe</option>
                                                                @foreach($employes as $employe)
                                                                    <option value="{{$employe->matricule }}"> 
                                                                    {{$employe->matricule}} {{$employe->nom}} </option>
                                                                @endforeach
                                                            </select>
                                                            <span class="form-bar"></span>
                                                                <label class="float-label">Employe</label>
                                                    </div>
                                                            
                                                            
                                                    <div class="col-ms-4">
                                                                <input type="text" name="nom" class="form-control" required="" placeholder="Veuillez saisir un nom" pattern="[a-zA-Z\s]+">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Nom</label>
                                                    </div>
                                                    <div class="col">
                                                                <input type="text" name="prenom" class="form-control" required="" placeholder="Veuillez saisir un prenom" pattern="[a-zA-Z\s]+">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Prenom</label>
                                                    </div>
                                                      </div>
                                                   <div class="form-group row">
                                                   <div class="col">
                                                                <input type="date" name="dateNaiss" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Date de naissance</label>
                                                    </div>
                                                    <div class="col">
                                                                <input type="text" name="lieuNaiss" class="form-control" required="" placeholder="Veuillez saisir un lieu" pattern="[a-zA-Z\s]+">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Lieu de naissance</label>
                                                    </div>
                                                   </div>
                                                   <div class="form-group row">
                                                   <div class="col">
                                                                
                                                                <select name="lienFamille" value="lienFamille" title="Selectionner le lien de famille correspondant"   class="form-control">
                                                                <option selected> Selectionner le lien de famille </option>
                                                                <option value="Epoux">Epoux</option>
                                                                    <option value="Epouse"> Epouse </option>
                                                                    <option value="Enfant"> Enfant </option>
                                                                
                                                            </select>
                                                            <span class="form-bar"></span>
                                                                <label class="float-label">Lien de famille</label>
                                                    </div>
                                                    <div class="col">
                                                            <select id="sexe" name="sexe" class="form-control">
                                                              <option value="">Choisir le genre</option>
                                                             <option value="masculin">masculin</option>
                                                              <option value="feminin">feminin</option>
                                                            </select>
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Sexe</label>
                                                            </div>
                                                   </div>
                                                   
                                                    <div class="card-footer text-center">

                                                  <button type="submit" class="btn btn-primary">Ajouter</button>

                                                  </div>
                                                  </form>
                                                            {!! Form::close() !!}  
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            @endsection  