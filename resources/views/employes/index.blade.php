@extends('layouts.app')

@section('content')
<div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Employe</h5>
                                                        
                                                    </div>
                                                    <div class="form-group row">
                                                    <div class="col" >
                                                         <a href="{{ route('employes.create') }}" class="btn btn-sm btn-primary" style="float: right;">
                                                                <i class="icofont icofont-user-alt-3" ></i> Ajouter un nouveau
                                                            </a>
                                                            </div>
                                                    </div>
                                                    <div class="card-block">
                                                    
                                                    <table class="table table-responsive p-0" style="weight: 1000px;">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Matricule</th>
                                                                <th>Nom</th>
                                                                <th>Prenom</th>
                                                                <th>Fonction</th>
                                                                <th>Adresse</th>
                                                                <th>Telephone</th>
                                                                <th>Email</th>
                                                               
                                                                
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach ($employes as $employe)
                                                            <tr>
                                                                <td scope="row">{{ ++$i }}</th>
                                                                <td>{{ $employe->matricule }}</td>
                                                                <td>{{ $employe->nom_emp }}</td>
                                                                <td>{{ $employe->prenom_emp }}</td>
                                                                <td>{{ $employe->intituleFonction }}</td>               
                                                                <td>{{ $employe->adress }}</td>     
                                                                <td>{{ $employe->tel }}</td>
                                                                <td>{{ $employe->mail }}</td>
                                                               
                                                                
                                                                
                                                                <td style="display: flex">
                                                                   <a class="btn btn-info" href="{{ route('employes.show', $employe->matricule) }}">Vue</a>

                                                                    <a  class="btn btn-primary" href="{{ route('employes.edit', $employe->matricule) }}">Modifier</a>
                                                                    {!! Form::open(['method' => 'DELETE','route' => ['employes.destroy', $employe->matricule],'style'=>'display:inline']) !!}

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