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
                                                        <h5>Grille</h5>
                                                        <!--<span>Renseigner les informations relatives pour employetag</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                    {!! Form::open(array('route' => 'grilles.store','method'=>'POST')) !!}
                                                    <form class="form-material">
                                                      <div class="form-group row">
                                                      <div class="col">                                  
                                                                
                                                                <select  title="Selectionner la categorie correspondante" data-toggle="tooltip" id="idCat" name="idCat"  class="form-control">
                                                                <option selected>Veuillez Choisir une categorie</option>
                                                                @foreach($categories as $categorie)
                                                                    <option value="{{$categorie->idCat}}"> 
                                                                    {{$categorie->libelleCat}} </option>
                                                                @endforeach
                                                            </select>
                                                            <span class="form-bar"></span>
                                                                <label class="float-label">Categorie</label>
                                                    </div>
                                                    <div class="col">                                  
                                                               
                                                                <select name="idEchelon" value="{{ old('idEchelon') }}" title="Selectionner echelon correspondante" data-toggle="tooltip" id="idEchelon"  class="form-control">
                                                                <option selected>Veuillez Choisir un echelon</option>
                                                                @foreach($echelons as $echelon)
                                                               
                                                                    <option value="{{$echelon->idEchelon }}"> 
                                                                    {{$echelon->libelleEchelon}} </option>
                                                                @endforeach
                                                            </select>
                                                            <span class="form-bar"></span>
                                                                <label class="float-label">Echelon</label>
                                                    </div>
                                                      </div>
                                                   
                                                            
                                                            
                                                    <div class="col-3">
                                                                <input type="number" name="indice" class="form-control" required="" min="0" uniqid>
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Indice</label>
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