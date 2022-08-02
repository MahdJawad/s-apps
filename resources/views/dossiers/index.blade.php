@extends('layouts.app')

@section('content')
<div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Fonction</h5>
                                                        <!--<span>Renseigner les informations relatives pour employetag</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                    @foreach ($fonctions as $key => $fonction)
                                                    <div class="form-group form-default">
                                                                                         
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Direction:  @if(!empty($direction->getnomDirection()))

                                                                @foreach($direction->getnomDirection() as $v)

                                                                  <label class="badge badge-success">{{ $v }}</label>

                                                                @endforeach

                                                              @endif         </label>
                                                            </div>
                                                            <div class="form-group form-default">

                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Fonction: {{ $fonction->intituleFonction }}</label>
                                                            </div>
                                                        
                                                              @endforeach  
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                
                                            
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Direction</h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                    @foreach ($directions as $key => $direction)
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Direction</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td scope="row">{{ ++$i }}</th>
                                                                <td>{{ $direction->nomDirection }}</</td>
                                                                <td style="display: flex">
                                                                            <a class="btn btn-info" href="{{ route('directions.show',$direction->idDirection) }}">Vue</a>

                                                                    <a  class="btn btn-primary" href="{{ route('directions.edit',$direction->idDirection) }}">Modifier</a>
                                                                    {!! Form::open(['method' => 'DELETE','route' => ['directions.destroy', $direction->idDirection],'style'=>'display:inline']) !!}

                                                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

                                                                {!! Form::close() !!}
                        </td>
                
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                            @endforeach  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Avancement</h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                    @foreach ($avancements as $key => $avancement)     
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Numero Arrete</th>
                                                               
                                                                <th>categorie</th>
                                                                
                                                                <th>Date decision</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>{{ $avancement->num_arrete }}</th>
                                                                @if(!empty($categorie->getlibelleCat()))
                                                                @foreach($categorie->getlibelleCat() as $v)
                                                                <th>{{ $v }}</th>
                                                                @endforeach
                                                                @endif
                                                                <td>{{ $avancement->dateDecision }}</td>
                                                                <td style="display: flex">
                                                                        <a class="btn btn-info" href="{{ route('avancements.show',$avancement->num_arrete) }}">Vue</a>

                                                                <a  class="btn btn-primary" href="{{ route('avancements.edit',$avancement->num_arrete) }}">Modifier</a>
                                                                {!! Form::open(['method' => 'DELETE','route' => ['avancements.destroy', $avancement->num_arrete],'style'=>'display:inline']) !!}

                                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

                                                            {!! Form::close() !!}
                                                                                    </td>
                
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Contrat</h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                    @foreach ($contrats as $key => $contrat)     
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                               
                                                                <th>categorie</th>
                                                                
                                                                <th>Date decision</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td scope="row">{{ ++$i }}</th>
                                                                @if(!empty($type->gettype()))
                                                                @foreach($type->gettype() as $v)
                                                                <th>{{ $v }}</th>
                                                                @endforeach
                                                                @endif
                                                                <td>{{ $contrat->dateEmbauche }}</td>
                                                                <td>{{ $contrat->lieuEmbauche }}</td>
                                                                <td>{{ $contrat->salaireBase }}</td>
                                                                <td>{{ $contrat->modeReglement }}</td>
                                                                <td>{{ $contrat->frequencePaie }}</td>
                                                                <td style="display: flex">
                                                                        <a class="btn btn-info" href="{{ route('contrats.show',$contrat->id) }}">Vue</a>

                                                                <a  class="btn btn-primary" href="{{ route('users.edit',$contrat->id) }}">Modifier</a>
                                                                {!! Form::open(['method' => 'DELETE','route' => ['contrats.destroy', $contrat->id],'style'=>'display:inline']) !!}

                                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

                                                            {!! Form::close() !!}
                                                                                    </td>
                
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        
                                                             
@endsection