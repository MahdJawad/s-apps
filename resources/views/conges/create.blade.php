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
                                                        <h5>Conge</h5>
                                                        <!--<span>Renseigner les informations relatives pour employetag</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                    
                                                    {!! Form::open(array('route' => 'conges.store','method'=>'POST')) !!}
                                                    <form >
                                                      <div class="form-group row">
                                                      <div class="col">                                  
                                                                
                                                                <select name="matricule" value="{{ old('matricule') }}" title="Selectionner le matricule correspondant" data-toggle="tooltip" id="matricule"  class="form-control">
                                                                <option selected>Choisir un employe</option>
                                                                @foreach($employes as $employe)
                                                                    <option value="{{ $employe->matricule }}"> 
                                                                    {{ $employe->matricule . ' - ' . $employe->nom_emp . ' ' . $employe->prenom_emp }}   </option>
                                                                @endforeach
                                                            </select>
                                                            <span class="form-bar"></span>
                                                                <label class="float-label">Employe</label>
                                                    </div>

                                                    <div class="col">                                  
                                                                
                                                                <select name="idTypeConge" value="{{ old('idTypeConge') }}" title="Selectionner le type de conge correspondant" data-toggle="tooltip" id="idTypeConge"  class="form-control">
                                                                <option selected>Choisir le type de conge</option>
                                                                @foreach($types as $type)
                                                                    <option value="{{ $type->idTypeConge }}"> 
                                                                    {{$type->type}} </option>
                                                                @endforeach
                                                            </select>
                                                            <span class="form-bar"></span>
                                                                <label class="float-label">Type conge</label>
                                                    </div>
                                                      </div>

                                                    
                                                      <div class="form-group row">
                                                      <div class="col">
                                                                <input type="number" name="dureeConge" class="form-control" required="" placeholder="Veuillez inserer le nombre de jours" min="1" max="30">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Duree conge</label>
                                                    </div>
           
                                                    <div class="col-sm-4">
                                                                <input type="date" name="dateCessation" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Date de cessation</label>
                                                    </div>
                                                    <div class="col">
                                                                <input type="date" name="dateReprise" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Date de reprise</label>
                                                    </div>
                                                      </div>      
                                                            
                                                   
                                                   
                                                    
                                                    
                                                    <div class="card-footer text-center">

                                                  <button type="submit" class="btn btn-primary">Submit</button>

                                                  </div>
                                                  </form>
                                                            {!! Form::close() !!}  
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            @endsection  