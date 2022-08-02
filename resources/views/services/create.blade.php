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
                                                    {!! Form::open(array('route' => 'services.store','method'=>'POST')) !!}
                                                    <form>
                                                      <div class="form-group row">
                                                      <div class="col">                                  
                                                                
                                                                <select name="idDepartement" value="{{ old('idDepartement') }}" title="Selectionner le departement correspondant" data-toggle="tooltip" id="idDepartement"  class="form-control">
                                                                <option selected> Selectionner le departement </option>
                                                                @foreach($departements as $departement)
                                                                    
                                                                    <option value="{{$departement->idDepartement }}"> {{$departement->nomDepartement}} </option>
                                                                @endforeach
                                                            </select>
                                                            <span class="form-bar"></span>
                                                                <label class="float-label">Departement</label>
                                                    </div>
                                                            
                                                            
                                                    <div class="col">
                                                                <input type="text" name="nomService" class="form-control" required="" placeholder="Veuillez saisir le service">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Service</label>
                                                    </div>
                                                      </div>
                                                   
                                                   
                                                    <div class="card-footer text-center">

                                                  <button type="submit" class="btn btn-primary">Submit</button>

                                                  </div>
                                                  </div>
                                                            {!! Form::close() !!}  
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            </div>
                                            @endsection  