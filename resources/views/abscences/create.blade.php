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
                                                        <h5>Absence</h5>
                                                    
                                                    </div>
                                                    <div class="card-block">
                                                    {!! Form::open(array('route' => 'abscences.store','method'=>'POST')) !!}
                                                    @csrf
                                                    <form>
                                                      
                                                      <div class="col-ms-6">                                  
                                                                
                                                                <select name="matricule" value="{{ old('matricule') }}" title="Selectionner employe correspondant" data-toggle="tooltip" id="matricule"  class="form-control">
                                                                <option selected>Choisir un employe</option>
                                                                @foreach($employes as $employe)
                                                                    <option value="{{$employe->matricule }}"> 
                                                                    {{$employe->nom_emp}} </option>
                                                                @endforeach
                                                            </select>
                                                            <span class="form-bar"></span>
                                                                <label class="float-label">Employe</label>
                                                        
                                                       </div>
                                                     <div class="form-group row">
                                                     <div class="col">
                                                                <input type="date" name="debut" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Date debut</label>
                                                    </div>
                            
                                                   
                                                    <div class="col">
                                                                <input type="date" name="fin"  class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Date fin </label>
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