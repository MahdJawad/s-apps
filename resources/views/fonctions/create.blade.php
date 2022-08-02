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
                                                        <h5>Fonction</h5>
                                                      
                                                    </div>
                                                    <div class="card-block">
                                                    {!! Form::open(array('route' => 'fonctions.store','method'=>'POST')) !!}
                                                    <form class="form-material">
                                                    <div class="col-ms-10">                                  
                                                                <span class="form-bar"></span>
                                                                <select name="idDirection" value="{{ old('idDirection') }}" title="Selectionner la direction correspondante" data-toggle="tooltip" id="idDirection"  class="form-control">
                                                                @foreach($directions as $direction)
                                                                    <option value="{{$direction->idDirection }}"> 
                                                                    {{$direction->nomDirection}} </option>
                                                                @endforeach
                                                            </select>
                                                                <label class="float-label">Direction</label>
                                                            </div>
                                                            
                                                            
                                                    <div class="form-group form-default form-static-label">
                                                                <input type="text" name="intituleFonction" class="form-control" required="" placeholder="Veuillez saisir la fonction">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Fonction</label>
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