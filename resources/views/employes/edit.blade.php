@extends('layouts.app')

@section('content')
<div class="col-md-12">


@if (count($errors) > 0)

  <div class="alert alert-danger">

    <strong>Whoops!</strong> probleme au niveau des entrees.<br><br>

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
                                                        <h5>Modifier</h5>
                                                        <!--<span>Renseigner les informations relatives pour employetag</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                    {!! Form::model($employe, ['method' => 'PATCH','route' => ['employes.update', $employe->matricule]]) !!}
                                                    <form>
                                                
                                                            <div class="form-group row">
                                                            <div class="col-sm-6">
                                                                <input type="text" name="nom_emp" class="form-control" required="" pattern="[a-zA-Z\s]+" value='{{$employe->nom_emp}}'>
                                                                <span class="form-bar"></span>
                                                                <label class="float-label" style="color: blue;">Nom</label>
                                                            </div>
                                                           
                                                            <div class="col-sm-6">
                                                                <input type="text" name="prenom_emp" class="form-control" required="" pattern="[a-zA-Z\s]+" value='{{$employe->prenom_emp}}'>
                                                                <span class="form-bar"></span>
                                                                <label class="float-label" style="color: blue;">Prenom</label>
                                                            </div> 
                                                            </div>
                                                            <div class="form-group row">
                                                            <div class="col-sm-6">
                                                                <input type="text" name="adress" class="form-control" required="" value='{{$employe->adress}}'>
                                                                <span class="form-bar"></span>
                                                                <label class="float-label" style="color: blue;">Adresse</label>
                                                            </div>
                                                             
                                                            <div class="col-sm-6">
                                                                <input type="email" name="mail" class="form-control" required="" value='{{$employe->mail}}'>
                                                                <span class="form-bar"></span>
                                                                <label class="float-label" style="color: blue;">Email (exa@gmail.com)</label>
                                                            </div>
                                                          
                                                            </div>
                                                            <div class="form-group row">
                                                            <div class="col-sm-6">
                                                                <input type="number" name="matricule" class="form-control" required=""  min="0" value='{{$employe->matricule}}'>
                                                                <span class="form-bar"></span>
                                                                <label class="float-label" style="color: blue;">Matricule</label>
                                                            </div>
                                                           
                                                           
                                                            <div class="col-sm-6">
                                                                <input type="date" name="date_prise_fonction" class="form-control" required="" value='{{$employe->date_prise_fonction}}'>
                                                                <span class="form-bar"></span>
                                                                <label class="float-label" style="color: blue;">Date de prise de fonction</label>
                                                            </div>
                                                            </div>
                                                    
                                                           
                                                   <div class="form-group row">
                                                   <div class="col-sm-6">
                                                                <input type="text" name="lieunaiss" class="form-control" required="" pattern="[a-zA-Z\s]+" value='{{$employe->lieunaiss}}'>
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Lieu de naissance</label>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input type="date" name="datenaiss" class="form-control" required="" value='{{$employe->datenaiss}}'>
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Date de naissance</label>
                                                            </div>
                                                   </div>
                                                            <div class="form-group row">
                                                            <div class="col">                                 
                                                                
                                                                <select name="idFonction" value="{{ old('idFonction') }}" title="Selectionner la fonction" data-toggle="tooltip" id="idFonction"  class="form-control" value='{{$employe->idFonction}}'>
                                                                
                                                                    <option selected>Choisir la fonction</option>
                                                                    @foreach($fonctions as $fonction)
                                                                    <option value="{{$fonction->idFonction }}"> 
                                                                    {{$fonction->intituleFonction}} </option>
                                                                @endforeach
                                                            </select>
                                                            <span class="form-bar"></span>
                                                                <label class="float-label" style="color: blue;">Fonction</label>
                                                            </div>
                                                            <div class="col-sm-4">
                                                            
                                                            <select name="idCat" value="{{ old('idCat') }}" title="Selectionner la categorie" data-toggle="tooltip" id="idCat"  class="form-control" value='{{$employe->idCat}}'>
                                                            
                                                                <option selected>Choisir une categorie</option>
                                                                @foreach($categories as $categorie)
                                                                <option value="{{$categorie->idCat }}"> 
                                                                {{$categorie->libelleCat}} </option>
                                                            @endforeach
                                                        </select>
                                                        <span class="form-bar"></span>
                                                            <label class="float-label" style="color: blue;">Categorie</label>
                                                        </div>
                                                        <div class="col">
                                                                <input type="tel" name="tel" class="form-control" required=""  pattern="[0-9]{3}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" value='{{$employe->tel}}'>
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Numero de telephone (227-99-99-99-99)</label>
                                                            </div>
                                                            </div>
                                                            <div class="form-group row">
                                                      <div class="col">
                                                            <select name="idContrat" value="{{ old('idContrat') }}" title="Selectionner le lieu embauche" data-toggle="tooltip" id="idContrat"  class="form-control" value='{{$employe->idContrat}}'>
                                                            
                                                                <option selected>Choisir le lieu embauche</option>
                                                                @foreach($contrats as $contrat)
                                                                <option value="{{$contrat->idContrat }}"> 
                                                                {{$contrat->lieuEmbauche}} </option>
                                                            @endforeach
                                                        </select>
                                                        <span class="form-bar"></span>
                                                            <label class="float-label" style="color: blue;">Lieu embauche</label>
                                                        </div>
                                                        <div class="col-ms-4">
                                                                <select id="sexe" name="sexe" class="form-control" data-toggle="tooltip" value='{{$employe->sexe}}'>
                                                                <option selected>Choisir le genre</option>
                                                                <option value="masculin">masculin</option>
                                                                <option value="feminin">feminin</option>
                                                                </select>
                                                                    <span class="form-bar"></span>
                                                                    <label class="float-label">Sexe</label>
                                                            </div>
                                                            <div class="col">
                                                                <select id="situation_matrimoniale" name="situation_matrimoniale" class="form-control" value='{{$employe->situation_matrimoniale}}'>
                                                                <option selected>Choisir la situation</option>
                                                                <option value="celibataire">celibataire</option>
                                                                <option value="mariee">mariee</option>
                                                                
                                                                </select>
                                                                    <span class="form-bar"></span>
                                                                    <label class="float-label" style="color: blue;">Situation matrimoniale</label>
                                                            </div>
                                                            </div>
                                             
                                                               <div class="form-group row">
                                                               <div class="col">
                                                                <input type="number" name="nb_femme" class="form-control" required="" min="0" value='{{$employe->nb_femme}}'>
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Nombre de femme</label>
                                                            </div>
                                                            <div class="col-ms-4">
                                                                <input type="number" name="nb_enfant" class="form-control" required="" min="0"  value='{{$employe->nb_enfant}}'>
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Nombre enfant</label>
                                                            </div>
                                                              
                                                               <div class="col">
                                                                <input type="number" name="num_cnss" class="form-control" required="" min="0"  value='{{$employe->num_cnss}}'>
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Numero cnss</label>
                                                                </div>
                                                        </div>
                                                 
                                                <div class="card-footer text-center">

                                                    <button type="submit" class="btn btn-primary">Enregistrer</button>

                                                    </div>
                                                    </form>
                                                    {!! Form::close() !!}
                                            </div>
                                           
    @endsection