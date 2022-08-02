@extends('layouts.app')

@section('content')
<div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Contrat</h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="col-md-12">
                                                        <a href="{{ route('contrats.create') }}" class="btn btn-sm btn-primary" style="float: right;">
                                                            <i class="icofont icofont-user-alt-3"></i> Ajouter un nouveau
                                                        </a>
                                                    </div>
                                                    <div class="card-block">
                                                       
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                               
                                                                <th>Type contrat</th>
                                                                <th>Date embauche</th>
                                                                <th>Lieu embauche</th>
                                                                <th>Salaire de base</th>
                                                                <th>Mode de reglement</th>
                                                                <th>Frequence de paie</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach ($contrats as $key => $contrat)  
                                                            <tr>
                                                                <td scope="row">{{ ++$i }}</th>
                                                                
                                                                <th>{{ $contrat->type }}</th>
                                                                <td>{{ $contrat->dateEmbauche }}</td>
                                                                <td>{{ $contrat->lieuEmbauche }}</td>
                                                                <td>{{ $contrat->salaireBase }}</td>
                                                                <td>{{ $contrat->modeReglement }}</td>
                                                                <td>{{ $contrat->frequencePaie }}</td>
                                                                <td style="display: flex">
                                                                        <a class="btn btn-info" href="{{ route('contrats.show',$contrat->idContrat) }}">Vue</a>

                                                                <a  class="btn btn-primary" href="{{ route('users.edit',$contrat->idContrat) }}">Modifier</a>
                                                                {!! Form::open(['method' => 'DELETE','route' => ['contrats.destroy', $contrat->idContrat],'style'=>'display:inline']) !!}
                                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                                            {!! Form::close() !!}
                                                                                    </td>
                
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                    </div>
                                                   
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        
                                        @endsection