@extends('layouts.app')

@section('content')
<div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Congés</h5>
                                                        
                                                    </div>
                                                    <div class="col-md-12">
                                                        <a href="{{ route('conges.create') }}" class="btn btn-sm btn-primary" style="float: right">
                                                            <i class="icofont icofont-user-alt-3"></i> Ajouter un nouveau
                                                        </a>
                                                    </div>
                                                    <div class="card-block">
                                                    
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Employe</th>
                                                                <th>Type</th>
                                                                <th>Duree conge</th>
                                                                <th>Date de cessation</th>
                                                                <th>Date de reprise</th>
                                                                
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach ($conges as $key => $conge)
                                                            <tr>
                                                                <td scope="row">{{ ++$i }}</th>
                                                                <td>{{ $conge->nom_emp }} {{ $conge->prenom_emp }}</td>
                                                                <td>{{ $conge->type  }}</td>
                                                                <td>{{ $conge->dureeConge  }}</td>
                                                                <td>{{ $conge->dateCessation }}</td>
                                                                <td>{{ $conge->dateReprise }}</td>
                                                                
                                                                
                                                                <td style="display: flex">
                                                                        <a class="btn btn-info" href="{{ route('conges.show',$conge->idConge) }}">Vue</a>

                                                                <a  class="btn btn-primary" href="{{ route('conges.edit',$conge->idConge) }}">Modifier</a>
                                                                {!! Form::open(['method' => 'DELETE','route' => ['conges.destroy', $conge->idConge],'style'=>'display:inline']) !!}

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
                                
                                        @endsection