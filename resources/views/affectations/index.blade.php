@extends('layouts.app')

@section('content')
<div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Affectation</h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="col-md-12">
                                                        <a href="{{ route('affectations.create') }}" class="btn btn-sm btn-primary">
                                                            <i class="icofont icofont-user-alt-3"></i> Ajouter un nouveau
                                                        </a>
                                                    </div>
                                                    <div class="card-block">
                                                    
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Numero affectation</th>
                                                                <th>Employe</th>
                                                                <th>Type affectation</th>
                                                                <th>Lieu affectation</th>
                                                                <th>Date affectation</th>
                                                                <th>Date prise de service</th>
                                                               
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach ($affectations as $key => $affectation)
                                                            <tr>
                                                                <td scope="row">{{ ++$i }}</th>
                                                                <td>{{ $affectation->idNaf }}</td>
                                                                <td>{{ $affectation->matricule }}</td>
                                                                <td>{{ $affectation->typeAffect}}</td>
                                                                <td>{{ $affectation->lieuAffect }}</td>
                                                                <td>{{ $affectation->dateAffect}}</td>
                                                                <td>{{ $affectation->datePriseServ }}</td>
                                                                
                                                                <td style="display: flex">
                                                                        <a class="btn btn-info" href="{{ route('affectations.show',$affectation->idNaf) }}">Vue</a>

                                                                <a  class="btn btn-primary" href="{{ route('affectations.edit',$affectation->idNaf) }}">Modifier</a>
                                                                {!! Form::open(['method' => 'DELETE','route' => ['affectations.destroy', $affectation->idNaf],'style'=>'display:inline']) !!}

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
                                        {!! $affectations->render() !!}
                                        @endsection