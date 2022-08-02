@extends('layouts.app')

@section('content')
<div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Absences</h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="col-md-12">
                                                        <a href="{{ route('abscences.create') }}" class="btn btn-sm btn-primary" style="float:right;" >
                                                            <i class="icofont icofont-user-alt-3"></i> Ajouter un nouveau
                                                        </a>
                                                    </div>
                                                    <div class="card-block">
                                                    
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                
                                                                <th>Employe</th>
                                                               
                                                                <th>Date de debut absence</th>
                                                                <th>Date fin absence</th>
                                                               
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach ($abscences as $key => $absence)
                                                            <tr>
                                                                <td scope="row">{{ ++$i }}</th>
                                                               
                                                                <td>{{ $absence->nom_emp }} {{ $absence->prenom_emp }}</td>
                                                                <td>{{ $absence->debut }}</td>
                                                                <td>{{ $absence->fin }}</td>
                                                                
                                                                <td style="display: flex">
                                                                        <a class="btn btn-info" href="{{ route('abscences.show',$absence->numAbsence) }}">Vue</a>

                                                                <a  class="btn btn-primary" href="{{ route('abscences.edit',$absence->numAbsence) }}">Modifier</a>
                                                                {!! Form::open(['method' => 'DELETE','route' => ['abscences.destroy', $absence->numAbsence],'style'=>'display:inline']) !!}

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