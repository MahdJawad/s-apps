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
                                                        <h5>Mission</h5>
                                                        <!--<span>Renseigner les informations relatives pour employetag</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                    {!! Form::open(array('route' => 'missions.store','method'=>'POST')) !!}
                                                    <div class="col-md-6">
                                                                <input type="integer" name="numOrdre" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">numero ordre de mission</label>
                                                    </div>
                                                   
                                                            
                                                            
                                                    <div class="col-md-6">
                                                                <input type="text" name="objetMission" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Objet de la mission</label>
                                                    </div>
           
                                                    <div class="col-md-6">
                                                                <input type="text" name="destination" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Destination</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                                <input type="date" name="dateDepart" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Date de depart</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                                <input type="date" name="dateRetour" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Date de retour</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                    <select id="moyen">
                                                              <option value="">Choisir le moyen de deplacement</option>
                                                             <option value="aerien">aerien</option>
                                                              <option value="terrestre">terrestre</option>
                                                            </select>
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Moyen de deplacement</label>
                                                    </div>
                                                    
                                                    <div class="card-footer text-center">

                                                  <button type="submit" class="btn btn-primary">Submit</button>

                                                  </div>
                                                            {!! Form::close() !!}  
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            @endsection  