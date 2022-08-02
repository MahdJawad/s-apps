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
                                                        <h5>Affectation</h5>
                                                    
                                                    </div>
                                                    <div class="card-block">
                                                    {!! Form::open(array('route' => 'affectations.store','method'=>'POST')) !!}
                                                    <div class="col-md-6">
                                                                <input type="integer" name="idNaf" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Numero affectation</label>
                                                    </div>
                                                    <div class="col-md-6">                                  
                                                                <span class="form-bar"></span>
                                                                <select name="matricule" value="{{ old('matricule') }}" title="Selectionner le matricule correspondant" data-toggle="tooltip" id="matricule"  class="form-control">
                                                                @foreach($employes as $employe)
                                                                    <option value="{{$employe->matricule }}"> 
                                                                    {{$employe->matricule}} {{$employe->nom}} </option>
                                                                @endforeach
                                                            </select>
                                                                <label class="float-label">Employe</label>
                                                    </div>
                                                            
                                                            
                                                    <div class="col-md-6">
                                                                <input type="text" name="typeAffect" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Type affectation</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                                <input type="text" name="lieuAffect" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Lieu affectation</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                                <input type="date" name="dateAffect" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Date affectation</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                                <input type="date" name="datePriseServ" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Date prise service</label>
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