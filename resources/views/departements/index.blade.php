@extends('layouts.app')

@section('content')
<div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Departement</h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="col-md-12">
                                                        <a href="{{ route('departements.create') }}" class="btn btn-sm btn-primary" style=" float: right">
                                                            <i class="icofont icofont-user-alt-3"></i> Ajouter un nouveau
                                                        </a>
                                                    </div>
                                                    <div class="card-block">
                                                    
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Direction</th>
                                                                <th>Departement</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach ($departements as $key => $departement)
                                                            <tr>
                                                                <td scope="row">{{ ++$i }}</th>
                                                                <td>{{ $departement->idDirection }}</td>
                                                                <td>{{ $departement->nomDepartement }}</td>
                                                                
                                                                <td style="display: flex">
                                                                        <a class="btn btn-info" href="{{ route('departements.show',$departement->idDepartement) }}">Vue</a>

                                                                <a  class="btn btn-primary" href="{{ route('departements.edit',$departement->idDepartement) }}">Modifier</a>
                                                               
                                                                                    </td>
                                                                
                                                            </tr>
                                                            @endforeach 
                                                        </tbody>
                                                    </table>
                                                             
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {!! $departements->render() !!}
                                        @endsection