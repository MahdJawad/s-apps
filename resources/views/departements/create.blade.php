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
                                                        <h5>Service</h5>
                                                        
                                                    </div>
                                                    <div class="card-block">
                                                    {!! Form::open(array('route' => 'departements.store','method'=>'POST')) !!}
                                                    <form class="form-material">
                                                    <div class="col-ms-10">                                  
                                                                
                                                                <select name="idDirection" value="{{ old('idDirection') }}" title="Selectionner une direction correspondante" data-toggle="tooltip" id="idDirection"  class="form-control">
                                                                <option value=""> Selectionner la direction </option>
                                                                @foreach($directions as $direction)
                                                                  
                                                                    <option value="{{$direction->idDirection }}"> {{$direction->nomDirection}} </option>
                                                                @endforeach
                                                            </select>
                                                            <span class="form-bar"></span>
                                                                <label class="float-label">Direction</label>
                                                    </div>
                                                            
                                                            
                                                    <div class="form-group form-default form-static-label">
                                                                <input type="text" name="nomDepartement" class="form-control" required="" placeholder="Veuillez saisir le departement">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Departement</label>
                                                    </div>
                                                   
                                                    <div class="card-footer text-center">

                                                  <button type="submit" class="btn btn-primary">Ajouter</button>

                                                  </div>
                                                  </div>
                                                            {!! Form::close() !!}  
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            @endsection  