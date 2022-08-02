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
                                                        <h5>Banque</h5>
                                                        <!--<span>Renseigner les informations relatives pour employetag</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                    {!! Form::open(array('route' => 'banques.store','method'=>'POST')) !!}
                                                   
                                                   
                                                            
                                                            
                                                    <div class="col-md-12">
                                                                <input type="text" name="nomBanque" class="form-control" required="" placeholder="Veuillez entrer le nom de la banque">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Banque</label>
                                                    </div>
           
                                                    <div class="col-md-12">
                                                                <input type="text" name="adress" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Adresse</label>
                                                    </div>
                                                    <div class="col-md-12">
                                                                <input type="integer" name="fax" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Fax</label>
                                                    </div>
                                                    <div class="col-md-12">
                                                                <input type="integer" name="telBanque" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Telephone</label>
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